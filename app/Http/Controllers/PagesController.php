<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    public function index(){
        return view('pages.index');
    }

    public function produtos(){
        return view('pages.produtos');
    }

    public function estrutura(){
        return view('pages.estrutura');
    }

    public function contatos(){
        return view('pages.contatos');
    }
}
