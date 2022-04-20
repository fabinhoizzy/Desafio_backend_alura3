<?php

namespace App\Http\Controllers;

use App\Models\Csv_table;
use Illuminate\Http\Request;

class TabelaController extends Controller
{
    public function index()
    {
        $tabela = Csv_table::get();

        return view('tabela.tabela', compact('tabela'));
    }

    public function show()
    {
        $tabela = Csv_table::all();

        return view('tabela.tabelaDetalhe', compact('tabela'));
    }
}
