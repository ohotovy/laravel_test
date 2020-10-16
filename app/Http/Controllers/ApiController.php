<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Classes\ThisProject\ThisProject;

class ApiController extends Controller

{
    public function index()
    {
        // the logic of your page will be here
        // as a response we will return an array of data
        return [
            'success' => true,
            'message' => 'Response successfully returned.',
            'errors' => [],
            'data' => []
        ];
    }

    public function projectInfo()
    {
        $owner = new ThisProject;
        return (array)$owner;
    }
}