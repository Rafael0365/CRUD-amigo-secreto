@extends('layout.principal')
@section('conteudo')
    <form action="{{route('participante.insere')}}" method="POST">
        @csrf
        <label > Nome do Participante</label>
        <input type="text" name="nome" maxlength="50" value="">
        <br>
        <label > Telefone </label>
        <input type="text" name="telefone" maxlength="50" value="">
        <br>
        <label > Presente </label>
        <input type="text" name="presente" maxlength="50" value="">
        <br>
        <button type="submit"> Salvar </button>
@endsection