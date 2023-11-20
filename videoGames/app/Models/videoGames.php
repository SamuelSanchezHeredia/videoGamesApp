<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class videoGames extends Model
{
    use HasFactory;
    
    protected $table = 'videogames';
    
    protected $fillable = ['nombre','ano_salida','compania','genero','plataformas','edad_juego'];
}
