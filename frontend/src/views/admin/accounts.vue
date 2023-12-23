<template>
    <body class="animsition">
                    <!-- HEADER DESKTOP-->
                    <header class="header-desktop3 d-none d-lg-block" style="background-color: darkgreen;">
                    <div class="section__content section__content--p35">
                        <div class="header3-wrap">
                            <a class="navbar-brand d-flex align-items-center text-center py-0 px-4 px-lg-5" href="/" style="text-decoration: none; color: #333; display: flex; align-items: center;">
                    <div style="margin-right: 10px;">
                        <div style="width: 40px; height: 40px; background-color: #3498db; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                            <img src="../../../public/img/college logo/osas.jpg" alt="Image" style="border-radius: 50%; max-width: 100%; height: auto;">
                        </div>
                    </div>
                    <h1 class="m-0 text-primary" style="font-size: 1rem; font-weight: bold;">OSAS</h1>
                </a>
                            <div class="header__navbar">
                                <ul class="list-unstyled">
                                    <li class="has-sub">
                                        <a href="#">
                                            <i class="fas fa-tachometer-alt"></i>Registered Account
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
    <li>
                                        <a href="/alumniAcc">
                                            <span class="bot-line"></span>Alumni</a>
                                    </li>
                                    <li>
                                        <a href="/chairsAcc">
                                            <span class="bot-line"></span>Chairperson</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="header__tool">
                            <div class="account-wrap">
                                <div class="account-item account-item--style2 clearfix js-item-menu">
                                    <div class="image">
                                        <img src="../../../public/img/icons/minsu.jpg" alt="MinSU" />
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
                <!-- About Start -->
                <div class="container-xxl py-5">
                <div class="container">
                    <div class="row g-5 align-items-center">
                        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                            <div class="row g-0 about-bg rounded overflow-hidden">
                                <div class="col-6 text-start">
                                    <img class="img-fluid w-100" src="../../assets/img/dis1.jpg">
                                </div>
                                <div class="col-6 text-start">
                                    <img class="img-fluid" src="../../assets/img/dis2.jpg" style="width: 85%; margin-top: 15%;">
                                </div>
                                <div class="col-6 text-end">
                                    <img class="img-fluid" src="../../assets/img/dis3.jpg" style="width: 85%;">
                                </div>
                                <div class="col-6 text-end">
                                    <img class="img-fluid w-100" src="../../assets/img/dis4.jpg">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                            <h1 class="mb-4">Fetched Accounts of the Users</h1>
                            <!-- <td>{{ info.about }}</td> -->
                            <a class="btn btn-primary py-3 px-5 mt-3" href="">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
                <!-- About End -->
    </body>
    </template>
   
    <!-- <script>
       import axios from 'axios';
       export default{
           data(){
               return{
                   info:""
               }
           },
           mounted(){
               this.getDis();
           },
           methods:{
               async getDis(){
                   try{
                       const a = await axios.get("getDis");
                       this.info = a.data;
                       console.log(a);
                   }catch(error){
                   console.log(error);
                   }
               }
           }
       }
       </script> -->