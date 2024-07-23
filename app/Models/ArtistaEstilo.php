<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArtistaEstilo extends Model
{
    use HasFactory;
    protected $primaryKey = 'idArtistaEstilo';
    protected $guarded = ['idArtistaEstilo'];

    public function Artista()
    {
        return $this->hasOne(Artista::class, 'idArtista');
    }

    public function EstiloMusical()
    {
        return $this->hasOne(EstiloMusical::class, 'idEstiloMusical');
    }
}
