@extends('layouts.app')

@section('conteudo')

@if (count($dados) == 0)

<p class="alert alert-danger text-center">Não a registro</p>

@else
@php
    $total = 0;
@endphp
@foreach ($dados as $item)
@if ($item->visivel == 1)
<div class="row bg-info">
    <div class="col-md-9">
        <h2>{{$item->titulo}}</h2>
    </div>
    <div class="col-md-3 text-right" style="padding-top:10px">
        <ion-icon name="create"></ion-icon>{{$item->autor}}
        <ion-icon name="alarm"></ion-icon>{{$item->created_at}}
    </div>
</div>
<div class="row">
    <div class="col-md-12" style="padding-top:5px">
        {{$item->texto}}
    </div>
</div>
<hr>
@else

@endif
@php
    $total++;
@endphp
@endforeach
<div class="row">
    <div class="col-md-12 text-right">
    <p>N.º total de noticias: {{$total}}</p>
    </div>
</div>
@endif
@endsection