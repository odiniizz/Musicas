<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/js/app.js'])
</head>
<body class="padrao">
   <div>
        <a href="{{route("formCadastrarAluno")}}">Cadastrar Alunos</a>
        <a href="{{route("indexAlunos")}}">Listar Alunos</a>
        @hasSection ('content')
            @yield ('content')
        @endif
    </div>
</body>
</html>