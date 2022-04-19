<?php

namespace App\Exports;

use App\Models\Csv_table;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class CsvExport implements FromCollection, WithMapping, ShouldAutoSize, WithHeadings
{
    use Exportable;

    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Csv_table::all();
    }

    public function map($csv): array
    {
        return [
            $csv->banco_origem,
            $csv->agencia_origem,
            $csv->conta_origem,
            $csv->banco_destino,
            $csv->agencia_destino,
            $csv->conta_destino,
            $csv->valor_transacao,
            $csv->hora_transacao,
        ];
    }

    public function headings(): array
    {
        return [
        'Banco Origem',
        'Agência Origem',
        'Conta Origem',
        'Banco Destino',
        'Agência Destino',
        'Conta Destino',
        'Valor da Transação',
        'Hora da Transação',
        ];
    }
}
