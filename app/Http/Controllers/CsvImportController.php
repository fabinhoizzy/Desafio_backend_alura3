<?php

namespace App\Http\Controllers;

use App\Imports\CsvImport;
use App\Models\Tabela;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class CsvImportController extends Controller
{
    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function show()
    {
        $id_user = Auth::user()->getAuthIdentifier('id');
        return view('csv.import');
    }

    public function store(Request $request)
    {

        $file = $request->file('file')->store('import');

        $import = new CsvImport();
        $import->import($file);


        return redirect()->route('tabela.show');


    }
}
