<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstiloMusical extends Model
{
    use HasFactory;
    protected $primaryKey = 'idEstiloMusical';
    protected $guarded = ['idEstiloMusical'];

    public function ArtistaEstilo()
    {
        return $this->belongsTo(ArtistaEstilo::class);
    }

    public function Aluno()
    {
        return $this->belongsTo(Aluno::class);
    }

    public function Musica()
    {
        return $this->belongsTo(Musica::class);
    }

    
}

