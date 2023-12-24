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

      <button class="btn btn-danger" @click="openModal()">Logout</button>

    </div>
  </header>
<!-- Logout Confirmation Modal -->
<div class="modal" id="logoutModal" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0,0,0,0.7);">
    <div class="modal-content" style="width: 50%; margin: 15% auto; background-color: #fff; padding: 20px; border-radius: 5px; box-shadow: 0 4px 8px rgba(0,0,0,0.2);">
        <div class="modal-header" style="overflow: hidden; border-bottom: 1px solid #ddd;">
            <span class="close" onclick="closeModal()" style="float: right; font-size: 20px; font-weight: bold; cursor: pointer;">&times;</span>
            <h2 style="margin: 0;">Logout Confirmation</h2>
        </div>
        <div class="modal-body">
            <p id="confirmationMessage">Are you sure you want to logout?</p>
        </div>
        <div class="modal-footer" style="text-align: right; border-top: 1px solid #ddd; padding-top: 10px; margin-top: 10px;">
            <button type="button" @click="closeModal()" style="background-color: #ddd; padding: 5px 10px; border: none; border-radius: 3px; cursor: pointer;">Cancel</button>
            <button type="button" @click="confirmLogout()" style="background-color: #4CAF50; color: #fff; padding: 5px 10px; border: none; border-radius: 3px; cursor: pointer;">Logout</button>
        </div>
    </div>
</div>
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
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <div style="width: 70px; height: 70px; background-color: #3498db; border-radius: 50%; margin: 0 auto; display: flex; align-items: center; justify-content: center; margin-bottom: 10px;">
            <img src="../../assets/img/lead.jpg" alt="Image" style="border-radius: 50%; max-width: 100%; height: auto;">
        </div>
        <h3><a href="/lead">LEAD</a></h3>
          </div>
        </div>
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <div style="width: 70px; height: 70px; background-color: #3498db; border-radius: 50%; margin: 0 auto; display: flex; align-items: center; justify-content: center; margin-bottom: 10px;">
            <img src="../../assets/img/teatro.jpg" alt="Image" style="border-radius: 50%; max-width: 100%; height: auto;">
        </div>
                    <h3><a href="/teatro">Teatro MinSU</a></h3>
          </div>
        </div>
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <div style="width: 70px; height: 70px; background-color: #3498db; border-radius: 50%; margin: 0 auto; display: flex; align-items: center; justify-content: center; margin-bottom: 10px;">
            <img src="../../assets/img/turista.jpg" alt="Image" style="border-radius: 50%; max-width: 100%; height: auto;">
        </div>
                    <h3><a href="/turista">Turista</a></h3>
          </div>
        </div>
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <div style="width: 70px; height: 70px; background-color: #3498db; border-radius: 50%; margin: 0 auto; display: flex; align-items: center; justify-content: center; margin-bottom: 10px;">
            <img src="../../assets/img/veritas.jpg" alt="Image" style="border-radius: 50%; max-width: 100%; height: auto;">
        </div>
                    <h3><a href="/veritas">The Veritas</a></h3>
          </div>
        </div>
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <div style="width: 70px; height: 70px; background-color: #3498db; border-radius: 50%; margin: 0 auto; display: flex; align-items: center; justify-content: center; margin-bottom: 10px;">
            <img src="../../assets/img/legits.jpg" alt="Image" style="border-radius: 50%; max-width: 100%; height: auto;">
        </div>            
        <h3><a href="/legits">LEGITS</a></h3>
          </div>
        </div>
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <div style="width: 70px; height: 70px; background-color: #3498db; border-radius: 50%; margin: 0 auto; display: flex; align-items: center; justify-content: center; margin-bottom: 10px;">
            <img src="../../assets/img/samfil.jpg" alt="Image" style="border-radius: 50%; max-width: 100%; height: auto;">
        </div>
                    <h3><a href="/samfil">Samahang Filipino</a></h3>
          </div>
        </div>
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <div style="width: 70px; height: 70px; background-color: #3498db; border-radius: 50%; margin: 0 auto; display: flex; align-items: center; justify-content: center; margin-bottom: 10px;">
            <img src="../../assets/img/buklod.jpg" alt="Image" style="border-radius: 50%; max-width: 100%; height: auto;">
        </div>
                    <h3><a href="/buklod">Buklod</a></h3>
          </div>
        </div>
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <div style="width: 70px; height: 70px; background-color: #3498db; border-radius: 50%; margin: 0 auto; display: flex; align-items: center; justify-content: center; margin-bottom: 10px;">
            <img src="../../assets/img/sikada.jpg" alt="Image" style="border-radius: 50%; max-width: 100%; height: auto;">
        </div>
                    <h3><a href="/sikada">Sikada Chorale</a></h3>
          </div>
        </div>
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <div style="width: 70px; height: 70px; background-color: #3498db; border-radius: 50%; margin: 0 auto; display: flex; align-items: center; justify-content: center; margin-bottom: 10px;">
            <img src="../../assets/img/baanaw.jpg" alt="Image" style="border-radius: 50%; max-width: 100%; height: auto;">
        </div>
                    <h3><a href="/baanaw">BAANAW</a></h3>
          </div>
        </div>
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <div style="width: 70px; height: 70px; background-color: #3498db; border-radius: 50%; margin: 0 auto; display: flex; align-items: center; justify-content: center; margin-bottom: 10px;">
            <img src="../../assets/img/gad.jpg" alt="Image" style="border-radius: 50%; max-width: 100%; height: auto;">
        </div>            
        <h3><a href="/gad">Ala-GAD Advocates</a></h3>
          </div>
        </div>
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <div style="width: 70px; height: 70px; background-color: #3498db; border-radius: 50%; margin: 0 auto; display: flex; align-items: center; justify-content: center; margin-bottom: 10px;">
            <img src="../../assets/img/linguistic.jpg" alt="Image" style="border-radius: 50%; max-width: 100%; height: auto;">
        </div>
                    <h3><a href="/linguistic">Linguistic Circle</a></h3>
          </div>
        </div>
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <div style="width: 70px; height: 70px; background-color: #3498db; border-radius: 50%; margin: 0 auto; display: flex; align-items: center; justify-content: center; margin-bottom: 10px;">
            <img src="../../assets/img/eng-thusiast.jpg" alt="Image" style="border-radius: 50%; max-width: 100%; height: auto;">
        </div>
                    <h3><a href="/eng">Eng-Thusiast</a></h3>
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

  export default {
    data() {
      return {
        news: "",
      };
    },
    mounted() {
      // Close the modal if the user clicks outside of it
      window.onclick = (event) => {
        var modal = document.getElementById('logoutModal');
        if (event.target == modal) {
          this.closeModal();
        }
      };
    },
    methods: {
      openModal() {
        var modal = document.getElementById('logoutModal');
        modal.style.display = 'block';
      },
      closeModal() {
        var modal = document.getElementById('logoutModal');
        modal.style.display = 'none';
      },
      confirmLogout() {
        console.log('confirmLogout() called'); // Add this line

        // Add your logout logic here (if any)

        // Display a confirmation alert
        alert('Logout confirmed!');

        // Redirect to the login form using Vue Router
        this.$router.push({ path: '/orgLogin' });

        // Close the modal or perform other actions (optional, depending on your needs)
        // this.closeModal();
      },
    }
  }
</script>
