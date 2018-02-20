<template >
  <div>
    <form >
    <div class="input-group custom-search-form " >
      <input type="text" class="form-control" name="search" placeholder="Search..."  v-model="txt">
      <span class="input-group-btn">
        <a class="btn btn-primary" @click="searcha" >Search</a>

    </span>
    </div>

    </form>

    <div class="item col-xs-3 col-lg-3" style="width: 18rem;" v-for="item in list">
      <img class="card-img-top" v-bind:src="'http://localhost:8000/'+item.image"  alt="Card image cap"  width="150" height="125">
      <div class="card-body">
        <h5 class="card-title">Path: {{item.path}} </h5>
        <h5 class="card-title">Location: {{item.location}} </h5>
        <h5 class="card-title">Date & Time: {{item.created_at}} </h5>
        <a class="btn btn-primary" @click="deletei($event)" v-bind:id="item.id">Delete this</a>
      </div>
    </div>


  </div>
</template>
<script >
  export  default {
    data(){
      return{
        list:[],
        txt:''
      }
    },
    created(){
      this.$http.get("http://localhost:8000/api/get").then(function (response) {
        this.list=response.body.all;
      })
    },
    methods:{
      deletei(event){
        this.$http.delete("http://localhost:8000/api/delete/"+event.target.id).then(function (response) {
          var potition=this.list.findIndex(function (element) {
            return element.id==event.target.id;
          })
          this.list.splice(potition,1);
        })

      },
      searcha(){
         // console.log(this.txt);
       this.$http.get("http://localhost:8000/api/getsearch/"+this.txt).then(function (response) {
         console.log(response);
         this.list=response.body.all;
         return response;
        });

      }

    }
  }

</script>
