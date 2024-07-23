<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Musica extends Model
{
    use HasFactory;
    protected $primaryKey = 'idMusica';
    protected $guarded = ['idMusica'];

    public function ArtistaMusica()
    {
        return $this->belongsTo(ArtistaMusica::class);
    }

    public function Aluno()
    {
        return $this->belongsTo(Aluno::class);
    }

    public function EstiloMusical()
    {
        return $this->hasOne(EstiloMusical::class, 'idEStiloMusical');
    }
}
