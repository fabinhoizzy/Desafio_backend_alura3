<?php

namespace App\Http\Controllers;

use App\Models\Tabela;
use App\Models\User;
use Illuminate\Http\Request;

class TabelaController extends Controller
{
    protected $tabela;
    protected $user;

    public function __construct(Tabela $tabela, User $user)
    {
        $this->tabela = $tabela;
        $this->user = $user;
    }

    public function index()
    {
        $user = User::all();
        $tabela = Tabela::all();

        return view('users.tabelas.tabela', ['tabelas' => $tabela, 'user' => $user]);
    }

    public function show()
    {
        $user = User::all();
        $tabela = Tabela::all();

        return view('users.tabelas.tabelaDetalhe', ['tabelas' => $tabela, 'user' => $user]);
    }

}
