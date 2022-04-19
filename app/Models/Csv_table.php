<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Csv_table extends Model
{
    use HasFactory;

    /**
     * @var string[]
     */
    protected $fillable = [
        'banco_origem',
        'agencia_origem',
        'conta_origem',
        'banco_destino',
        'agencia_destino',
        'conta_destino',
        'valor_transacao',
        'hora_transacao'
    ];

}
