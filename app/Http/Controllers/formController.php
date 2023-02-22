<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class formController extends Controller
{
    //
    function getData(Request $req){
        $req->validate([
            'username'=>'required',
            'email'=>'required',
            'password'=>'required|min:8|',
            'cnf_password'=>'required|confirmed'

        ]);
      return $req;
    }
}
