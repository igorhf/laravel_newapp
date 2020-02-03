<div class="row">
    <div class="col-md-6">
        <strong>{{$item->titulo}}</strong>
    </div>

    <div class="col-md-3">
        <strong>{{$item->autor}}</strong>
    </div>

    <div class="col-md-3">
        @if ($item->visivel == 1)
            <a href="colocar_invisivel/{{$item->id}}" style="margin-left:10px">
            <ion-icon name="eye"></ion-icon>
        </a>
        @else
            <a href="colocar_visivel/{{$item->id}}" style="margin-left:10px">
            <ion-icon name="eye-off"></ion-icon>
        </a>
        @endif

            <a href="editar_noticia/{{$item->id}}" style="margin-left:10px">
            <ion-icon name="create"></ion-icon>
        </a>
            <a href="eliminar_noticia/{{$item->id}}" style="margin-left:10px">
            <ion-icon name="trash"></ion-icon>
        </a>
    </div>

</div>