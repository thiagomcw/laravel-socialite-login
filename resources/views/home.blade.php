<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login</title>

    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="top-right links">
            <a href="{{ route('logout') }}">Sair</a>
        </div>
        <div class="m-b-md">
            <img src="{{ auth()->user()->avatar }}"/>
            <h1>Olá, {{ auth()->user()->name }}!</h1>
            <h3>Seja bem-vindo à nossa área restrita.</h3>
        </div>
    </div>
</div>
</body>
</html>
