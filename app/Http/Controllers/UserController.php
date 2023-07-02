<?php

namespace App\Http\Controllers;
Use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
{
    $data = User::all();

    return view('index',compact('data')); // Convert data to JSON format and return as response
}
    }
    

