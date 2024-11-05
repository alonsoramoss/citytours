<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paquetes Turísticos Perú</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-primary shadow sticky-top">
        <div class="container">
            <span class="navbar-brand fs-3 text-light fw-bold">CITY TOURS</span>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"> 
                        <a class="nav-link active text-light fs-5" href="{{ url('/users') }}">Usuarios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-light fs-5" href="{{ url('') }}">Cerrar sesión</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <h1 class="text-center my-4 display-5 fw-semibold">Explora los destinos más populares del Perú</h1>
        
        <div class="row mb-4">
            <div class="col-md-4 pb-4 pb-md-0">
                <div class="card">
                    <img src="{{ asset('assets/machupicchu.jpg')}}" class="img-thumbnail" style="height: 6.7cm" alt="Machu Picchu">
                    <div class="card-body">
                        <h5 class="card-title">Machu Picchu</h5>
                        <p class="card-text">Una antigua ciudadela inca situada en las montañas de los Andes, conocida por su impresionante arquitectura y paisajes naturales.</p>
                        <p><strong>Días:</strong> 4 | <strong>Noches:</strong> 3</p>
                        <p><strong>Paquete:</strong> Hotel + Vuelo + Asistencia</p>
                        <p><strong>Precio por persona:</strong> S/. 2,000</p>
                        <a href="" class="btn btn-primary">Reservar</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 pb-4 pb-md-0">
                <div class="card">
                    <img src="{{ asset('assets/paracas.jpg')}}" class="img-thumbnail" style="height: 6.7cm" alt="Paracas">
                    <div class="card-body">
                        <h5 class="card-title">Paracas</h5>
                        <p class="card-text">Conocida por su Reserva Nacional y la riqueza de su fauna marina, es un destino ideal para amantes de la naturaleza.</p>
                        <p><strong>Días:</strong> 2 | <strong>Noches:</strong> 1</p>
                        <p><strong>Paquete:</strong> Hotel + Vuelo + Asistencia</p>
                        <p><strong>Precio por persona:</strong> S/. 1,000</p>
                        <a href="" class="btn btn-primary">Reservar</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ asset('assets/lineasdenazca.png')}}" class="img-thumbnail" style="height: 6.7cm" alt="Líneas de Nazca">
                    <div class="card-body">
                        <h5 class="card-title">Líneas de Nazca</h5>
                        <p class="card-text">Misteriosas figuras geoglíficas en el desierto, que incluyen líneas rectas, figuras de animales y formas geométricas.</p>
                        <p><strong>Días:</strong> 2 | <strong>Noches:</strong> 1</p>
                        <p><strong>Paquete:</strong> Vuelo + Asistencia</p>
                        <p><strong>Precio por persona:</strong> S/. 800</p>
                        <a href="" class="btn btn-primary">Reservar</a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row mb-4">
            <div class="col-md-4 pb-4 pb-md-0">
                <div class="card">
                    <img src="{{ asset('assets/iquitos.jpg')}}" class="img-thumbnail" style="height: 6.7cm" alt="Iquitos">
                    <div class="card-body">
                        <h5 class="card-title">Iquitos</h5>
                        <p class="card-text">La ciudad más grande de la selva amazónica peruana, conocida por su cultura amazónica y sus ríos.</p>
                        <p><strong>Días:</strong> 4 | <strong>Noches:</strong> 3</p>
                        <p><strong>Paquete:</strong> Hotel + Vuelo + Asistencia</p>
                        <p><strong>Precio por persona:</strong> S/. 1,700</p>
                        <a href="" class="btn btn-primary">Reservar</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 pb-4 pb-md-0">
                <div class="card">
                    <img src="{{ asset('assets/lagotiticaca.webp')}}" class="img-thumbnail" style="height: 6.7cm" alt="Lago Titicaca">
                    <div class="card-body">
                        <h5 class="card-title">Lago Titicaca</h5>
                        <p class="card-text">El lago navegable más alto del mundo, conocido por sus islas flotantes y hermosos paisajes.</p>
                        <p><strong>Días:</strong> 3 | <strong>Noches:</strong> 2</p>
                        <p><strong>Paquete:</strong> Hotel + Vuelo + Asistencia</p>
                        <p><strong>Precio por persona:</strong> S/. 1,200</p>
                        <a href="" class="btn btn-primary">Reservar</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ asset('assets/vallesagrado.jpg')}}" class="img-thumbnail" style="height: 6.7cm" alt="Valle Sagrado">
                    <div class="card-body">
                        <h5 class="card-title">Valle Sagrado</h5>
                        <p class="card-text">Un hermoso valle andino con ruinas incas, campos de cultivo y pequeñas comunidades tradicionales.</p>
                        <p><strong>Días:</strong> 3 | <strong>Noches:</strong> 2</p>
                        <p><strong>Paquete:</strong> Hotel + Vuelo + Asistencia</p>
                        <p><strong>Precio por persona:</strong> S/. 1,400</p>
                        <a href="" class="btn btn-primary">Reservar</a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row mb-4">
            <div class="col-md-4 pb-4 pb-md-0">
                <div class="card">
                    <img src="{{ asset('assets/cusco.jpg')}}" class="img-thumbnail" style="height: 6.8cm" alt="Cusco">
                    <div class="card-body">
                        <h5 class="card-title">Cusco</h5>
                        <p class="card-text">La antigua capital del imperio inca, con una rica historia y sitios arqueológicos fascinantes.</p>
                        <p><strong>Días:</strong> 3 | <strong>Noches:</strong> 2</p>
                        <p><strong>Paquete:</strong> Hotel + Vuelo + Asistencia</p>
                        <p><strong>Precio por persona:</strong> S/. 1,500</p>
                        <a href="" class="btn btn-primary">Reservar</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 pb-4 pb-md-0">
                <div class="card">
                    <img src="{{ asset('assets/trujillo.jpg')}}" class="img-thumbnail" style="height: 6.8cm" alt="Trujillo">
                    <div class="card-body">
                        <h5 class="card-title">Trujillo</h5>
                        <p class="card-text">Conocida como la "Ciudad de la Eterna Primavera", famosa por sus sitios arqueológicos preincaicos y festivales culturales.</p>
                        <p><strong>Días:</strong> 3 | <strong>Noches:</strong> 2</p>
                        <p><strong>Paquete:</strong> Hotel + Vuelo + Asistencia</p>
                        <p><strong>Precio por persona:</strong> S/. 1,200</p>
                        <a href="" class="btn btn-primary">Reservar</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ asset('assets/arequipa.jpg')}}" class="img-thumbnail" style="height: 6.7cm" alt="Arequipa">
                    <div class="card-body">
                        <h5 class="card-title">Arequipa</h5>
                        <p class="card-text">Conocida como la "Ciudad Blanca" por sus edificios coloniales construidos con sillar blanco. Rodeada de volcanes imponentes.</p>
                        <p><strong>Días:</strong> 3 | <strong>Noches:</strong> 2</p>
                        <p><strong>Paquete:</strong> Hotel + Vuelo + Asistencia</p>
                        <p><strong>Precio por persona:</strong> S/. 1,300</p>
                        <a href="" class="btn btn-primary">Reservar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
</body>
</html>
