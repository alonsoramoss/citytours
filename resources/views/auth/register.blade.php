<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>Crear tu Cuenta</title>
        <meta name="description" content="Sistema de gestión turística que permite el registro e inicio de sesión de usuarios, visualización de paquetes turísticos y una sección para crear, editar y eliminar usuarios registrados.">
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
                        <h1 class="mb-2 display-5 text-light fw-bold">
                            CITY TOURS <br />
                            <span class="d-none d-md-block display-6 fw-semibold" style="color: hsl(218, 81%, 75%)">Empresa de turismo</span>
                        </h1>
                        <p class="d-none d-md-block" style="color: hsl(218, 81%, 85%)">
                            "¡Únete a la aventura! Regístrate ahora para acceder a ofertas exclusivas y planificar tus próximas experiencias de viaje con City Tours."
                        </p>
                    </div>
                    <div class="col-lg-6 px-md-4 py-md-2 p-lg-5 position-relative">
                        <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
                        <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>
                        <div class="card bg-glass">
                            <div class="card-body">
                                <h4 class="text-center display-6 fw-normal">REGISTRARSE</h4>
                                <form action="{{route('register')}}" method="post">
                                    @csrf
                                    <div class="form-outline mb-2">
                                        <label class="form-label w-100 text-start fw-semibold" for="form3Example3">Nombres y Apellidos</label>
                                        <input type="text" name="name" id="form3Example3" class="form-control" placeholder="Ingresar nombres y apellidos" required/>
                                    </div>
                                    <div class="form-outline mb-2">
                                        <label class="form-label w-100 text-start fw-semibold" for="form3Example3">Correo electrónico</label>
                                        <input type="email" name="email" id="form3Example3" class="form-control" placeholder="Ingresar correo electrónico" required/>
                                    </div>
                                    <div class="form-outline mb-2">
                                        <label class="form-label w-100 text-start fw-semibold" for="form3Example4">Contraseña</label>
                                        <input type="password" name="password" id="form3Example4" class="form-control" placeholder="Ingresar contraseña" required/>
                                    </div>
                                    <div class="form-outline mb-2">
                                        <label class="form-label w-100 text-start fw-semibold" for="form3Example4">Confirmar contraseña</label>
                                        <input type="password" name="password_confirmation" id="form3Example4" class="form-control" placeholder="Confirmar contraseña" required/>
                                    </div>
                                    <div class= "text-center my-4">
                                        <button class="btn btn-primary" type="submit">Registrarse</button>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-center mb-2">
                                        <p class="mb-0 me-2">¿Ya tienes una cuenta?</p>
                                        <a href="{{route('login')}}">Login</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>
