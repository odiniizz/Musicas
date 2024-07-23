<?php
$aux = false;
$classe = 'branco';
?>
@extends ('cabecalho')
@section('content')
<div>
    <table class="tabela">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Turma</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dados as $item)
            <tr>
                <td>{{$item->nomeAluno}}</td>
                <td>{{$item->turmaAluno}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>