<?php
// \App\Classes\ThisProject
namespace App\Classes\ThisProject;

use App\Classes\ProjectOwner;

class ThisProject
{
    public $name = null;
    public $owner = null;
    
    public function __construct()
    {
        $this->name = config('app.name');
        $this->owner = new ProjectOwner;
    }

    public static function getBaseUrl()
    {
        return config('app.url');
    }
}