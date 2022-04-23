<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tabela extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'banco_origem',
        'agencia_origem',
        'conta_origem',
        'banco_destino',
        'agencia_destino',
        'conta_destino',
        'valor_transacao',
        'hora_transacao'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
