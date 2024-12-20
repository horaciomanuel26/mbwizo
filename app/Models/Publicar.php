<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Publicar extends Model
{
    protected $fillable = [
        'lt_conteudo',
        'vc_file',
        'vc_formato',
        'id_user'
    ];
}
