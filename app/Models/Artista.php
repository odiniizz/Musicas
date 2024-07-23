<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artista extends Model
{
    use HasFactory;
    protected $primaryKey = 'idArtista';
    protected $guarded = ['idArtista'];

    public function ArtistaMusica()
    {
        return $this->belongsTo(ArtistaMusica::class);
    }

    public function ArtistaEstilo()
    {
        return $this->belongsTo(ArtistaEstilo::class);
    }

    public function Aluno()
    {
        return $this->belongsTo(Aluno::class);
    }
}
