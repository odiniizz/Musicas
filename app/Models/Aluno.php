<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    use HasFactory;
    protected $primaryKey = 'idAluno';
    protected $guarded = ['idAluno'];

    public function Musica()
    {
        return $this->hasOne(Musica::class, 'idMusica');
    }

    public function Artista()
    {
        return $this->hasOne(Artista::class, 'idArtista');
    }

    public function EstiloMusical()
    {
        return $this->hasOne(EstiloMusical::class, 'idEstiloMusical');
    }
}
