@extends('layouts.app')

@section('conteudo')

<form action="/salvar_noticia" method="POST">
    {{ csrf_field() }}

    <h3>Nova noticia</h3>

    <div class="form-group">
        <label for="titulo">Titulo:</label>
        <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Titulo" required>
    </div>

    <div class="form-group">
        <label for="texto">Texto:</label><br>
        <textarea class="form-control" name="texto" id="texto" cols="60" rows="10" placeholder="texto da noticia" required></textarea>
    </div>

    <div class="form-group">
        <label for="autor">Autor:</label>
        <input type="text" class="form-control" id="autor" name="autor" placeholder="autor" required>
    </div>

    <div class="form-group text-center">
        <input  type="checkbox" name="visivel" id="visivel" checked> Noticia visivel
    </div>

    <div class="form-group text-center">
        <button class="btn btn-primary">Salvar</button>
    </div>

</form>

@endsection