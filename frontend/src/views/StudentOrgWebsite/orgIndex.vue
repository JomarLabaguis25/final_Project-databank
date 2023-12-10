<template>
    <body>
          <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0"><a href="index.html">MinSU<span></span></a></h1>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="/orgWebsite">Home</a></li>
          <li><a class="nav-link scrollto" href="/orgAbout">About</a></li>
          <li><a class="nav-link scrollto" href="/service">Services</a></li>
          <li><a class="nav-link scrollto" href="/orgContact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header>

  <!-- End Header -->
     <!-- ======= Hero Section ======= -->
     <section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="container">

      <div class="row justify-content-center">
        <div class="col-xl-6 col-lg-8">
          <h1>The Mindoro State University<span></span></h1>
          <h2>Student Organization List</h2>
        </div>
      </div>

      <div class="row gy-4 mt-5 justify-content-center">
        <div class="col-xl-2 col-md-4"  v-for="(category, index) in categories" :key="index"  >
          <div class="icon-box">
            <div style="width: 70px; height: 70px; background-color: #3498db; border-radius: 50%; margin: 0 auto; display: flex; align-items: center; justify-content: center; margin-bottom: 10px;">
            <img :src="`../../assets/img/${category.image}`" alt="Image" style="border-radius: 50%; max-width: 100%; height: auto;">
        </div>
        <h3><a :href="`/lead/${category.OrgId}`">{{ category.OrgCategory }}</a></h3>
          </div>
        </div>
      </div>

    </div>
  </section><!-- End Hero -->
    </body>
</template>
<style>
@import'../../assets/orgwebsite/vendor/aos/aos.css';
/* @import'../../assets/orgwebsite/vendor/aos/aos.js'; */

/* @import'../../assets/orgwebsite/vendor/bootstrap/css/bootstrap.min.css'; */
@import'../../assets/orgwebsite/vendor/bootstrap-icons/bootstrap-icons.css';
@import'../../assets/orgwebsite/vendor/boxicons/css/boxicons.min.css';
@import'../../assets/orgwebsite/vendor/glightbox/css/glightbox.min.css';
@import'../../assets/orgwebsite/vendor/remixicon/remixicon.css';
@import'../../assets/orgwebsite/vendor/swiper/swiper-bundle.min.css';
@import'../../assets/orgwebsite/css/style.css';
</style>
<script>
import axios from 'axios';
export default{
       data(){
           return{
               info:"",
               categories:[],
           }
       },
       mounted(){
           this.getWebInfo();
           this.getorgcategories();
       },
       methods:{
        async getorgcategories(){
            try{
                const c = await axios.get('getorgcategories');
                this.categories = c.data;
            }catch(error){
               console.log(error);
            }
        },
           async getWebInfo(){
               try{
                   const a = await axios.get("getWebInfo");
                   this.info = a.data;
                   console.log(a);
               }catch(error){
               console.log(error);
               }
           }
       }
   }
</script>


<!-- <script>
export default {

name: "StudentOrgWebsite",

components: {
  orgIndex,orgAbout,  orgContact,
},

mounted() {

    this.loadScripts();

},

methods: {
    loadScripts() {
        const scriptUrls = [
            '/assets/demo/chart-area-demo.js',
,
        ];

        const head = document.getElementsByTagName('head')[0];

        function loadScript(index) {
            if (index < scriptUrls.length) {
                const script = document.createElement('script');
                script.src = scriptUrls[index];
                script.async = true;

                script.onload = function () {
                    loadScript(index + 1);
                };

                head.appendChild(script);
            }
        }

        loadScript(0);
    },
},
};
</script> -->