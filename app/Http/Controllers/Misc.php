<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class Misc extends Controller
{
    public function image($w, $h, $filename)
    {
        
        $link = Storage::disk('public')->url("$filename");
        
        if(strpos($filename, ' ') !== false) {
            // $path = str_replace('https://2020.dooz.ps/', '', $link);
            // return response()->file("$path");
        }

        $path = parse_url($link, PHP_URL_PATH);
        $link = $_SERVER['DOCUMENT_ROOT'] . $path;


        $img = Image::cache(function ($image) use ($w, $h, $link) {
            
            return $image->make("$link")->fit($w, $h, function ($constraint) {
                // TODO
                // $constraint->aspectRatio();
                $constraint->upsize();
            })->encode('jpg', 75);
            
        }, 50000, true);
        return $img->response();
    }



    
}
