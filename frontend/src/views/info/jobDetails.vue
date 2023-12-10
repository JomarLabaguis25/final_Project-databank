<template>
    <body>
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
            <a class="navbar-brand d-flex align-items-center text-center py-0 px-4 px-lg-5" href="/" style="text-decoration: none; color: #333; display: flex; align-items: center;">
    <img src="../../../public/img/icons/minsu.jpg" alt="MinSU's Job Section Logo" class="logo-img" style="max-height: 40px; max-width: 100%; margin-right: 10px;">
    <h1 class="m-0 text-primary" style="font-size: 1.5rem; font-weight: bold;">MinSU's Job Section</h1>
</a>

            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0">
                    <a href="/" class="nav-item nav-link ">Home</a>
                    <a href="about" class="nav-item nav-link">About</a>
                    <a href="jobDetails" class="nav-item nav-link active">Job Detail</a>
                    <a href="category" class="nav-item nav-link">Job Category</a>
                    <a href="contact" class="nav-item nav-link">Contact</a>
                    <a href="testimonial" class="nav-item nav-link">Testimonial</a>
                </div>
            </div>
        </nav>
        <!-- Navbar End -->
          <!-- Header End -->
          <div class="container-xxl py-5 bg-dark page-header mb-5">
            <div class="container my-5 pt-5 pb-4">
                <h1 class="display-3 text-white mb-3 animated slideInDown">Job Details</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb text-uppercase">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Job Details</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- Header End -->
    
    
            <!-- Job Detail Start -->
            <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="container">
                    <div class="row gy-5 gx-4">
                        <div class="col-lg-8">
                            <div class="d-flex align-items-center mb-5">
                                <img class="flex-shrink-0 img-fluid border rounded" src="../../assets/img/com-logo-2.jpg" alt="" style="width: 80px; height: 80px;">
                                <div class="text-start ps-4">
                                    <h3 class="mb-3">{{ news.jobName}}</h3>
                                    <span class="text-truncate me-3"><i class="fa fa-map-marker-alt text-primary me-2"></i>{{ news.jobLocation }}</span>
                                    <span class="text-truncate me-3"><i class="far fa-clock text-primary me-2"></i>{{ news.JobNature }}</span>
                                    <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-primary me-2"></i>{{ news.jobSalary }}</span>
                                </div>
                            </div>
    
                            <div class="mb-5">
                                <h4 class="mb-4">Job Description</h4>
                                <p>{{ news.jobDescription }}</p>
                                <br>
                                <h4 class="mb-4">Responsibility</h4>
                                <p>{{ news.responsibility }}</p>
                                <br>
                                <h4 class="mb-4">Job Qualification</h4>
                                <p>{{ news.jobQualification }}</p>
                            </div>
            
                            <div style="max-width: 500px; margin: auto; text-align: center;">
    <h4 class="mb-4">Inquire For The Job</h4>
    <form @submit.prevent="submitForm">
    <div class="row g-3">
      <div class="col-12 col-sm-6">
        <input v-model="formData.name" type="text" class="form-control" placeholder="Your Name" required>
      </div>
      <div class="col-12 col-sm-6">
        <input v-model="formData.email" type="email" class="form-control" placeholder="Your Email" required>
      </div>
      <div class="col-12 col-sm-6">
        <input v-model="formData.address" type="text" class="form-control" placeholder="Address" required>
      </div>
      <div class="col-12 col-sm-6">
        <input v-model="formData.yearGraduated" type="text" class="form-control" placeholder="Year Graduated" required>
      </div>
      <div class="col-12">
        <textarea v-model="formData.coverLetter" class="form-control" rows="5" placeholder="Cover letter" required></textarea>
      </div>
      <div class="col-12">
        <button class="btn btn-primary w-100" type="submit">Inquire Now</button>
      </div>
    </div>
  </form>
</div>

                        </div>
            
                        <div class="col-lg-4">
                            <div class="bg-light rounded p-5 mb-4 wow slideInUp" data-wow-delay="0.1s">
                                <h4 class="mb-4">Job Summary</h4>
                                <p><i class="fa fa-angle-right text-primary me-2"></i>Vacancy: 123 Position</p>
                                <p><i class="fa fa-angle-right text-primary me-2"></i>Job Nature:  {{ news.JobNature }}</p>
                                <p><i class="fa fa-angle-right text-primary me-2"></i>{{ news.jobSalary }}</p>
                                <p><i class="fa fa-angle-right text-primary me-2"></i>{{ news.jobLocation }}</p>
                            </div>
                            <div class="bg-light rounded p-5 wow slideInUp" data-wow-delay="0.1s">
                                <h4 class="mb-4">Company Detail</h4>
                                <p>{{ news.companyDetails }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Job Detail End -->
    
    
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
    </body>
    </template>
    <style>
    @import'../../assets/css/bootstrap.min.css';
    @import'../../assets/css/style.css';
    </style>
<script>
import axios from 'axios';
export default {
  data() {
    return {
      news: "",
      info: "",
      formData: {
        name: "",
        email: "",
        address: "",
        yearGraduated: "",
        coverLetter: "",
      },
    };
  },
  mounted() {
    this.getNews();
    this.getWebInfo();
  },
  methods: {
    async getNews() {
      try {
        const response = await axios.get("getNews");
        this.news = response.data;
        console.log(response);
      } catch (error) {
        console.log(error);
      }
    },
    async getWebInfo() {
      try {
        const response = await axios.get("getWebInfo");
        this.info = response.data;
        console.log(response);
      } catch (error) {
        console.log(error);
      }
    },
    async submitForm() {
        try {
            const response = await axios.post('submitForm', this.formData);
            console.log(response.data); // You can handle the response as needed
            // Reset the form after successful submission
            this.formData = {
                name: "",
                email: "",
                address: "",
                yearGraduated: "",
                coverLetter: "",
            };
        } catch (error) {
            console.error(error);
            // Handle error if needed
        }
    },
  },
};
</script>