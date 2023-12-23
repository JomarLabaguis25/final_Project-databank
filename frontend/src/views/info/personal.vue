<template>
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
                <li class="nav-item"><a href="category" class="nav-link">Job Category</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="about" id="menuDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        About
                    </a>
                    <ul class="dropdown-menu dropdown-menu-start" aria-labelledby="menuDropdown">
                        <li><a class="dropdown-item" href="testimonial">Testimonial</a></li>
                        <li><a class="dropdown-item" href="contact">Contact</a></li>
                       
                    </ul>
                </li>
                <button v-if="user" class="nav-item " style="background-color: lightgreen; border: none; color: white; padding: 10px 15px; text-align: center; text-decoration: none; display: inline-block; font-size: 16px; margin: 4px 2px; cursor: pointer;">
  {{user.Fullname}}
</button>
            </ul>
        </div>
    </div>
</nav>

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

<!-- profile start -->
<!-- User Information Form -->
<div class="container mt-4">
    <div class="row">
      <!-- User Photo Frame -->
      <div class="col-lg-2" style="text-align: center; display: flex; flex-direction: column; align-items: center;">
      <div style="border: 2px solid #333; border-radius: 50%; overflow: hidden; width: 80px; height: 80px; margin-bottom: 10px;">
          <!-- User Photo Here -->
          <img id="userPhoto" :src="user.ProfilePicture || 'path/to/user/photo.jpg'" alt="User Photo" style="width: 100%; height: 100%; object-fit: cover;">
      </div>

      <label for="fileInput" class="btn btn-primary" style="margin-bottom: 10px;">Change Photo</label>
      <input type="file" id="fileInput" style="display: none;" accept="image/*" @change="handleFileChange">
      <button @click="saveProfile" class="btn btn-success">Save</button>

      <button class="btn btn-danger" @click="openModal()">Logout</button>
      </div>

    <!-- User Information Form -->
      <div v-for="newss in news" :key="newss.id" style="max-width: 800px; margin: 0 auto; background-color: transparent; padding: 20px; border-radius: 8px; box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);">
    <!-- Personal Information -->
    <div style="display: flex; justify-content: space-between;">

        <!-- Personal Information -->
        <div style="width: 48%;">
            <h2 style="color: #333; margin-bottom: 10px;">Personal Information</h2>
            <div>
    <label style="display: block; margin-bottom: 8px;">Full Name:</label>
    <input v-model="newss.fullName" style="width: 100%; border: none; background-color: rgba(240, 240, 240, 0.8); padding: 8px; border-radius: 4px;" readonly>

    <label style="display: block; margin-top: 10px; margin-bottom: 8px;">Student Number:</label>
    <input v-model="newss.studentNumber" style="width: 100%; border: none; background-color: rgba(240, 240, 240, 0.8); padding: 8px; border-radius: 4px;" readonly>

    <label style="display: block; margin-top: 10px; margin-bottom: 8px;">Email:</label>
    <input v-model="newss.email" style="width: 100%; border: none; background-color: rgba(240, 240, 240, 0.8); padding: 8px; border-radius: 4px;" readonly>
  </div>
        </div>

        <!-- Educational Background -->
        <div style="width: 48%;">
            <h2 style="color: #333; margin-bottom: 10px;">Educational Background</h2>

            <label style="display: block; margin-bottom: 8px;">High School:</label>
            <input v-model="newss.hsSchool" style="width: 100%; border: none; background-color: rgba(240, 240, 240, 0.8); padding: 8px; border-radius: 4px;" readonly>

            <label style="display: block; margin-top: 10px; margin-bottom: 8px;">Year Graduated from High School:</label>
            <input v-model="newss.hsGradYear" style="width: 100%; border: none; background-color: rgba(240, 240, 240, 0.8); padding: 8px; border-radius: 4px;" readonly>

            <label style="display: block; margin-top: 10px; margin-bottom: 8px;">Senior High School:</label>
            <input v-model="newss.shsSchool" style="width: 100%; border: none; background-color: rgba(240, 240, 240, 0.8); padding: 8px; border-radius: 4px;" readonly>

            <label style="display: block; margin-top: 10px; margin-bottom: 8px;">Year Graduated from Senior High School:</label>
            <input v-model="newss.shsGradYear" style="width: 100%; border: none; background-color: rgba(240, 240, 240, 0.8); padding: 8px; border-radius: 4px;" readonly>

            <label style="display: block; margin-top: 10px; margin-bottom: 8px;">College:</label>
            <input v-model=" newss.collegeSchool" style="width: 100%; border: none; background-color: rgba(240, 240, 240, 0.8); padding: 8px; border-radius: 4px;" readonly>

            <label style="display: block; margin-top: 10px; margin-bottom: 8px;">Year Graduated from College:</label>
            <input v-model="newss.collegeGradYear" style="width: 100%; border: none; background-color: rgba(240, 240, 240, 0.8); padding: 8px; border-radius: 4px;" readonly>
        </div>
    </div>

    <!-- Job History -->
    <div style="margin-top: 20px;">
        <h2 style="color: #333; margin-bottom: 10px;">Job History</h2>

        <label style="display: block; margin-bottom: 8px;">Job Profile/Works:</label>
        <input v-model="newss.jobProfile" style="width: 100%; border: none; background-color: rgba(240, 240, 240, 0.8); padding: 8px; border-radius: 4px;" readonly>

        <label style="display: block; margin-top: 10px; margin-bottom: 8px;">Resume (PDF, DOC, DOCX):</label>
        <input v-model="newss.resume" style="width: 100%; border: none; background-color: rgba(240, 240, 240, 0.8); padding: 8px; border-radius: 4px;" readonly>
    </div>

    <!-- Edit Button -->
