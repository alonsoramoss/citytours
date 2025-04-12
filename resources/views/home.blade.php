<!DOCTYPE html>
<html lang="es">
<head>
    <title>Inicio</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-primary shadow sticky-top">
        <div class="container">
            <a class="nav-link" href="/home">
                <span class="navbar-brand fs-3 text-light fw-bold">CITY TOURS</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHome" 
                    aria-controls="navbarHome" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarHome">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item me-3"> 
                        <a class="nav-link active text-light fs-5" href="{{ url('/users') }}">Usuarios</a>
                    </li>
                    <li class="nav-item">
                        <form action="logout" method="POST">
                            @csrf
                            <a href="#" onclick="this.closest('form').submit()" class="nav-link active text-light fs-5">
                            Cerrar sesión</a>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <h1 class="text-center my-4 display-6 fw-semibold">Explora los destinos más populares del Perú</h1>

        <div class="row">
            @php
            $destinos = [
                ['img' => 'machupicchu.jpg', 'alt' => 'Machu Picchu', 'titulo' => 'Machu Picchu', 'desc' => 'Una antigua ciudadela inca situada en las montañas de los Andes, conocida por su impresionante arquitectura y paisajes naturales.', 'dias' => 4, 'noches' => 3, 'paquete' => 'Hotel + Vuelo + Asistencia', 'precio' => 2000],
                ['img' => 'paracas.jpg', 'alt' => 'Paracas', 'titulo' => 'Paracas', 'desc' => 'Conocida por su Reserva Nacional y la riqueza de su fauna marina, es un destino ideal para amantes de la naturaleza.', 'dias' => 2, 'noches' => 1, 'paquete' => 'Hotel + Vuelo + Asistencia', 'precio' => 1000],
                ['img' => 'lineasdenazca.png', 'alt' => 'Líneas de Nazca', 'titulo' => 'Líneas de Nazca', 'desc' => 'Misteriosas figuras geoglíficas en el desierto, que incluyen líneas rectas, figuras de animales y formas geométricas.', 'dias' => 2, 'noches' => 1, 'paquete' => 'Vuelo + Asistencia', 'precio' => 800],
                ['img' => 'iquitos.jpg', 'alt' => 'Iquitos', 'titulo' => 'Iquitos', 'desc' => 'La ciudad más grande de la selva amazónica peruana, conocida por su cultura amazónica y sus ríos.', 'dias' => 4, 'noches' => 3, 'paquete' => 'Hotel + Vuelo + Asistencia', 'precio' => 1700],
                ['img' => 'lagotiticaca.webp', 'alt' => 'Lago Titicaca', 'titulo' => 'Lago Titicaca', 'desc' => 'El lago navegable más alto del mundo, conocido por sus islas flotantes y hermosos paisajes.', 'dias' => 3, 'noches' => 2, 'paquete' => 'Hotel + Vuelo + Asistencia', 'precio' => 1200],
                ['img' => 'vallesagrado.jpg', 'alt' => 'Valle Sagrado', 'titulo' => 'Valle Sagrado', 'desc' => 'Un hermoso valle andino con ruinas incas, campos de cultivo y pequeñas comunidades tradicionales.', 'dias' => 3, 'noches' => 2, 'paquete' => 'Hotel + Vuelo + Asistencia', 'precio' => 1400],
                ['img' => 'cusco.jpg', 'alt' => 'Cusco', 'titulo' => 'Cusco', 'desc' => 'La antigua capital del imperio inca, con una rica historia y sitios arqueológicos fascinantes.', 'dias' => 3, 'noches' => 2, 'paquete' => 'Hotel + Vuelo + Asistencia', 'precio' => 1500],
                ['img' => 'trujillo.jpg', 'alt' => 'Trujillo', 'titulo' => 'Trujillo', 'desc' => 'Conocida como la "Ciudad de la Eterna Primavera", famosa por sus sitios arqueológicos preincaicos y festivales culturales.', 'dias' => 3, 'noches' => 2, 'paquete' => 'Hotel + Vuelo + Asistencia', 'precio' => 1200],
                ['img' => 'arequipa.jpg', 'alt' => 'Arequipa', 'titulo' => 'Arequipa', 'desc' => 'Conocida como la "Ciudad Blanca" por sus edificios coloniales construidos con sillar blanco. Rodeada de volcanes imponentes.', 'dias' => 3, 'noches' => 2, 'paquete' => 'Hotel + Vuelo + Asistencia', 'precio' => 1300],
            ];
            @endphp

            @foreach($destinos as $destino)
            <div class="col-12 col-sm-6 col-lg-4 mb-4">
                <div class="card h-100">
                    <img src="{{ asset('assets/' . $destino['img']) }}" class="img-thumbnail" style="height: 6.7cm" alt="{{ $destino['alt'] }}">
                    <div class="card-body d-flex flex-column">
                        <h5 class="fw-bold">{{ $destino['titulo'] }}</h5>
                        <p class="card-text">{{ $destino['desc'] }}</p>
                        <p><strong>Días:</strong> {{ $destino['dias'] }} | <strong>Noches:</strong> {{ $destino['noches'] }}</p>
                        <p><strong>Paquete:</strong> {{ $destino['paquete'] }}</p>
                        <p><strong>Precio por persona:</strong> S/. {{ number_format($destino['precio'], 0) }}</p>
                        <a href="" class="btn btn-primary mt-auto">Reservar</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.min.js" integrity="sha384-VQqxDN0EQCkWoxt/0vsQvZswzTHUVOImccYmSyhJTp7kGtPed0Qcx8rK9h9YEgx+" crossorigin="anonymous"></script>
</body>
</html>
