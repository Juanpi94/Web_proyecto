<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Lora:wght@400;500;600;700&display=swap"
        rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="./dist/css/main.css">
    <title>Organic Taste</title>
</head>

<body>
    <section class="container" id="app">
        <header>
            <nav class="navbar navbar-expand-lg bgnav navbar-expand d-block d-lg-flex text-center">
                <img class="imgLogo " src="./img/identificador.png" alt="">
                <div class="collapse navbar-collapse d-inline">
                    <ul class="navbar-nav mx-auto mx-lg-auto ">
                        <li class="nav-item active">
                            <a class="nav-link base2 " href="#">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link base2" href="#">Top Recetas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link base2" href="#">Iniciar sesion</a>
                        </li>
                    </ul>
                </div>
                <div class="d-none d-lg-inline">
                    <ul class="navbar-nav ">
                        <li class="nav-item">
                            <input class="form-control" type="text">
                        </li>
                        <li class="nav-item ">
                            <img class="miniImg mx-2" src="./img/pngwing.com.png" alt="">
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <div class="container-fluid pt-5  ">
          <div class="">
            <h5 class="title1 text-center pb-3">Top Recetas</h5>
                <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">

                        <big-slide image="./img/receta6.png" name="Queque"></big-slide>>

                        

                        
                    </div> 
                </div>
                
            </div>
            
        </div>



        <section class=" row mt-5 mb-3 justify-content-around ">
            <h1 class="text-center title1">Para ti</h1>
            <div class="col-lg-6 col-8 p-lg-4 ">
                <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">

                        <slides-info image="./img/receta6.png" name="Queque"></slides-info>>

                        

                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
                        data-bs-slide="prev">
                        <span class="" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
                        data-bs-slide="next">
                        <span class="" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>

            <div class="col-lg p-4 d-none d-lg-block">
                <div id="carouselExampleInterval" class="carousel slide " data-bs-ride="carousel">
                    <div class="carousel-inner">

                        <slides-info image="./img/receta6.png" name="Queque"></slides-info>

                        <slides-info image="./img/receta6.png" name="Queque"></slides-info>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
                        data-bs-slide="prev">
                        <span class="" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
                        data-bs-slide="next">
                        <span class="" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>

        </section>

        <section class="row mb-5 justify-content-around ">
            <h1 class="text-center title1">Nuevas</h1>
            <div class="col-lg-6 col-8 p-lg-4 ">
                <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <slides-info image="./img/receta6.png" name="Queque"></slides-info>

                        <slides-info image="./img/receta6.png" name="Queque"></slides-info>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
                        data-bs-slide="prev">
                        <span class="" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
                        data-bs-slide="next">
                        <span class="" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>

            <div class="col-lg p-4 d-none d-lg-block">
                <div id="carouselExampleInterval" class="carousel slide " data-bs-ride="carousel">
                    <div class="carousel-inner">

                        <slides-info image="./img/receta6.png" name="Queque"></slides-info>

                        <slides-info image="./img/receta6.png" name="Queque"></slides-info>

                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
                        data-bs-slide="prev">
                        <span class="" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
                        data-bs-slide="next">
                        <span class="" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>


        </section>

        <footer>
            <nav>
                <div class="navbar bgnav row text-center">
                    <div class="col-4 ">
                        <h5 class="base2">Redes sociales</h5>
                        <img src="img/fbIcon.png" class="imgSocial" alt="Facebook">
                        <img src="img/igIcon.png" class="imgSocial" alt="Instagram">
                    </div>
                    <div class="col-4">
                        <a class="base2 text-decoration-none" href="#">Derechos reservados</a>
                    </div>
                    <div class="col-4">
                        <img class="imgLogo" src="./img/identificador.png" alt="Identificador">
                    </div>
                </div>
            </nav>
        </footer>



    </section>

    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

    <script src="./dist/js/main.js"></script>
    <script src="./dist/js/components/SlidesInfo.js"></script>
    <script src="./dist/js/components/Bigslide.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"
        integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ"
        crossorigin="anonymous"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>

    <script>
        const mountedApp = app.mount("#app");
    </script>
</body>

</html>