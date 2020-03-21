<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ImplicitController extends Controller {
    
    public function index(\MyClass $myclass) {
        dd($myclass);
     }
}