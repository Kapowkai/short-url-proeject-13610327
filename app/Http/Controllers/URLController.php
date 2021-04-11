<?php

namespace App\Http\Controllers;

use App\Models\URL;
use Illuminate\Http\Request;

class URLController extends Controller
{
    //
    public function index(){
        $URLs = URL::all();
        return view('welcome',compact('URLs'));
    }
    public function show($id){
        $URL = URL::find($id);
        return view('new-success',compact('URL'));
    }

    public  function store(Request $request){
        //dd($request->all());

        $request->validate([
            'Long_URL' =>'required',
        ]);

        $URL = new URL;
        $URL->Long_URL = $request->get('Long_URL');

        $myIDnumber = '327';

        $length = 3;
        $characters = 'abcdefghijklmnopqrstuvwxyz';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }

        $length = 2;
        $characters = '0123456789';
        $charactersLength = strlen($characters);
        $randomNumber = '';
        for ($i = 0; $i < $length; $i++) {
            $randomNumber .= $characters[rand(0, $charactersLength - 1)];
        }

        $URL->Short_URL = "$myIDnumber$randomString$randomNumber";
        $URL->save();

        //dd($URL->id);

        return redirect("/show/$URL->id");
    }
}
