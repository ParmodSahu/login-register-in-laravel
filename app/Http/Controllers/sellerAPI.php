<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sellerAPI extends Controller
{
    function getData(){
        return ['name'=>"pamrod",
        'email'=>'pamrod@gmail.com',
        'contact'=>9992319129];
    }
}
