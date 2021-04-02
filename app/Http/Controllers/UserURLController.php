<?php

namespace App\Http\Controllers;

use App\Models\URL;
use Illuminate\Http\Request;

class UserURLController extends Controller
{
    //
    public function index($user,$id){
        return view('user-link');
    }
}
