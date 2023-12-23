<template>
<body>
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
    <div class="container-fluid">
        <a class="navbar-brand d-flex align-items-center text-center py-0 px-4 px-lg-5" href="/" style="text-decoration: none; color: #333; display: flex; align-items: center;">
            <img src="../../../public/img/icons/minsu.jpg" alt="MinSU's Job Section Logo" class="logo-img" style="max-height: 40px; max-width: 100%; margin-right: 10px;">
            <h1 class="m-0 text-primary" style="font-size: 1.5rem; font-weight: bold;">MinSU's Job Section</h1>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav ms-auto p-4 p-lg-0">
                <li class="nav-item"><a href="/" class="nav-link ">Home</a></li>
                <li class="nav-item"><a href="jobDetails" class="nav-link">Job Detail</a></li>
                <li class="nav-item"><a href="category" class="nav-link active">Job Category</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="about" id="menuDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        About
                    </a>
                    <ul class="dropdown-menu dropdown-menu-start" aria-labelledby="menuDropdown">
                        <li><a class="dropdown-item" href="testimonial">Testimonial</a></li>
                        <li><a class="dropdown-item" href="contact">Contact</a></li>
                       
                    </ul>
                </li>
                <a href="/personal" style="background-color: lightgreen; border: none; color: white; padding: 10px 15px; text-align: center; text-decoration: none; display: inline-block; font-size: 16px; margin: 4px 2px; cursor: pointer;">
  Profile
</a>

            </ul>
        </div>
    </div>
</nav>


        <!-- Navbar End -->
 

        <!-- Header End -->
        <div class="container-xxl py-5 bg-dark page-header mb-5">
            <div class="container my-5 pt-5 pb-4">
                <h1 class="display-3 text-white mb-3 animated slideInDown">Category</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb text-uppercase">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Category</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- Header End -->
        <!-- Category Start -->
                       <!-- Category Start -->
                       <div class="container-xxl py-5">
            <div class="container">
                <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Explore By Category</h1>
                <div class="row g-4" >
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
    <a class="cat-item rounded p-4" href="/information/id" style="position: relative; text-align: center; text-decoration: none; color: inherit; display: block;">
        <div style="width: 70px; height: 70px; background-color: #3498db; border-radius: 50%; margin: 0 auto; display: flex; align-items: center; justify-content: center; margin-bottom: 10px;">
            <img src="../../../public/img/college logo/ccs.jpg" alt="Image" style="border-radius: 50%; max-width: 100%; height: auto;">
        </div>
        <h6 class="mb-3">Information & Technology</h6>
        <p class="mb-0"></p>
    </a>
</div>

<div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
    <a class="cat-item rounded p-4" href="/business/id" style="position: relative; text-align: center; text-decoration: none; color: inherit; display: block;">
        <div style="width: 70px; height: 70px; background-color: #3498db; border-radius: 50%; margin: 0 auto; display: flex; align-items: center; justify-content: center; margin-bottom: 10px;">
            <img src="../../../public/img/college logo/cbm.png" alt="Image" style="border-radius: 50%; max-width: 100%; height: auto;">
        </div>
        <h6 class="mb-3">Business and Management</h6>
        <p class="mb-0"></p>
    </a>
</div>

<div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
    <a class="cat-item rounded p-4" 
    style="position: relative; text-align: center; text-decoration: none; color: inherit; display: block;">
        <div style="width: 70px; height: 70px; background-color: #3498db; border-radius: 50%; margin: 0 auto; display: flex; align-items: center; justify-content: center; margin-bottom: 10px;">
            <img src="../../../public/img/college logo/cte.jpg" alt="Image" style="border-radius: 50%; max-width: 100%; height: auto;">
        </div>
        <h6 class="mb-3">Teaching & Education</h6>
        <p class="mb-0"></p>
    </a>
</div>
                 
<div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
    <a class="cat-item rounded p-4"  style="position: relative; text-align: center; text-decoration: none; color: inherit; display: block;">
        <div style="width: 70px; height: 70px; background-color: #3498db; border-radius: 50%; margin: 0 auto; display: flex; align-items: center; justify-content: center; margin-bottom: 10px;">
            <img src="../../../public/img/college logo/crim.jpg" alt="Image" style="border-radius: 50%; max-width: 100%; height: auto;">
        </div>
        <h6 class="mb-3">Criminology & Justice</h6>
        <p class="mb-0"></p>
    </a>
