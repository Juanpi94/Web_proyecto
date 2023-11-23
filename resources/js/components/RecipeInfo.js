app.component('recipe-info',{
    props:{
        image:{
            type:String
        },
        time:{
            type:String,
            default:"default time"
        },
        level:{
            type:String,
            default:"default level"
        },
        name:{
            type:String,
            default:"default options"
        },
        ingredients:{
            type:String,
            default:"default options"
        },
        preparation:{
            type:String,
            default:"default options"
        },
        options:{
            type:String,
            default:"default options"
        },
    },
    mounted(){
        
        
      },
methods:{
    

},
    template:
    /*html*/ 
    `
  
    <img class="rounded-5 w-100 bigImg pb-3" src="./img/receta1.jpg" alt="">
            <h1 class="title1">Arroz con mango</h1>
            <p>{{level}}</p>
            <p class="bold">Tiempo de preparacion</p>
            <p >{{time}}</p>
            <div class="col-lg-4 col-12 m-lg-5 bgcard m-2 pt-3 text-center ">
                <h2 class="subtitle2">Ingredientes</h2>
                <h3 class="base2 ">{{ingredients}} </h3>

            </div>
            <div class="col-lg-4 m-lg-5 col-12  ">
                <div class="mb-lg-3 bgcard pb-lg-1 mt-4 p-2 ">
                    <h2 class="subtitle2">Preparacion</h2>
                    <h3 class="base2 ">{{preparation}}</h3>

                </div>
                <div class="bgcard pb-lg-1 col-12 mt-4 p-2 mb-3">
                    <h2 class="subtitle2">Opciones</h2>
                    <h3 class="base2 ">{{options}}</h3>

                </div>
            </div>
  `
})