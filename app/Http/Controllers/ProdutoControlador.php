<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoControlador extends Controller
{
    public function __construct()
    {
        $this->middleware('produtoAdmin');
    }

    public function index(){
        return view('produtos.produtos');
    }
}
