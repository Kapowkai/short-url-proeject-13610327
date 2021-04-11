<?php

namespace App\Http\Controllers;

use App\Models\URL;
use Illuminate\Http\Request;

class UserURLController extends Controller
{
    //
    public function index($id){
        //dd($id);
        $result = URL::Where('Short_URL',$id)->first();
        //dd($result);
        if($result){
            return redirect()->away($result->Long_URL);
        }
        return view('user-link',compact('id'));
    }
}
