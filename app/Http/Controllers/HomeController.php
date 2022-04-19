<?php

namespace App\Http\Controllers;

use App\Models\Csv_table;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $tabela = Csv_table::get();

        return view('home', ['tabela' => $tabela]);
    }
}
