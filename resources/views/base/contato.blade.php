@extends('base.base')

@section('titulo')
    FALE CONOSCO
@endsection

@section('conteudo')
  
    <form action="{{ route('base.cadastro') }}" method="post">
        
        @csrf
        <div class="form-group">
            <label class="label-form" for="nome">Nome</label>
            <input class="form-control" type="text" name="nome" id="nome">

            <label class="label-form" for="email">Email</label>
            <input class="form-control" type="email" name="email" id="email">

        </div>
        <input type="submit" value="Enviar" class="btn btn-primary mt-3">
    </form>

@endsection