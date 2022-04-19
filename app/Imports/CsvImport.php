<?php

namespace App\Imports;

use App\Models\Csv_table;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\ToModel;


class CsvImport implements ToModel
{
    use Importable;
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Csv_table([
            'banco_origem' => $row[0],
            'agencia_origem' => $row[1],
            'conta_origem' => $row[2],
            'banco_destino' => $row[3],
            'agencia_destino' => $row[4],
            'conta_destino' => $row[5],
            'valor_transacao' => $row[6],
            'hora_transacao' => $row[7]
        ]);
    }

}
