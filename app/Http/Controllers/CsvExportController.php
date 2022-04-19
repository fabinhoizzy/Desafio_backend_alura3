<?php

namespace App\Http\Controllers;

use App\Exports\CsvExport;
use Maatwebsite\Excel\Excel;

class CsvExportController extends Controller
{
    private $excel;

    public function __construct(Excel $excel)
    {
        $this->excel = $excel;
    }

    public function export(Excel $excel)
    {
        return $this->excel->download(new CsvExport, 'csv_table.csv');
    }
}
