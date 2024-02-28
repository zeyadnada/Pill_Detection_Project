<?php

namespace App\Http\Controllers\api;

use App\Helpers\MyTokenManager;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redis;

class UserController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|unique:users|max:255',
            'password' => 'required|string|min:6',
            'phone' => "required|string|unique:users",
        ]);

        $user = new User([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone' => $request->phone,
        ]);

        $user->save();
        $lastInsertedUserId = $user->id;
        $tokens = MyTokenManager::CreateToken($lastInsertedUserId);
        return [
            'message' => 'user created successfully',
            'token' => $tokens,
        ];
    }
    public function login(Request $request)
    {
        $email = $request->email;
        $password = $request->password;

        // Retrieve the user from the database by email
        $user = DB::table('users')->where('email', $email)->first();

        if ($user && Hash::check($password, $user->password)) {
            // Password matches, generate token and return success response
            $token = MyTokenManager::createToken($user->id);
            return response()->json([
                'message' => 'Logged in successfully',
                'token' => $token,
            ]);
        } else {
            // Either user not found or password doesn't match
            return response()->json([
                'error' => 'Wrong email or password',
            ], 401);
        }
    }
    public function profile(Request $request)
    {
        $user = MyTokenManager::currentUser($request);
        return [
            'user' => $user
        ];
    }
    public function logout(Request $request)
    {
        MyTokenManager::removeUserTokens($request);
        return [
            'message' => 'logged out successfully',
        ];
    }
    public function uploadUserPhoto(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        // Retrieve the uploaded photo from the request
        if ($request->hasFile('photo')) {
            $uploadedPhoto = $request->file('photo');
            // Generate a unique name for the image
            $imageName = time() . '.' . $uploadedPhoto->getClientOriginalExtension();
            // Move the uploaded photo to the desired location
            $uploadedPhoto->move(public_path('application/users/image'), $imageName);
            // Save the photo path to the user's record in the database
            $user = MyTokenManager::currentUser($request);
            $userPath = 'application/users/image/' . $imageName;
            DB::update('update users set photo =? where id=?', [$userPath, $user->id]);
            // $user->photo = 'application/users/image/' . $imageName;
            // $user->save();
            // Return a JSON response indicating success and the path to the uploaded photo
            return response()->json(['success' => 'Image uploaded successfully.', 'path' => $userPath]);
        } else {
            // Handle case where no photo was uploaded
            return response()->json(['error' => 'No photo uploaded.'], 400);
        }
    }
    public function updatePersonalInformation(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|unique:users|max:255',
            'password' => 'required|string|min:6',
            'phone' => "required|string|unique:users",
        ]);
        $user = MyTokenManager::currentUser($request);
        DB::update(
            'update users set name =?,email=?,password=?,phone=? where id=?',
            [$request->name, $request->email, Hash::make($request->password), $request->phone, $user->id]
        );
        $newUser = DB::select('select * from users where id=?', [$user->id]);
        return response()->json(['success' => 'personal information updated successfully.', 'user' => $newUser]);
    }
}
