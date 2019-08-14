<?php

namespace App\Traits;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;

trait UploadTrait
{
    public function uploadMultiple(array $uploadedFiles, $folder = null, $disk = 'public', $filename = null)
    {
        //$name = !is_null($filename) ? $filename : str_random(25);
        $paths = [];
        foreach ($uploadedFiles as $file) {
            if(explode('/',$file->getMimeType())[0] === 'image') {
                $name = preg_replace("/( )/","",pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME));
                $fileName = $name.time() . '.' . $file->getClientOriginalExtension();
                $path = $file->storeAs($folder, $fileName, $disk);
                array_push($paths, $path);
            }
        }

        if(empty($paths)){
            return null;
        }
        return implode(',', $paths);

    }

    public function uploadOne(UploadedFile $uploadedFile, $folder = null, $disk = 'public', $filename = null)
    {
        //$name = !is_null($filename) ? $filename : str_random(25);
        $path = null;
        if(explode('/',$uploadedFile->getMimeType())[0] === 'image') {
            $name = time() . '.' . $uploadedFile->getClientOriginalExtension();
            $path = $uploadedFile->storeAs($folder, $name, $disk);
        }
        return $path;
    }

    public function getUrl($path)
    {
        if (preg_match('/^http/', $path)) {
            return $path;
        }
        return env("APP_URL") . "/storage/" . $path;
    }

    public function getUrls($paths){
        $results = [];
        foreach ($paths as $path) {
            array_push( $results, $this->getUrl($path));
        }
        return implode(',', $results);
    }
}