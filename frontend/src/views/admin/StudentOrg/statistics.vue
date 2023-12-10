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
                                        <i class="fas fa-tachometer-alt"></i>Dashboard
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
                                        <span class="bot-line"></span>Statistics</a>
                                </li>
                                <li>
                                    <a href="/event_Calendar">
                                        <span class="bot-line"></span>University Student Government</a>
                                </li>
                                <li>
                                    <a href="/insertEvent">
                                        <span class="bot-line"></span>Add Eventt</a>
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
    
                <!-- STATISTIC CHART-->
                <section class="statistic-chart">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <h3 class="title-5 m-b-35">statistics</h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-lg-4">
                                <!-- CHART-->
                                <div class="statistic-chart-1">
                                    <h3 class="title-3 m-b-30">chart</h3>
                                    <div class="chart-wrap">
                                        <canvas id="widgetChart5"></canvas>
                                    </div>
                                    <div class="statistic-chart-1-note">
                                        <span class="big">10,368</span>
                                        <span>/ 16220 items sold</span>
                                    </div>
                                </div>
                                <!-- END CHART-->
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <!-- TOP CAMPAIGN-->
                                <div class="top-campaign">
                                    <h3 class="title-3 m-b-30">Top Performing Organizations</h3>
                                    <div class="table-responsive" style="text-align: center;">
                                        <table class="table table-top-campaign" style="margin: 0 auto; width: auto;">
                                            <tbody>
                                                <tr>
                                                    <td>1. LEAD</td>
                                                </tr>
                                                <tr>
                                                    <td>2. Ala-GAD</td>
                                                </tr>
                                                <tr>
                                                    <td>3. LEGITS</td>
                                                </tr>
                                                <tr>
                                                    <td>4. The Veritas</td>
                                                </tr>
                                                <tr>
                                                    <td>5. Baanaw</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- END TOP CAMPAIGN-->
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <!-- CHART PERCENT-->
                                <div class="chart-percent-2">
                                    <h3 class="title-3 m-b-30">chart by %</h3>
                                    <div class="chart-wrap">
                                        <canvas id="percent-chart2"></canvas>
                                        <div id="chartjs-tooltip">
                                            <table></table>
                                        </div>
                                    </div>
                                    <div class="chart-info">
                                        <div class="chart-note">
                                            <span class="dot dot--blue"></span>
                                            <span>products</span>
                                        </div>
                                        <div class="chart-note">
                                            <span class="dot dot--red"></span>
                                            <span>Services</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- END CHART PERCENT-->
                            </div>
                        </div>
                    </div>
                </section>
                <!-- END STATISTIC CHART-->
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
    
        </div>

    
    </body>
    
    </template>
    <style>
    @import'../../../assets/admin/css/bootstrap-datetimepicker.min.css';
    @import'../../../assets/admin/css/font-face.css';
    @import'../../../assets/admin/css/theme.css';
    </style>