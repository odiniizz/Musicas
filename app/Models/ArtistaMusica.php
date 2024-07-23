<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArtistaMusica extends Model
{
    use HasFactory;
    protected $primaryKey = 'idArtistaMusica';
    protected $guarded = ['idArtistaMusica'];

    public function Artista()
    {
        return $this->hasOne(Artista::class, 'idArtista');
    }

    public function Musica()
    {
        return $this->hasOne(Musica::class, 'idMusica');
    }
}
