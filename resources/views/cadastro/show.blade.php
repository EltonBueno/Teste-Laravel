@extends('base.base')

@section('conteudo')
    
    <h1>Nome: {{$cadastro->nome}}</h1>
    <p>
    <a href="mailto:{{$cadastro->email}}"> {{$cadastro->email}}</a>
    </p>

    <p>
        {!! nl2br($cadastro->observacoes) !!}
    </p>


@endsection