<!-- Edit Button -->
<div style="text-align: center; margin-top: 20px;">
  <router-link :to="{ name: 'edit-form', params: { id: newss.id } }">
    <button @click="confirmEditProfile(newss)">Edit</button>
  </router-link>
</div>



</div>

    </div>
  </div>

<!-- profile ends -->
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

</template>
<!-- <style>
@import'../../assets/css/bootstrap.min.css';
@import'../../assets/css/style.css';
</style> -->
<script>
  import axios from 'axios';

  export default {
    data() {
      return {
        news: "",
        info: "",
        categories: [],
        user: [],
        userId: null,
      };
    },
    mounted() {
      this.getWebInfo();
      this.getCategories();
      this.getprofile();

      // Close the modal if the user clicks outside of it
      window.onclick = (event) => {
        var modal = document.getElementById('logoutModal');
        if (event.target == modal) {
          this.closeModal();
        }
      };
    },
    created() {
      this.getprofile();
      // this.userId = localStorage.getItem('userId')
      //
      const storeduserId = localStorage.getItem('userId');
            if (storeduserId) {
            // Make an API call to your CI4 backend
            axios.get(`/getUserID/${storeduserId}`)
                .then(response => {
                this.user = response.data;
                })
                .catch(error => {
                console.error(error);
                });
            }

        //
    },
    mounted(){
      // Retrieve user ID from local storage

    },
    methods: {
      //
      handleFileChange(event) {
            const fileInput = event.target;
            const userPhoto = document.getElementById('userPhoto');

            const file = fileInput.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    userPhoto.src = e.target.result;
                };
                reader.readAsDataURL(file);
            }
        },
        saveProfile() {
            const formData = new FormData();
            formData.append('image', document.getElementById('fileInput').files[0]);

            // Assuming you have the user ID stored in local storage
            const userId = localStorage.getItem('userId');

            // Make an API call to update the profile picture
            axios.post(`user/updateProfilePicture?userId=${userId}`, formData, {
                headers: {
                    'Content-Type': 'multipart/form-data',
                },
            })
                .then(response => {
                    // Handle success, if needed
                    console.log(response.data);
                    window.location.reload();
                })
                .catch(error => {
                    // Handle error, if needed
                    console.error(error);
                });
        },
      //
      async getCategories() {
        try {
          const c = await axios.get('getcategories');
          this.categories = c.data;
        } catch (error) {
          console.error(error);
        }
      },
      async getWebInfo() {
        try {
          const a = await axios.get("getWebInfo");
          this.info = a.data;
          console.log(a);
        } catch (error) {
          console.error(error);
        }
      },
      async getprofile() {
        try {
          const response = await axios.get('getprofile');
          this.news = response.data;
          console.log(response);
        } catch (error) {
          console.error('Error fetching profile:', error);
        }
      },
      handleFileChange(event) {
        const fileInput = event.target;
        const userPhoto = document.getElementById('userPhoto');

        const file = fileInput.files[0];
        if (file) {
          const reader = new FileReader();
          reader.onload = function (e) {
            userPhoto.src = e.target.result;
          };
          reader.readAsDataURL(file);
        }
      },
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
        this.$router.push({ path: '/loginform' });

        // Close the modal or perform other actions (optional, depending on your needs)
        // this.closeModal();
      },
      confirmEditProfile(newss) {
        const isConfirmed = window.confirm("Are you sure you want to edit?");
    
        if (isConfirmed) {
          // Log the entire object for debugging
          console.log('User data to edit:', newss);

          // Use Vue Router to navigate to the edit form route
          this.$router.push({ name: 'edit-form', params: { id: newss.id } });
        } else {
          // User canceled the edit
          // You can add additional logic or feedback if needed
        }
      },
      editProfile() {
        // Perform any edit profile logic here

        // Use Vue Router for navigation
        this.$router.push('/EditProfileForm');
      },
      redirectToeditprofile(newssId) {
        // Use Vue Router to navigate to the edit form route with the newss ID
        this.$router.push({ name: 'edit-form', params: { id: newssId } });
      },
    }
  }
</script>
