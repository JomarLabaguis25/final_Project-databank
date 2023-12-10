<template>
    <!-- Navbar Start -->
        <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
            <a class="navbar-brand d-flex align-items-center text-center py-0 px-4 px-lg-5" href="/" style="text-decoration: none; color: #333; display: flex; align-items: center;">
    <img src="../../public/img/icons/minsu.jpg" alt="MinSU's Job Section Logo" class="logo-img" style="max-height: 40px; max-width: 100%; margin-right: 10px;">
    <h1 class="m-0 text-primary" style="font-size: 1.5rem; font-weight: bold;">MinSU's Job Section</h1>
</a>

            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0">
                    <a href="/" class="nav-item nav-link active">Home</a>
                    <a href="about" class="nav-item nav-link">About</a>
                    <a href="jobDetails" class="nav-item nav-link">Job Detail</a>
                    <a href="category" class="nav-item nav-link">Job Category</a>
                    <a href="contact" class="nav-item nav-link">Contact</a>
                    <a href="testimonial" class="nav-item nav-link">Testimonial</a>
                </div>
            </div>
        </nav>
        <!-- Navbar End -->

        <!-- Search Start -->
        <div class="container-fluid bg-primary mb-5 wow fadeIn" data-wow-delay="0.1s" style="padding: 35px;">
            <div class="container">
                <div class="row g-2">
                    <div class="col-md-10">
                        <div class="row g-2">
                            <div class="col-md-4">
                                <input type="text" class="form-control border-0" placeholder="Keyword" />
                            </div>
                            <div class="col-md-4">
                                <select class="form-select border-0">
                                    <option selected>Category</option>
                                    <option value="1">Category 1</option>
                                    <option value="2">Category 2</option>
                                    <option value="3">Category 3</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <select class="form-select border-0">
                                    <option selected>Location</option>
                                    <option value="1">Location 1</option>
                                    <option value="2">Location 2</option>
                                    <option value="3">Location 3</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <button class="btn btn-dark border-0 w-100">Search</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Search End -->


                <!-- Category Start -->
    <div class="container-xxl py-5">
            <div class="container">
                <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Explore By Category</h1>
                <div class="row g-4" >
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
    <a class="cat-item rounded p-4" href="/information/id" style="position: relative; text-align: center; text-decoration: none; color: inherit; display: block;">
        <div style="width: 70px; height: 70px; background-color: #3498db; border-radius: 50%; margin: 0 auto; display: flex; align-items: center; justify-content: center; margin-bottom: 10px;">
            <img src="../../public/img/college logo/ccs.jpg" alt="Image" style="border-radius: 50%; max-width: 100%; height: auto;">
        </div>
        <h6 class="mb-3">Information & Technology</h6>
        <p class="mb-0"></p>
    </a>
</div>

<div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
    <a class="cat-item rounded p-4" href="/businessjobcategory" style="position: relative; text-align: center; text-decoration: none; color: inherit; display: block;">
        <div style="width: 70px; height: 70px; background-color: #3498db; border-radius: 50%; margin: 0 auto; display: flex; align-items: center; justify-content: center; margin-bottom: 10px;">
            <img src="../../public/img/college logo/cbm.png" alt="Image" style="border-radius: 50%; max-width: 100%; height: auto;">
        </div>
        <h6 class="mb-3">Business and Management</h6>
        <p class="mb-0"></p>
    </a>
</div>

<div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
    <a class="cat-item rounded p-4" 
    style="position: relative; text-align: center; text-decoration: none; color: inherit; display: block;">
        <div style="width: 70px; height: 70px; background-color: #3498db; border-radius: 50%; margin: 0 auto; display: flex; align-items: center; justify-content: center; margin-bottom: 10px;">
            <img src="../../public/img/college logo/cte.jpg" alt="Image" style="border-radius: 50%; max-width: 100%; height: auto;">
        </div>
        <h6 class="mb-3">Teaching & Education</h6>
        <p class="mb-0"></p>
    </a>
</div>
                 
<div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
    <a class="cat-item rounded p-4"  style="position: relative; text-align: center; text-decoration: none; color: inherit; display: block;">
        <div style="width: 70px; height: 70px; background-color: #3498db; border-radius: 50%; margin: 0 auto; display: flex; align-items: center; justify-content: center; margin-bottom: 10px;">
            <img src="../../public/img/college logo/crim.jpg" alt="Image" style="border-radius: 50%; max-width: 100%; height: auto;">
        </div>
        <h6 class="mb-3">Criminology & Justice</h6>
        <p class="mb-0"></p>
    </a>
</div>
                  
<div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
    <a class="cat-item rounded p-4" href="/psychology/id" style="position: relative; text-align: center; text-decoration: none; color: inherit; display: block;">
        <div style="width: 70px; height: 70px; background-color: #3498db; border-radius: 50%; margin: 0 auto; display: flex; align-items: center; justify-content: center; margin-bottom: 10px;">
            <img src="../../public/img/college logo/cas.png" alt="Image" style="border-radius: 50%; max-width: 100%; height: auto;">
        </div>
        <h6 class="mb-3">English & Psychology</h6>
        <p class="mb-0"></p>
    </a>
</div>
<div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
    <a class="cat-item rounded p-4" href="/fashion/id" style="position: relative; text-align: center; text-decoration: none; color: inherit; display: block;">
        <div style="width: 70px; height: 70px; background-color: #3498db; border-radius: 50%; margin: 0 auto; display: flex; align-items: center; justify-content: center; margin-bottom: 10px;">
            <img src="../../public/img/college logo/BTVTED.jpg" alt="Image" style="border-radius: 50%; max-width: 100%; height: auto;">
        </div>
        <h6 class="mb-3">Fashion & Garments</h6>
        <p class="mb-0"></p>
    </a>
