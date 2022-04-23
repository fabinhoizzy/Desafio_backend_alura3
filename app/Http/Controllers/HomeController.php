<?php

namespace App\Http\Controllers;

use App\Models\Tabela;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        $tabela = Tabela::get();

        return view('home', ['tabela' => $tabela]);
    }
}
