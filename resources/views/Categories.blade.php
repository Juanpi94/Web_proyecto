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



        <section class="row ">
            <div class="p-lg-3 text-lg-center">
                <h1 class="title1">Todas las categorias</h1>
            </div>

            <div class="row pb-3">
                <nav class="navbar navbar-expand-lg">
                    <div class="container-fluid">

                        <ul class="navbar-nav me-auto mx-auto mb-2 mb-lg-0 gap-lg-2">
                            <li v-for="(category, index) in categories" class="nav-item">
                                <button class="btn btnGreen" v-on:click="onClickCategory(category.name)"
                                    aria-current="page">{{category.name}}</button>
                            </li>
                        </ul>


                    </div>
                </nav>
            </div>

            <div v-for="(item, index) in recipes" class="col-md-3 p-2 pb-5">
                <recipe-card :image="item.image" :category="item.category" :name="item.name"  :description="item.description" :time="item.likes" :level="item.level" :likes="item.likes" :index="item.index" ></recipe-card>
          </div>
            </div>


        </section>

        <footer>
            <nav>
                <div class="navbar bgnav navbar-expand-lg row text-center text-lg-center">
                    <div class="col-lg-4 col-4">
                        <h5 class="base2">Redes sociales</h5>
                        <img src="img/fbIcon.png" class="imgSocial" alt="Facebook">
                        <img src="img/igIcon.png" class="imgSocial" alt="Instagram">
                    </div>
                    <div class="col-lg-4 col-4">
                        <a class="base2 text-decoration-none" href="#">Derechos reservados</a>
                    </div>
                    <div class="col-lg-4 col-4">
                        <img class="imgLogo" src="./img/identificador.png" alt="Identificador">
                    </div>
                </div>
            </nav>
        </footer>


    </section>

    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="./dist/js/main.js"></script>
    <script src="./dist/js/components/RecipeInfo.js"></script>


    <script>
        const mountedApp = app.mount("#app");
    </script>
</body>

</html>