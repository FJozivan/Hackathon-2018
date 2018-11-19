<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class denuncias extends Model
{
    protected $fillable = ['observacao','descricao','rua','numero','bairro','cidade','nm_imagem'];
}
