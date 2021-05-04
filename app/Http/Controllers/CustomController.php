<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Custom;
use MongoDB\Driver\Session;

class CustomController extends Controller
{

public function welcome()
    {
       return view('welcome');
    }

public function list()
    {
       $users = Custom::all();
       return view('list', ['users' => $users]);
    }

}
