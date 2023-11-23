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

  <section id="app" class="container">
    <header>
      <nav class="navbar navbar-expand-lg bgnav navbar-expand d-block d-lg-flex text-center">
        <img class="imgLogo " src="./img/identificador.png" alt="">
        <div class="collapse navbar-collapse d-inline" >
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
                <img class="miniImg mx-2" src="./img/pngwing.com.png " alt="">
            </li>
        </ul>
        </div>
</nav>
    </header>

    <section >
      <div class=" d-lg-grid">
        <h1 class="pt-lg-3 title1 text-center pt-2 pb-2 ">Top Recetas</h1>

        <div class="row justify-content-lg-around justify-content-around">

          <div  class="pt-lg-3 pb-lg-5 col-lg-3 col-8 pt-3 pb-3">
            <recipe-card image="./img/receta1.jpg" category="Lunch" name="aaa" category="aaa" description="aaa" time="1" level="1" likes="1" ></recipe-card>
          </div>
          <!-- Componente -->
          <div class="pt-lg-3 pb-lg-5 col-lg-3 col-8 pt-3 pb-3">


            <recipe-card image="./img/receta1.jpg" category="Lunch" name="aaa" category="aaa" description="aaa" time="1" level="Hard" likes="1" ></recipe-card>
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
  <script src="./dist/js/components/RecipeCard.js"></script>
  
  
  <script>
const mountedApp = app.mount("#app");
  </script>
</body>

</html>
