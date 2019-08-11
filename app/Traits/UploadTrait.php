<?php

namespace App\Traits;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

trait UploadTrait
{
    public function uploadMultiple(array $uploadedFiles, $folder = null, $disk = 'public', $filename = null)
    {
        //$name = !is_null($filename) ? $filename : str_random(25);
        $paths = [];
        foreach ($uploadedFiles as $file) {
            $name = time() . '.' . $file->getClientOriginalExtension();
            $path = $file->storeAs($folder, $name, $disk);
            array_push($paths, $path);
        }
        return implode(',', $paths);

    }

    public function uploadOne(UploadedFile $uploadedFile, $folder = null, $disk = 'public', $filename = null)
    {
        //$name = !is_null($filename) ? $filename : str_random(25);
        $name = time() . '.' . $uploadedFile->getClientOriginalExtension();
        $path = $uploadedFile->storeAs($folder, $name, $disk);
        return $path;
    }

    public function getUrl($path)
    {
        if (preg_match('/^http/', $path)) {
            return $path;
        }
        return env("APP_URL") . "/storage/" . $path;
    }
}