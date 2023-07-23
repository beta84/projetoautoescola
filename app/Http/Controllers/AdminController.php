<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller 
{
    public function index(){
        //$produtos=produto::orderby('id','desc')->paginate();
        return view('painel-admin.index');
    }
}