</div>
                  
<div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
    <a class="cat-item rounded p-4" href="/psychology/id" style="position: relative; text-align: center; text-decoration: none; color: inherit; display: block;">
        <div style="width: 70px; height: 70px; background-color: #3498db; border-radius: 50%; margin: 0 auto; display: flex; align-items: center; justify-content: center; margin-bottom: 10px;">
            <img src="../../../public/img/college logo/cas.png" alt="Image" style="border-radius: 50%; max-width: 100%; height: auto;">
        </div>
        <h6 class="mb-3">English & Psychology</h6>
        <p class="mb-0"></p>
    </a>
</div>
<div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
    <a class="cat-item rounded p-4" href="/fashion/id" style="position: relative; text-align: center; text-decoration: none; color: inherit; display: block;">
        <div style="width: 70px; height: 70px; background-color: #3498db; border-radius: 50%; margin: 0 auto; display: flex; align-items: center; justify-content: center; margin-bottom: 10px;">
            <img src="../../../public/img/college logo/BTVTED.jpg" alt="Image" style="border-radius: 50%; max-width: 100%; height: auto;">
        </div>
        <h6 class="mb-3">Fashion & Garments</h6>
        <p class="mb-0"></p>
    </a>
</div>

<div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
    <a class="cat-item rounded p-4" href="/drafting/id" style="position: relative; text-align: center; text-decoration: none; color: inherit; display: block;">
        <div style="width: 70px; height: 70px; background-color: #3498db; border-radius: 50%; margin: 0 auto; display: flex; align-items: center; justify-content: center; margin-bottom: 10px;">
            <img src="../../../public/img/college logo/BTVTED.jpg" alt="Image" style="border-radius: 50%; max-width: 100%; height: auto;">
        </div>
        <h6 class="mb-3">Drafting</h6>
        <p class="mb-0"></p>
    </a>
</div>

<div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
    <a class="cat-item rounded p-4" href="/food/id" style="position: relative; text-align: center; text-decoration: none; color: inherit; display: block;">
        <div style="width: 70px; height: 70px; background-color: #3498db; border-radius: 50%; margin: 0 auto; display: flex; align-items: center; justify-content: center; margin-bottom: 10px;">
            <img src="../../../public/img/college logo/BTVTED.jpg" alt="Image" style="border-radius: 50%; max-width: 100%; height: auto;">
        </div>
        <h6 class="mb-3">Foode & Services</h6>
        <p class="mb-0"></p>
    </a>
</div>

<div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
    <a class="cat-item rounded p-4" href="/automotive/id" style="position: relative; text-align: center; text-decoration: none; color: inherit; display: block;">
        <div style="width: 70px; height: 70px; background-color: #3498db; border-radius: 50%; margin: 0 auto; display: flex; align-items: center; justify-content: center; margin-bottom: 10px;">
            <img src="../../../public/img/college logo/BTVTED.jpg" alt="Image" style="border-radius: 50%; max-width: 100%; height: auto;">
        </div>
        <h6 class="mb-3">Automotive</h6>
        <p class="mb-0"></p>
    </a>
</div>
<div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
    <a class="cat-item rounded p-4" href="/tech/id" style="position: relative; text-align: center; text-decoration: none; color: inherit; display: block;">
        <div style="width: 70px; height: 70px; background-color: #3498db; border-radius: 50%; margin: 0 auto; display: flex; align-items: center; justify-content: center; margin-bottom: 10px;">
            <img src="../../../public/img/college logo/BTVTED.jpg" alt="Image" style="border-radius: 50%; max-width: 100%; height: auto;">
        </div>
        <h6 class="mb-3">Electronics & Electrical Tech</h6>
        <p class="mb-0"></p>
    </a>
</div>
<div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
    <a class="cat-item rounded p-4" href="/home/id" style="position: relative; text-align: center; text-decoration: none; color: inherit; display: block;">
        <div style="width: 70px; height: 70px; background-color: #3498db; border-radius: 50%; margin: 0 auto; display: flex; align-items: center; justify-content: center; margin-bottom: 10px;">
            <img src="../../../public/img/college logo/BTVTED.jpg" alt="Image" style="border-radius: 50%; max-width: 100%; height: auto;">
        </div>
        <h6 class="mb-3">Home Economics</h6>
        <p class="mb-0"></p>
    </a>
