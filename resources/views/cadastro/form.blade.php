@extends('base.base')

@section('conteudo')
    
@if ($cadastro)
    
<form action="{{ route('cadastro.update', ['id'=>$cadastro->id]) }}" method="POST">
@else    
<form action="{{ route('cadastro.store')}}" method="POST">
@endif    
    @csrf
    <div class="mb-3">
        <label for="nome" class="form-label">Nome</label>
        <input type="text" class="form-control" id="nome" name="nome" value="{{ $cadastro ? $cadastro->nome : old('nome') }}" >
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" value="{{ $cadastro ? $cadastro->email : old('email') }}">
    </div>
    <div class="mb-3">
        <label for="observacoes" class="form-label">Obrservações</label>
        <textarea class="form-control" id="observacoes" rows="3" name="observacoes">{{ $cadastro ? $cadastro->observacoes : old('nome') }}</textarea>
    </div>

    <div class="mb-3">
        <input type="submit" value="{{ $cadastro ? 'Atualizar': 'Cadastrar'}}" class="btn btn-success">
    </div>

</form>

@endsection