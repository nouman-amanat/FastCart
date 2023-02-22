<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\user;


class dbController extends Controller
{
    //
    function getData(){
        return user::all();
    }

}
