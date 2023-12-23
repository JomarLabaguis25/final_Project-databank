<template>
    <div class="page-wrapper">
                <!-- HEADER DESKTOP-->
                <header class="header-desktop3 d-none d-lg-block" style="background-color: darkgreen;">
                <div class="section__content section__content--p35">
                    <div class="header3-wrap">
                        <a class="navbar-brand d-flex align-items-center text-center py-0 px-4 px-lg-5" href="/" style="text-decoration: none; color: #333; display: flex; align-items: center;">
                <div style="margin-right: 10px;">
                    <div style="width: 40px; height: 40px; background-color: #3498db; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                        <img src="../../../../public/img/college logo/osas.jpg" alt="Image" style="border-radius: 50%; max-width: 100%; height: auto;">
                    </div>
                </div>
                <h1 class="m-0 text-primary" style="font-size: 1rem; font-weight: bold;">OSAS</h1>
            </a>
                        <div class="header__navbar">
                            <ul class="list-unstyled">
                                <li class="has-sub">
                                    <a href="#">
                                        <i class="fas fa-tachometer-alt"></i>Student Discipline
                                        <span class="bot-line"></span>
                                    </a>
                                    <ul class="header3-sub-list list-unstyled">
                                        <li>
                                            <a href="index1">Student Organization</a>
                                        </li>
                                        <li>
                                            <a href="index2">Job Placement</a>
                                        </li>
                                        <li>
                                            <a href="index3">Scholarship</a>
                                        </li>
                                        <li>
                                            <a href="index4">Student Discipline</a>
                                        </li>
                                        <li>
                                                <a href="accounts">Registered Account</a>
                                            </li>
                                    </ul>
                                </li>
                                <li class="has-sub">
    <a href="/infoSection">
        <i class="fas fa-copy"></i>
        <span class="bot-line"></span>Information Section</a>
</li>
<li>
                                    <a href="/handbook">
                                        <span class="bot-line"></span>Student Handbook</a>
                                </li>
                                <li class="active">
                                    <a href="/insertInformation">
                                        <span class="bot-line"></span>Add Information</a>
                                </li>
                            </ul>
                        </div>
                        <div class="header__tool">
                        <div class="account-wrap">
                            <div class="account-item account-item--style2 clearfix js-item-menu">
                                <div class="image">
                                    <img src="../../../../public/img/icons/minsu.jpg" alt="MinSU" />
                                </div>
                                <div class="content">
                                    <a class="js-acc-btn" href="#">MinSU</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </header>
            <!-- END HEADER DESKTOP-->

            <div class="background-container">
                <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 20px;">
    <a href="/index4" style="text-decoration: none; color: inherit; cursor: pointer; display: flex; align-items: center;">
        <span style="font-size: 18px; margin-right: 3px; cursor: pointer; font-weight: bold; background-color: grey; color: #fff; padding: 8px 12px; border-radius: 5px;">&larr;</span>
    </a>
    <h2 style="text-align: center; margin: 0;">Add Student Information</h2>
    <div style="width: 24px;"></div>
</div>
        <div class="container">
            <div class="formbold-form-wrapper">
                <div id="app">
                   
                </div>
            </div>
        </div>
    </div>
</div>
</template>
<style scoped>
.background-container {
    font-family: Arial, sans-serif;
    /* width: 100vw;
    height: 100vh;
    margin: 0 auto;
    position: absolute;
    top: 0;
    left: 0; */
    /* background-image: url('../../../../public/img/icons/minsu-bg2.jpg');
    background-position: center;
    background-size: cover; */
}

.container {
    display: flex;
    align-items: center;
    justify-content: center;
    height: 70vh;
}

.formbold-form-wrapper {
    background-color: rgba(255, 255, 255, 0.9);
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
    max-width: 350px;
    width: 80%;
    margin: 0 auto; /* Center the form horizontally */
}

.formbold-input-flex {
    display: flex;
    flex-direction: column;
    margin-bottom: 15px;
}

.formbold-form-label {
    font-weight: bold;
    color: darkgreen;
    margin-bottom: 5px;
}

.formbold-form-input {
    width: 100%;
    padding: 6px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.scrollable-form {
    max-height: calc(70vh - 140px); /* Adjust the max height as needed, considering other elements' height */
    overflow-y: auto;
}

@import'../../../assets/admin/css/bootstrap-datetimepicker.min.css';
@import'../../../assets/admin/css/font-face.css';
@import'../../../assets/admin/css/theme.css';
/* Add your additional styles as needed */
</style>
<!-- <script>
   import axios from 'axios';
   export default{
    data: {
            studentNumber: '',
            studentName: '',
            yearSection: '',
            collegeCourse: '',
            status: '' 
        },
        methods: {
        submitForm() {
            const formData = {
                studentNumber: this.studentNumber,
                studentName: this.studentName,
                yearSection: this.yearSection,
                collegeCourse: this.collegeCourse,
                status: this.status,
            };

            axios.post('/submit-form', formData)
                .then(response => {
                    console.log(response.data.message);
                })
                .catch(error => {
                    console.error('Error submitting form:', error);
                });
        }
    }
   }
   </script> -->
