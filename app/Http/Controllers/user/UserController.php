<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:6',
        ]);
        $credentials = $request->only('email', 'password');
        $user = DB::table('users')->where('email', $credentials['email'])->first();
        if ($user && Hash::check($credentials['password'], $user->password)) {
            // Authentication passed
            // dd($user);
            session(['login' => true, 'id' => $user->id, 'name' => $user->name]);
            return redirect('/');
        } else {
            // Authentication failed
            return redirect('/login')->with(['message' => 'Wrong email or password'])->withInput();
        }
    }
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
            'confirm_password' => 'required|string|same:password', // Ensure confirm_password matches password

        ]);

        if ($validator->fails()) {
            return redirect('/register')
                ->withErrors($validator)
                ->withInput();
        }

        // Create the user
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // You can authenticate the user here if needed

        // Redirect to a success page or another route
        return redirect('/login')->with('success', 'Registration successful. Please log in.');
    }
    public function logout()
    {
        session()->flush();
        return redirect('/login');
    }
}
