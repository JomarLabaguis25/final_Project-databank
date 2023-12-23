<template>

    <head>
        <!-- Required meta tags-->
    
        <!-- Title Page-->
        <title>Dashboard 3</title>
    
    </head>
    
    <body class="animation">
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
                                        <i class="fas fa-tachometer-alt"></i>Student Organization
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
                                    <a href="/orgtable">
                                        <i class="fas fa-shopping-basket"></i>
                                        <span class="bot-line"></span>Table</a>
                                </li>
                                <li>
                                    <a href="/event_Calendar">
                                        <span class="bot-line"></span>University Student Government</a>
                                </li>
                                <li>
                                    <a href="/insertEvent">
                                        <span class="bot-line"></span>Add Event</a>
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
    
            <!-- HEADER MOBILE-->
            <header class="header-mobile header-mobile-2 d-block d-lg-none">
                <div class="header-mobile__bar">
                    <div class="container-fluid">
                        <div class="header-mobile-inner">
                            <a class="navbar-brand d-flex align-items-center text-center py-0 px-4 px-lg-5" href="/" style="text-decoration: none; color: #333; display: flex; align-items: center;">
                <div style="margin-right: 10px;">
                    <div style="width: 70px; height: 70px; background-color: #3498db; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                        <img src="../../../../public/img/college logo/osas.jpg" alt="Image" style="border-radius: 50%; max-width: 100%; height: auto;">
                    </div>
                </div>
                <h1 class="m-0 text-primary" style="font-size: 1.5rem; font-weight: bold;">OSAS</h1>
            </a>
                            <button class="hamburger hamburger--slider" type="button">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
            </header>
            <!-- END HEADER MOBILE -->
    
            <!-- PAGE CONTENT-->
            <div class="page-content--bgf7">
                <!-- STATISTIC-->
                <section class="statistic statistic2">
                    <div class="container">
                        <div class="row g-4">
                            <div class="container-xxl py-5">
            <div class="container">
                <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Minordo State University Students Organization List</h1>
                <!-- <select v-model="selectedCategory"> -->
                <div class="row g-4">
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
    <a class="cat-item rounded p-4" href="/lead1" style="position: relative; text-align: center; text-decoration: none; color: inherit; display: block;">
        <div style="width: 70px; height: 70px; background-color: #3498db; border-radius: 50%; margin: 0 auto; display: flex; align-items: center; justify-content: center; margin-bottom: 10px;">
            <img src="../../../assets/img/lead.jpg" alt="Image" style="border-radius: 50%; max-width: 100%; height: auto;">
        </div>
        <h6 class="mb-3">LEAD</h6>
        <p class="mb-0"></p>
    </a>
</div>
<div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
    <a class="cat-item rounded p-4" href="/teatro1" style="position: relative; text-align: center; text-decoration: none; color: inherit; display: block;">
        <!-- Circular frame with image -->
        <div style="width: 70px; height: 70px; background-color: #3498db; border-radius: 50%; margin: 0 auto; display: flex; align-items: center; justify-content: center; margin-bottom: 10px;">
            <img src="../../../assets/img/teatro.jpg" alt="Image" style="border-radius: 50%; max-width: 100%; height: auto;">
        </div>
        <h6 class="mb-3">Teatro Minsu</h6>
        <p class="mb-0"></p>
    </a>
</div>
<div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
    <a class="cat-item rounded p-4" href="/turista1" style="position: relative; text-align: center; text-decoration: none; color: inherit; display: block;">
        <!-- Circular frame with image -->
        <div style="width: 70px; height: 70px; background-color: #3498db; border-radius: 50%; margin: 0 auto; display: flex; align-items: center; justify-content: center; margin-bottom: 10px;">
            <img src="../../../assets/img/turista.jpg" alt="Image" style="border-radius: 50%; max-width: 100%; height: auto;">
        </div>
        <h6 class="mb-3">Turista</h6>
        <p class="mb-0"></p>
    </a>
</div>
<div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
    <a class="cat-item rounded p-4" href="/veritas1" style="position: relative; text-align: center; text-decoration: none; color: inherit; display: block;">
        <!-- Circular frame with image -->
        <div style="width: 70px; height: 70px; background-color: #3498db; border-radius: 50%; margin: 0 auto; display: flex; align-items: center; justify-content: center; margin-bottom: 10px;">
            <img src="../../../assets/img/veritas.jpg" alt="Image" style="border-radius: 50%; max-width: 100%; height: auto;">
        </div>
        <h6 class="mb-3">The Veritas</h6>
        <p class="mb-0"></p>
    </a>
</div>
<div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
    <a class="cat-item rounded p-4" href="/legits1" style="position: relative; text-align: center; text-decoration: none; color: inherit; display: block;">
        <!-- Circular frame with image -->
        <div style="width: 70px; height: 70px; background-color: #3498db; border-radius: 50%; margin: 0 auto; display: flex; align-items: center; justify-content: center; margin-bottom: 10px;">
            <img src="../../../assets/img/legits.jpg" alt="Image" style="border-radius: 50%; max-width: 100%; height: auto;">
        </div>
        <h6 class="mb-3">LEGITS</h6>
        <p class="mb-0"></p>
    </a>
