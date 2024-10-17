<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendedor extends Model
{
    use HasFactory;

    protected $table = 'vendedores'; // Altere se o nome da tabela for diferente

    protected $fillable = ['nome', 'matricula', 'comissao']; // Campos que podem ser preenchidos
}