</div>

<div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
    <a class="cat-item rounded p-4" href="/industrial/id" style="position: relative; text-align: center; text-decoration: none; color: inherit; display: block;">
        <div style="width: 70px; height: 70px; background-color: #3498db; border-radius: 50%; margin: 0 auto; display: flex; align-items: center; justify-content: center; margin-bottom: 10px;">
            <img src="../../../public/img/college logo/BTVTED.jpg" alt="Image" style="border-radius: 50%; max-width: 100%; height: auto;">
        </div>
        <h6 class="mb-3">Industrial Arts</h6>
        <p class="mb-0"></p>
    </a>
</div>
                </div>
            </div>
        </div>


<!-- Footer Start -->
<div class="container-fluid bg-dark text-white-50 footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
                <div class="container py-5">
                    <div class="row g-5">
                        <div class="col-lg-3 col-md-6">
    <img src="../../../public/img/icons/minsu.jpg" alt="Mindoro State University Logo" class="img-fluid rounded-circle mb-4" style="max-width: 100%; height: auto;">
    <h5 class="text-white mb-4">Mindoro State University - Calapan City Campus</h5>
</div>
                        <div class="col-lg-3 col-md-6">
                            <h5 class="text-white mb-4">Navigation</h5>
                            <a class="btn btn-link text-white-50" href="about">About Us</a>
                            <a class="btn btn-link text-white-50" href="contact">Contact Us</a>
                            <a class="btn btn-link text-white-50" href="jobDetails">Job Details</a>
                            <a class="btn btn-link text-white-50" href="category">Job Category</a>
                            <a class="btn btn-link text-white-50" href="testimonial">Testimonial</a>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <h5 class="text-white mb-4">MinSU Core Values</h5>
                            <a class="btn btn-link text-white-50" >RESILIENCE</a>
                            <a class="btn btn-link text-white-50" >INTEGRITY</a>
                            <a class="btn btn-link text-white-50" >COMMITMENT</a>
                            <a class="btn btn-link text-white-50" >EXCELLENCE</a>
                        </div>
                        <!-- <div class="col-lg-3 col-md-6">
                            <h5 class="text-white mb-4">Contact</h5>
                            <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>{{ info.address }}</p>
                            <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>{{ info.contact }}</p>
                            <p class="mb-2"><i class="fa fa-envelope me-3"></i>{{ info.email }}</p>
                            <div class="d-flex pt-2">
                                <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                                <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div> -->
                    </div>
                    
                </div>
            </div>
            <!-- Footer End -->


        <!-- Back to Top -->
</body>
</template>
<style>
@import'../../assets/css/bootstrap.min.css';
@import'../../assets/css/style.css';
</style>
<script>
import axios from 'axios';
export default {
    data(){
        return{
            catego: [],
        }
    },
    mounted(){
        this.getCate();
    },
    methods: {
        async getCate(){
            const categ = await axios.get("getCate");
            this.catego = categ.data;
        }
    },
};
</script>
   <!-- data() {
         return {
           info: "",
           data: "",
         };
       },
       methods: {
         async fetchData(endpoint) {
           try {
             const response = await axios.get(endpoint);
             if (endpoint === "getWebInfo") {
               this.info = response.data;
             } else if (endpoint === "getCate") {
               this.data = response.data;
             }
             console.log(response);
           } catch (error) {
             console.error(error);
           }
         },
         async fetchDataOnMounted() {
           await this.fetchData("getWebInfo");
           await this.fetchData("getCate");
         },
         async getCategoryNameById(categoryId) {
       try {
         const response = await fetch(`/api/categories/${categoryId}`);
             if (response.ok) {
           const categoryData = await response.json();
                 return categoryData.CategoryName || 'Unknown Category';
         } else {
           console.error('Error fetching category data:', response.status, response.statusText);
           return 'Unknown Category';
         }
       } catch (error) {
         console.error('Error fetching category data:', error);
         return 'Unknown Category';
       }
     }
       },
       mounted() {
         this.fetchDataOnMounted();
       },
     }; -->