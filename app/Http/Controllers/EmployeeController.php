<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use URL;

class EmployeeController extends Controller
{
    function list(){
        return Employee::all();
    }
    function geturl(){
        return URL::to('/');
    }
}
