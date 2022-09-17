<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cadastro extends Model
{
    use HasFactory;

    protected $table = 'cadastros';

    protected $primaryKey = 'id';

    protected $fillable = ['nome', 'email', 'observacoes'];

    protected $dates = ['created_at', 'update_at'];
}
