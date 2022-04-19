<?php

namespace App\Http\Controllers;

use App\Exports\UsersExport;
use Maatwebsite\Excel\Excel;

class UsersExportController extends Controller
{
    private $excel;

    public function __construct(Excel $excel)
    {
        $this->excel = $excel;    }

    public function export(Excel $excel)
    {
        return $this->excel->download(new UsersExport, 'users.csv');
    }
}
