<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HelloController extends Controller
{

    public function other(){
        return view('other.index',['msgs'=>'hohohohhoohoho']);
    }

    public function __invoke(Response $response){
        return $response->status();
    }
}
