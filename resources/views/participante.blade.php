@extends('layout.principal')
@section('conteudo')
<h2>Listagem de participantes</h2>
<button id="btnParticipar">Participar</button>
<table>
    <thead>
        <tr>
            <th>Nome</th>
            <th>Telefone</th>
        </tr>
    </thead>
    <tbody>
        @foreach($participantes as $participante)
            <tr>
                <td>{{ $participante->nome }}</td>
                <td>{{ $participante->telefone }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection

        