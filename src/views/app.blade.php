<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inspire</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
            /* 
    1 azul - sin prioridad
    2 verde - normal 
    3 amarillo - en cuenta
    4 naranja - proximo
    5 rojo  - urgente
    */
    .bg-1 { background: rgb(134, 134, 241); }
    .bg-2 { background: rgb(131, 248, 131); }
    .bg-3 { background: yellow; }
    .bg-4 { background: orange; }
    .bg-5 { background: rgb(255, 104, 104); }
    </style>
</head>

<body style="background: #F4F6F9">
    @include('inspire::header')

    @yield('content')

    @include('inspire::footer')


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js
    "></script>
</body>
</html>
