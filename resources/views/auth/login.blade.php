<!doctype html>
<html lang="en">
    <head>
        <title>Iniciar Sesión</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/styles.css')}}">
    </head>
    <body>
        <section class="background-radial-gradient overflow-hidden d-flex justify-content-center align-items-center">
            <div class="container p-2 p-md-5 text-center text-lg-start m-0 m-md-5">
                <div class="row align-items-center">
                    <div class="col-lg-6 mb-lg-0" style="z-index: 10">
                        <h1 class="mb-2 display-5 fw-bold text-light">
                            CITY TOURS <br />
                            <span class="d-none d-md-block display-6 fw-semibold" style="color: hsl(218, 81%, 75%)">Empresa de turismo</span>
                        </h1>
                        <p class="d-none d-md-block" style="color: hsl(218, 81%, 85%)">
                            "¡Explora las regiones del Perú con nosotros! Inicia sesión para acceder a emocionantes recorridos guiados y descubrir los secretos mejor guardados de cada región del Perú con City Tours."
                        </p>
                    </div>
                    <div class="col-lg-6 px-md-4 py-md-2 p-lg-5 position-relative">
                        <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
                        <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>
                        <div class="card bg-glass">
                            <div class="card-body">
                                <h4 class="text-center display-6 fw-normal">INICIAR SESIÓN</h4>
                                <form action="{{route('login')}}" method="post">
                                    @csrf
                                    <div class="form-outline mb-2">
                                        <label class="form-label w-100 text-start fw-semibold" for="form3Example3">Correo electrónico</label>
                                        <input type="email" name="email" id="form3Example3" class="form-control" placeholder="Ingresar correo electrónico" required/>
                                    </div>
                                    <div class="form-outline mb-2">
                                        <label class="form-label w-100 text-start fw-semibold" for="form3Example4">Contraseña</label>
                                        <input type="password" name="password" id="form3Example4" class="form-control" placeholder="Ingresar contraseña" required/>
                                    </div>
                                    <div class= "text-center my-4">
                                        <button class="btn btn-primary" type="submit">Iniciar sesión</button>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-center mb-2">
                                        <p class="mb-0 me-2">¿No está registrado?</p>
                                        <a href="{{route('register')}}">Crear cuenta</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.min.js" integrity="sha384-VQqxDN0EQCkWoxt/0vsQvZswzTHUVOImccYmSyhJTp7kGtPed0Qcx8rK9h9YEgx+" crossorigin="anonymous"></script>
    </body>
</html>
