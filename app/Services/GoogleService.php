<?php


namespace App\Services;


use App\Interfaces\IMyService;

class GoogleService implements IMyService
{

    public function complete()
    {
        // TODO: Implement complete() method.
        dd('googleservie call complete');
    }

    public function broken()
    {
        // TODO: Implement broken() method.
        dd('googleservie call broken');
    }
}