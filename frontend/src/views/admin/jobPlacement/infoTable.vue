<template>
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
                    <i class="fas fa-tachometer-alt"></i>Job Placement
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
                <a href="">
                    <span class="bot-line"></span>Table</a>
                    <ul class="header3-sub-list list-unstyled">
                    <li>
                        <a href="/jobTable">Job Table</a>
                    </li>
                   
                    <li>
                        <a href="/inquireTable">Inquiries</a>
                    </li>
                </ul>
            </li>
            <li>
                <li class="active">
                <a href="/infoTable">
                    <span class="bot-line"></span>Web Information</a>
            </li>
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
                <div style="width: 40px; height: 40px; background-color: #3498db; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
        <img src="../../../../public/img/college logo/osas.jpg" alt="Image" style="border-radius: 50%; max-width: 100%; height: auto;">
    </div>
    <h1 class="m-0 text-primary" style="font-size: 1rem; font-weight: bold;">OSAS</h1>

                <button class="hamburger hamburger--slider" type="button">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>
    <nav class="navbar-mobile">
        <div class="container-fluid">
            <ul class="navbar-mobile__list list-unstyled">
                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                    <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                        <li>
                            <a href="index.html">Dashboard 1</a>
                        </li>
                        <li>
                            <a href="index2.html">Dashboard 2</a>
                        </li>
                        <li>
                            <a href="index3.html">Dashboard 3</a>
                        </li>
                        <li>
                            <a href="index4.html">Dashboard 4</a>
                        </li>
                    </ul>
                </li>
                <li class="has-sub">
                <a href="">
                    <span class="bot-line"></span>Table</a>
                    <ul class="header3-sub-list list-unstyled">
                    <li>
                        <a href="/jobTable">Job Table</a>
                    </li>
                    <li>
                        <a href="/process">Processing Table</a>
                    </li>
                    <li>
                        <a href="forget-pass.html">Forget Password</a>
                    </li>
                </ul>
            </li>
            <li class="has-sub active">
                <li>
                <a href="/infoTable">
                    <span class="bot-line"></span>Web Information</a>
            </li>
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
    </nav>
</header>
<!-- END HEADER MOBILE -->
<div class="col-md-12">
                        <!-- DATA TABLE -->
                        <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 20px;">
<a href="/index2" style="text-decoration: none; color: inherit; cursor: pointer;">
<span style="font-size: 24px; margin-right: 10px; cursor: pointer; font-weight: bold;">&larr;</span>
</a>
<h2 style="text-align: center; margin-top: 20px;">Website Information Table</h2>
<div style="width: 24px;"></div>
</div>
                        <div class="table-responsive table-responsive-data2">
                            <table class="table table-data2">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>About</th>
                                        <th>Address</th>
                                        <th>Contact</th>
                                        <th>Email</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="info in info" :key="info.id" class="tr-shadow">
                                        <td>{{ info.id }}</td>
                                        <td>{{ info.about }}</td>
                                        <td>{{ info.address }}</td>
                                        <td>{{ info.contact }}</td>
                                        <td>{{ info.email }}</td>
                                        <td>
<button class="btn btn-primary mr-2" @click="updateTask(info)">Update</button>
<button class="btn btn-danger" @click="deleteTask(info.id)">Delete</button>
</td>

                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- END DATA TABLE -->
                    </div>
</template>
<style>
@import'../../../assets/admin/css/bootstrap-datetimepicker.min.css';
@import'../../../assets/admin/css/font-face.css';
@import'../../../assets/admin/css/theme.css';
</style>
<script>
import axios from 'axios'
export default {
data() {
    return {
        info: [],
    }
},
created() {
    this.getInfo();
},
methods: {
    async getInfo() {
        try {
            const inf = await axios.get('getWeb');
            this.info = inf.data;
        }
        catch (error) {
            console.log(error);
        }
    },
    async deleteData(id) {
try {
await axios.delete(`deleteData/${id}`)
this.getInfo()
} catch (error) {
console.log(error)
}
},
async updateData(id) {
try {
} catch (error) {
console.log(error)
}
},
async insertData() {
try {
const data = { name: this.name, email: this.email }
await axios.post('addData', data)
this.getInfo()
this.name = null
this.email = null
} catch (error) {
console.log(error)
}
},
}
}
</script>