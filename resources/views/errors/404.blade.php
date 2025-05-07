<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Página no encontrada - 404</title>
        <meta name="description" content="Sistema de gestión turística donde podrás registrarte, iniciar sesión, explorar paquetes turísticos y gestionar usuarios registrados.">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/404.css') }}">
    </head>
    <body class="background-radial-gradient ">
        <div class="container-error">
            <h1>404</h1>
            <h2>La página que estás buscando no existe</h2>
            <p>Verifica la dirección o vuelve a la <a href="{{ url('/') }}">página de inicio</a></p>
            <button class="button" onclick="window.location.href='{{ url('/') }}'">Volver a la página de inicio</button>
        </div>
    </body>
</html>
