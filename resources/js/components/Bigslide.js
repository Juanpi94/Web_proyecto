app.component('big-slide',{
    props: {
        image: {
            type: String
        },
        name: {
            type: String,
            default:"default name"
        },
       

    },
    methods: {
        

    },
    template:
        /*html*/
        `
        <div class="carousel-item active " data-bs-interval="4000">
        <img v-bind:src="image" class="d-block w-100 rounded-5 medImg"  alt="...">
        <div class="carousel-caption d-none d-md-block">
            <h5 class="subtitle2">{{name}}</h5>
            <button class="rounded-5 btnGreen2">Ver recetas</button>
        </div>
        </div>

  `
})


