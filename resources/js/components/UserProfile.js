app.component('User-profile',{
    props:{
        user:{
            type:String
        },
        image:{
            type:String
        },
        role:{
            type:String
        },
    },
    mounted(){
      console.log("");
      
    },
methods:{
  
},
    template:
    /*html*/ 
    `
    <section class=" row m-5">
    <div class="col-md-6 mx-auto text-center">
        <img max-width="100px" height="88.94px" vbind:src="image" alt="">
        <h1 class="title1">{{name}}</h1>
        <h5 class="base" href="">{{role}}</h5>
    </div>
</section>
`
})