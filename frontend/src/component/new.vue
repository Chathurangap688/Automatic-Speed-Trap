<template>
  <div>
    <h1>New</h1>
    <form @submit.prevent="submitFrom">
      <div class="form-group">
        <label>Location</label>
        <input type="text"  placeholder="location" v-model="img.location">
      </div>
      <div class="form-group">
        <label>Path</label>
        <input type="text"  placeholder="path" v-model="img.path">
      </div>
      <div class="form-group">
        <label>Image</label>
        <input type="file"  placeholder="Image" @change="getimage($event)">
      </div>



      <button type="submit" class="btn btn-default">Submit</button>
    </form>
  </div>

</template>
<script >
  export default {
    data(){
      return{
        img:{
          path:'',
          location:'',
          image:''

        }
      }
    },
    methods: {
      submitFrom: function () {
        console.log("ok");
        this.$http.post("http://localhost:8000/api/add1",this.img).then(function (response) {
          console.log(response)

        })


      },
      getimage(event){
        var fileReder= new FileReader();
        fileReder.readAsDataURL(event.target.files[0]);
        fileReder.onload=event=>{
          this.img.image=event.target.result;
          console.log(this.img);
        }
      }


    }
  }
</script>
