<?php

namespace App\Http\traits;

trait media
{

    public function uploadImage($image, $folder)
    {
        $imageExtenstion = $image->extension();
        $newImage = uniqid() . "." . $imageExtenstion;
        $image->move(public_path('/images' . $folder . '/'), $newImage);
        return $newImage;
    }

    public function deletePhoto($photoPath)
    {
        if (file_exists($photoPath)) {
            unlink($photoPath);
            return true;
        }
        return false;
    }
}