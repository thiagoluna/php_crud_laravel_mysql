<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Atleta extends Model
{
    protected $fillable = ['name','email','senha','endereco','bairro','cidade','cep'];
    protected $guarded = ['id', 'created_at', 'update_at'];
    protected $table = 'atletas';
}
