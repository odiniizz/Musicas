@extends ('../cabecalho')
@section('content')
<div>
    <form action="{{route("cadastrarAluno")}}" method="post">
    @csrf
    <label for="">Nome:</label>
    <input type="text" name="nomeAluno">

    <label for="">Turma:</label>
    <input type="text" name="turmaAluno"> 

    <label for="">Musica Preferida:</label>
    <select type="checkbox" name="idMusicaPreferida">
    @foreach ($musicas as $item)
        <option value="{{$item->idMusica}}">{{$item->nomeMusica}}</option>
    @endforeach
    </select>

    <label for="">Artista Prefrido:</label>
    <select type="checkbox" name="idArtistaPreferido">
    @foreach ($artistas as $item)
        <option value="{{$item->idArtista}}">{{$item->nomeArtista}}</option>
    @endforeach
    </select>

    <label for="">Estilo Musical Preferido:</label>
    <select type="checkbox" name="idEstiloPreferido">
    @foreach ($estilos as $item)
        <option value="{{$item->idEstiloMusical}}">{{$item->nomeEstiloMusical}}</option>
    @endforeach
    </select>

    <button class="botao" type="submit">Enviar</button>
    </form>
</div>
@endsection