</div>

<div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
    <a class="cat-item rounded p-4" href="/drafting/id" style="position: relative; text-align: center; text-decoration: none; color: inherit; display: block;">
        <div style="width: 70px; height: 70px; background-color: #3498db; border-radius: 50%; margin: 0 auto; display: flex; align-items: center; justify-content: center; margin-bottom: 10px;">
            <img src="../../public/img/college logo/BTVTED.jpg" alt="Image" style="border-radius: 50%; max-width: 100%; height: auto;">
        </div>
        <h6 class="mb-3">Drafting</h6>
        <p class="mb-0"></p>
    </a>
</div>

<div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
    <a class="cat-item rounded p-4" href="/food/id" style="position: relative; text-align: center; text-decoration: none; color: inherit; display: block;">
        <div style="width: 70px; height: 70px; background-color: #3498db; border-radius: 50%; margin: 0 auto; display: flex; align-items: center; justify-content: center; margin-bottom: 10px;">
            <img src="../../public/img/college logo/BTVTED.jpg" alt="Image" style="border-radius: 50%; max-width: 100%; height: auto;">
        </div>
        <h6 class="mb-3">Foode & Services</h6>
        <p class="mb-0"></p>
    </a>
</div>

<div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
    <a class="cat-item rounded p-4" href="/automotive/id" style="position: relative; text-align: center; text-decoration: none; color: inherit; display: block;">
        <div style="width: 70px; height: 70px; background-color: #3498db; border-radius: 50%; margin: 0 auto; display: flex; align-items: center; justify-content: center; margin-bottom: 10px;">
            <img src="../../public/img/college logo/BTVTED.jpg" alt="Image" style="border-radius: 50%; max-width: 100%; height: auto;">
        </div>
        <h6 class="mb-3">Automotive</h6>
        <p class="mb-0"></p>
    </a>
</div>
<div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
    <a class="cat-item rounded p-4" href="/tech/id" style="position: relative; text-align: center; text-decoration: none; color: inherit; display: block;">
        <div style="width: 70px; height: 70px; background-color: #3498db; border-radius: 50%; margin: 0 auto; display: flex; align-items: center; justify-content: center; margin-bottom: 10px;">
            <img src="../../public/img/college logo/BTVTED.jpg" alt="Image" style="border-radius: 50%; max-width: 100%; height: auto;">
        </div>
        <h6 class="mb-3">Electronics & Electrical Tech</h6>
        <p class="mb-0"></p>
    </a>
</div>
<div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
    <a class="cat-item rounded p-4" href="/home/id" style="position: relative; text-align: center; text-decoration: none; color: inherit; display: block;">
        <div style="width: 70px; height: 70px; background-color: #3498db; border-radius: 50%; margin: 0 auto; display: flex; align-items: center; justify-content: center; margin-bottom: 10px;">
            <img src="../../public/img/college logo/BTVTED.jpg" alt="Image" style="border-radius: 50%; max-width: 100%; height: auto;">
        </div>
        <h6 class="mb-3">Home Economics</h6>
        <p class="mb-0"></p>
    </a>
</div>

<div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
    <a class="cat-item rounded p-4" href="/industrial/id" style="position: relative; text-align: center; text-decoration: none; color: inherit; display: block;">
        <div style="width: 70px; height: 70px; background-color: #3498db; border-radius: 50%; margin: 0 auto; display: flex; align-items: center; justify-content: center; margin-bottom: 10px;">
            <img src="../../public/img/college logo/BTVTED.jpg" alt="Image" style="border-radius: 50%; max-width: 100%; height: auto;">
        </div>
        <h6 class="mb-3">Industrial Arts</h6>
        <p class="mb-0"></p>
    </a>
</div>
                </div>
            </div>
        </div>


        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                        <div class="row g-0 about-bg rounded overflow-hidden">
                            <div class="col-6 text-start">
                                <img class="img-fluid w-100" src="../assets/img/about-1.jpg">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid" src="../assets/img/about-2.jpg" style="width: 85%; margin-top: 15%;">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid" src="../assets/img/about-3.jpg" style="width: 85%;">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid w-100" src="../assets/img/about-4.jpg">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                        <h1 class="mb-4">We Help To Get The Best Job And Find A Talent</h1>
                        <td>{{ info.about }}</td>
                        <a class="btn btn-primary py-3 px-5 mt-3" href="">Read More</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->
 <!-- Footer Start -->
<div class="container-fluid bg-dark text-white-50 footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
                <div class="container py-5">
                    <div class="row g-5">
                        <div class="col-lg-3 col-md-6">
    <img src="../../public/img/icons/minsu.jpg" alt="Mindoro State University Logo" class="img-fluid rounded-circle mb-4" style="max-width: 100%; height: auto;">
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
                        <div class="col-lg-3 col-md-6">
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
                        </div>
                    </div>
                    
                </div>
            </div>
            <!-- Footer End -->

</template>
<!-- <style>
@import'../../assets/css/bootstrap.min.css';
@import'../../assets/css/style.css';
</style> -->
<script>
import axios from 'axios';
export default{
       data(){
           return{
               info:""
           }
       },
       mounted(){
           this.getWebInfo();
       },
       methods:{
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

