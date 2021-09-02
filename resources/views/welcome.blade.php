<!DOCTYPE html>
<html lang="es" class="h-100">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.87.0">
    <title>Sistema asistencia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
        #background{
            background-color: #d9d9d9 !important;
        }
        #logotipo{
            width: 50%;
            margin: auto;
            padding-bottom: 15px;
        }
        .black{
            color: black;
        }
        .nav-link:hover{
            color: #7a7a7a !important;
        }
    </style>
    <link href="{{  url('css/cover.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('css/bootstrap.min.css') }}">
</head>
<body class="d-flex h-100 text-center text-white bg-dark" id="background">
<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
    <header class="mb-auto">
        <div>
            <h3 class="float-md-start mb-0">Sistema Asistencia</h3>
            <nav class="nav nav-masthead justify-content-center float-md-end">
                <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Home</a>
                <a class="nav-link" href="{{ url('/login') }}">Login</a>
                <a class="nav-link" href="{{ url('/register') }}">Register</a>
            </nav>
        </div>
    </header>

    <main class="px-3">
        <img src="{{ asset('/logo_1507319304.webp') }}" id="logotipo" alt="" srcset="">
        <p class="lead black">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur nesciunt blanditiis odio. Aut,
            laboriosam deleniti iusto adipisci culpa vitae hic aperiam veniam fugiat pariatur cupiditate sit corporis fugit optio dolores?
        </p>
        <br>
        <p class="lead">
            <a href="https://getbootstrap.com/docs/5.1/examples/cover/#" class="btn btn-lg btn-secondary fw-bold border-white black">iniciar</a>
        </p>
    </main>

    <footer class="mt-auto text-white-50">
        <p class="black">Creado por Santiago y Claudio!</p>
    </footer>
</div>
</body>
</html>
