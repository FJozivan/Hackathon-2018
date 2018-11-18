<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class denuncia extends Model
{
    protected $fillable = ['observacao', 'descricao', 'rua', 'numero','bairro','cidade','user_id'];
}
