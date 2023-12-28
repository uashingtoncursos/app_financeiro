<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registro extends Model
{
    use HasFactory;
    protected $table = 'registros';
    protected $primaryKey = 'id';
    protected $fillable = [ 'id_pessoa',
                            'id_categoria',
                            'descricao',
                            'tipo',
                            'data_vencimento',
                            'data_pagamento',
                            'valor'
                        ];
    
    public function pessoa()
    {
        return $this->belongsTo(Pessoa::class, 'id_pessoa', 'id');        
    } 

    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'id_categoria', 'id');        
    } 
}
