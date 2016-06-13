<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('jwt.auth');
    }
    
    public function index()
    {
        // dd(User::all());
        // echo bcrypt(321654);
        
        return 'User authenticated! ;)';
        
    }
    
    
}
