<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- Google Fonts -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="dist/css/main.css">
    <title>Organic Taste</title>
</head>


<body>
    <header class="navbar">
        <img src="img/identificador.png" class="mx-auto" max-width="300px" height="88.94px" alt="">
    </header>

    <section class="mb-4">
        <div class="container">
            <div class="row d-flex justify-content-center align-items-center ">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card rounded-5">
                        <div class="card-body p-4 text-center row row-gap-2">


                            <div class="form-outline mb-2">
                                <label class="form-label subtitle" for="typeEmailX-2">Usuario</label>
                                <input type="email" id="typeEmailX-2" class="form-control form-control-lg" />

                            </div>

                            <div class="form-outline mb-2">
                                <label class="form-label subtitle" for="typePasswordX-2">Contraseña</label>
                                <input type="password" id="typePasswordX-2" class="form-control form-control-lg" />
                            </div>

                            <!-- Checkbox -->
                            <div class="d-grid justify-content-center mb-3">
                                <a class="base" href=""> Olvide mi contraseña </a>
                                <a class="base" href="">No tienes cuenta? <br>hazte una</a>
                            </div>

                            <div class="d-grid ">  
                                <button class=" btnGreen m-1" type="submit">Login</button>
                                <button class="btnred m-1" type="submit"> Iniciar sesion con Google</button>
                                <button class="btnblue mb-2 " type="submit"></i>Iniciar sesion con Facebook</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="d-grid col-12 m-2">
        <button class="mx-auto btnGreen">Volver al inicio</button>
    </section>

</body>

</html>