</div>
<div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
    <a class="cat-item rounded p-4" href="/samfil1" style="position: relative; text-align: center; text-decoration: none; color: inherit; display: block;">
        <!-- Circular frame with image -->
        <div style="width: 70px; height: 70px; background-color: #3498db; border-radius: 50%; margin: 0 auto; display: flex; align-items: center; justify-content: center; margin-bottom: 10px;">
            <img src="../../../assets/img/samfil.jpg" alt="Image" style="border-radius: 50%; max-width: 100%; height: auto;">
        </div>
        <h6 class="mb-3">Samahang Filipino</h6>
        <p class="mb-0"></p>
    </a>
</div>
<div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
    <a class="cat-item rounded p-4" href="/buklod1" style="position: relative; text-align: center; text-decoration: none; color: inherit; display: block;">
        <!-- Circular frame with image -->
        <div style="width: 70px; height: 70px; background-color: #3498db; border-radius: 50%; margin: 0 auto; display: flex; align-items: center; justify-content: center; margin-bottom: 10px;">
            <img src="../../../assets/img/buklod.jpg" alt="Image" style="border-radius: 50%; max-width: 100%; height: auto;">
        </div>
        <h6 class="mb-3">Buklod</h6>
        <p class="mb-0"></p>
    </a>
</div>
<div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
    <a class="cat-item rounded p-4" href="/sikada1" style="position: relative; text-align: center; text-decoration: none; color: inherit; display: block;">
        <!-- Circular frame with image -->
        <div style="width: 70px; height: 70px; background-color: #3498db; border-radius: 50%; margin: 0 auto; display: flex; align-items: center; justify-content: center; margin-bottom: 10px;">
            <img src="../../../assets/img/sikada.jpg" alt="Image" style="border-radius: 50%; max-width: 100%; height: auto;">
        </div>
        <h6 class="mb-3">Sikada Chorale</h6>
        <p class="mb-0"></p>
    </a>
</div>
<div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
    <a class="cat-item rounded p-4" href="/baanaw1" style="position: relative; text-align: center; text-decoration: none; color: inherit; display: block;">
        <!-- Circular frame with image -->
        <div style="width: 70px; height: 70px; background-color: #3498db; border-radius: 50%; margin: 0 auto; display: flex; align-items: center; justify-content: center; margin-bottom: 10px;">
            <img src="../../../assets/img/baanaw.jpg" alt="Image" style="border-radius: 50%; max-width: 100%; height: auto;">
        </div>
        <h6 class="mb-3">BAANAW Dance Troupe</h6>
        <p class="mb-0"></p>
    </a>
</div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
    <a class="cat-item rounded p-4" href="/gad1" style="position: relative; text-align: center; text-decoration: none; color: inherit; display: block;">
        <!-- Circular frame with image -->
        <div style="width: 70px; height: 70px; background-color: #3498db; border-radius: 50%; margin: 0 auto; display: flex; align-items: center; justify-content: center; margin-bottom: 10px;">
            <img src="../../../assets/img/gad.jpg" alt="Image" style="border-radius: 50%; max-width: 100%; height: auto;">
        </div>
        <h6 class="mb-3">Ala-GAD Advocates</h6>
        <p class="mb-0"></p>
    </a>
</div>
<div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
    <a class="cat-item rounded p-4" href="/linguistic1" style="position: relative; text-align: center; text-decoration: none; color: inherit; display: block;">
        <!-- Circular frame with image -->
        <div style="width: 70px; height: 70px; background-color: #3498db; border-radius: 50%; margin: 0 auto; display: flex; align-items: center; justify-content: center; margin-bottom: 10px;">
            <img src="../../../assets/img/linguistic.jpg" alt="Image" style="border-radius: 50%; max-width: 100%; height: auto;">
        </div>
        <h6 class="mb-3">Linguistic Circle</h6>
        <p class="mb-0"></p>
    </a>
</div>
<div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
    <a class="cat-item rounded p-4" href="/eng1" style="position: relative; text-align: center; text-decoration: none; color: inherit; display: block;">
        <!-- Circular frame with image -->
        <div style="width: 70px; height: 70px; background-color: #3498db; border-radius: 50%; margin: 0 auto; display: flex; align-items: center; justify-content: center; margin-bottom: 10px;">
            <img src="../../../assets/img/eng-thusiast.jpg" alt="Image" style="border-radius: 50%; max-width: 100%; height: auto;">
        </div>
        <h6 class="mb-3">Eng-Thusiast</h6>
        <p class="mb-0"></p>
    </a>
</div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </section>

    </div>

        <!-- Category End -->
                                                </div>
                    <div>
                <!-- COPYRIGHT-->
                <section class="p-t-60 p-b-20">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- END COPYRIGHT-->
            </div>
    

    
    </body>
    
    </template>
    <style>
    @import'../../../assets/admin/css/bootstrap-datetimepicker.min.css';
    @import'../../../assets/admin/css/font-face.css';
    @import'../../../assets/admin/css/theme.css';
    </style>
   
