<template>
    <index />
  </template>
  
  <script>
  import { defineComponent } from 'vue';
  import'../../assets/css/bootstrap.min.css';
  import'../../assets/css/style.css';
  
  // Components
  import index from '../components/indexvue.vue';
  

  export default defineComponent({
    name: 'index',
  
    components: {
      index,  
    },
  });

  </script>