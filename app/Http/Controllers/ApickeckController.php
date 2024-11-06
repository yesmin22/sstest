<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\ApiStatusTrait;


class ApickeckController extends Controller
{
    use ApiStatusTrait;
    function api_test(){
        $success_message=$this->success();
        print_r($success_message); die();
    }

}
