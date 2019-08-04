<?php


namespace App\Services;


use App\Interfaces\IMyService ;

class MyService implements IMyService
{
    private $sharedData = 'notthing';
    public function doThing()
    {
        $this->sharedData .= '|dothing';
        dd('doThing in Myservice works '.$this->sharedData);
    }

    public function complete()
    {
        $this->sharedData .= '|complete';
        // TODO: Implement complete() method.
        dd('complete in Myservice works '.$this->sharedData);
    }

    public function broken()
    {
        $this->sharedData .= '|broken';
        // TODO: Implement broken() method.
        dd('broken in Myservice works '.$this->sharedData);
    }
}