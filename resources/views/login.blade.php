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
        <div class="m-b-md">
            <h1>Área restrita!</h1>
            <h3>Faça login para acessar o sistema.</h3>
        </div>
        <div class="links">
            <a href="{{ route('login.social', ['driver' => 'facebook']) }}">
                Facebook
            </a>
            <a href="{{ route('login.social', ['driver' => 'google']) }}">
                Google
            </a>
        </div>
    </div>
</div>
</body>
</html>
