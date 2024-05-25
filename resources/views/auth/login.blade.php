<!doctype html>
<html lang="en">
    <head>
        <title>Login</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
        <link rel="stylesheet" href="{{ asset('assets/estilos.css')}}">
    </head>
    <body>
        <section class="background-radial-gradient overflow-hidden">
            <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
                <div class="row gx-lg-5 align-items-center mb-5">
                    <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
                        <h1 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)">
                            CITY TOURS <br />
                            <span style="color: hsl(218, 81%, 75%)">Empresa de turismo</span>
                        </h1>
                        <p class="mb-4 opacity-70" style="color: hsl(218, 81%, 85%)">
                            "¡Explora las regiones del Perú con nosotros! Inicia sesión para acceder a emocionantes recorridos guiados y descubrir los secretos mejor guardados de cada región del Perú con City Tours."
                        </p>
                    </div>
                    <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
                        <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
                        <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>
                        <div class="card bg-glass mt-5">
                            <div class="card-body px-4 py-5 px-md-5">
                                <h4 class="text-center display-4">LOGIN</h4>
                                <form action="{{route('login')}}" method="post">
                                    @csrf
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="form3Example3">Correo electrónico</label>
                                        <input type="email" name="email" id="form3Example3" class="form-control" placeholder="Ingresar correo electrónico"/>
                                    </div>
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="form3Example4">Contraseña</label>
                                        <input type="password" name="password" id="form3Example4" class="form-control" placeholder="Ingresar contraseña"/>
                                    </div>
                                    <div class= "text-center pt-1 mb-5 pb-1">
                                        <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit">Iniciar sesión</button>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-center pb-4">
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
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>



