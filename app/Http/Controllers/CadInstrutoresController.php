<?php

namespace App\Http\Controllers;

use App\Models\instrutore;
use Illuminate\Http\Request;

class CadInstrutoresController extends Controller
{
    public function index(){

        $tabela =instrutore::orderby('id', 'desc')->paginate();
        return view('instrutores.index', ['itens'=>$tabela]);
    }
}
