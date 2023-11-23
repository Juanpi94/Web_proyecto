app.component('recipe-card',{
  props:{
      image:{
          type: String
      },
      category:{
          type: String,
          default: "default category"
      },
      name:{
          type: String,
          default: "default name"
      },
      description:{
          type: String,
          default: "default description"
      },
      time:{
          type: String,
          default: "default time"
      },
      level:{
          type: String,
          default: "default level"
      },
      likes:{
          type: Number,
          default: 1
      },
      index:{
        type: Number,
        default: 1
    },
  },
methods:{
  onClickLike(){
      //console.log("LIKE");
      this.$emit('recipelike', this.index);
      //this.recipe_likes++;
  },
  onClickUnlike(){
      //console.log("UNLIKE");
      this.$emit('recipeunlike', this.index);

  },
  onClickViewRecipe(){
      console.log("VIEW");
      //this.$emit('recipedetails', this.index);
      this.$test.emit('foo',"works!");
  },
},
  template:
  /*html*/ 
  `
  
  <div class="card cards " >
              <img v-bind:src="image" class="card-img-top " alt="...">
              <div class="card-body">
                <p class="card-text">{{category}}</p>
                <h3 class="card-text">{{name}}</h3>
                <p class="card-text">{{description}}</p>
                <p class="card-text" >{{time}}</p>
              </div>
              <div class="d-flex  card-footer">
                <p class="">{{level}}</p>
                <img class="mx-2 miniImg" src="./img/4299986.png" v-bind:src="image" alt="">
                <p class="">{{likes}}</p>
              </div>
              <button class="btn btnred base" v-on:click="onClickLike(index)">Like</button>
              <button class="btn btnblue base mx-2" v-on:click="onClickUnlike(index)">UnLike</button>
              <button class="btn btnGreen base" v-on:click="onClickViewRecipe(index)" data-bs-toggle="modal"
                  data-bs-target="#staticBackdrop">View Recipe</button>
            </div>

   `
})