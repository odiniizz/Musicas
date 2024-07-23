<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aluno;
use App\Models\Musica;
use App\Models\Artista;
use App\Models\EstiloMusical;

class controllerAluno extends Controller
{

    public function mandaDados()
    {
        $musicas = Musica::all();
        $artistas = Artista::all();
        $estilos = EstiloMusical::all();
        return view("Alunos/cadastrarAlunos",compact("musicas", "artistas", "estilos"));
    }
    public function index()
    {
        $dados = Aluno::all();
        return view("Alunos/listarAlunos",compact("dados"));
 
    }


    public function store(Request $request)
    {
        $dados = new Aluno();
        $dados->nomeAluno = $request->input("nomeAluno");
        $dados->turmaAluno = $request->input("turmaAluno");
        $dados->idMusicaPreferida = $request->input("idMusicaPreferida");
        $dados->idArtistaPreferido = $request->input("idArtistaPreferido");
        $dados->idEstiloPreferido = $request->input("idEstiloPreferido");
        $dados->save();
        return redirect()->route('inicio');
    }


    public function edit(string $id)
    {
        
    }

    public function update(Request $request, string $id)
    {
       
    }


    public function destroy(string $id)
    {
        
    }
}
