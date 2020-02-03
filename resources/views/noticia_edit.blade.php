@extends('layouts.app')

@section('conteudo')

<form action="/atualizar_noticia/{{$noticia->id}}" method="POST">
    {{ csrf_field() }}

    <h3>Editar noticia</h3>
    
    <div class="form-group">
        <label for="titulo">Titulo:</label>
        <input type="text" class="form-control" id="titulo" name="titulo" value="{{$noticia->titulo}}">
    </div>

    <div class="form-group">
        <label for="texto">Texto:</label><br>
        <textarea class="form-control" name="texto" id="texto" cols="60" rows="10">{{$noticia->texto}}</textarea>
    </div>

    <div class="form-group">
        <label for="autor">Autor:</label>
        <input type="text" class="form-control" id="autor" name="autor" value="{{$noticia->autor}}">
    </div>

    <div class="form-group text-center">
        @if ($noticia->visivel == 1)
        <input type="checkbox" name="visivel" id="visivel" checked>
        @else
        <input type="checkbox" name="visivel" id="visivel">
        @endif
        Noticia visivel
    </div>

    <div class="form-group text-center">
        <button class="btn btn-primary">Salvar</button>
    </div>

</form>

@endsection