<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class UserController extends Controller
{
    public function showUserName(){
        return 'Ahmed Emam';
    }

    public function getIndex(){

        $obj = new \stdClass();

        $obj->name = 'ahmed';
        $obj->id = 5;
        $obj->gender = 'male';

        return view('welcome', compact('obj'));
    }
}
