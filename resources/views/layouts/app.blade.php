<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href={{asset("css/app.css")}}>
    <script src={{asset('js/app.js')}}></script>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <title>NewsApp</title>
    <style>
    ion-icon {
  font-size: 20px;
  padding: 0px 0px;
  margin: 0px 0px;
}
    </style>
</head>

<body>
    <div class="container">
        <!--cabeçalho-->
        @include('layouts.nav')
        <!--conteudo-->
        @yield('conteudo')
        <!--rodape-->
        @include('layouts.rodape')

    </div>
</body>

</html>