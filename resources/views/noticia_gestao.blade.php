@extends('layouts.app')

@section('conteudo')
    
    @if (count($dados) == 0)
    <div class="row">
        <div class="col-md-12">
            <p class="alert alert-danger text-center">Não a registros</p>
        </div>
    </div>
    @else
        <div class="row">
            <div class="col-md-12">
                @foreach ($dados as $item)
                    @include('inc.linha_noticia')
                @endforeach
            </div>
        </div>
    @endif

@endsection