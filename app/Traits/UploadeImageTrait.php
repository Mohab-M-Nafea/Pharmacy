<?php

namespace App\Traits;



use Illuminate\Http\Request;

trait UploadeImageTrait
{
    public function uploadImage(Request $request, $name, $folder)
    {
        $image = $request->file($name)->getClientOriginalName();
        return $request->file($name)->storeAs($folder, $image, 'images');
    }
}
