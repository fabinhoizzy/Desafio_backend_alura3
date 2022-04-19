<?php

namespace App\Http\Controllers;

use App\Imports\CsvImport;
use Illuminate\Http\Request;


class CsvImportController extends Controller
{
    public function show()
    {
        return view('csv.import');
    }

    public function store(Request $request)
    {
        $file = $request->file('file')->store('import');

        $import = new CsvImport;
        $import->import($file);

        //Excel::import(new CsvImport, $file);

        return back()->withStatus('Arquivo importado com sucesso');
    }
}
