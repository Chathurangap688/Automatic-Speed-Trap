<template>
 <div id="app">
   <navbar></navbar>
  <router-view></router-view>
 </div>
</template>
<script !src="">
  import Navbar from './component/navbar'
  export default {
    components :{
      'navbar':Navbar
    }
  }
</script>
