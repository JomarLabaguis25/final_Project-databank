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
                        <li class="active">
<a href="/orgtable">
<i class="fas fa-shopping-basket"></i>
<span class="bot-line"></span>Table
</a>
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
                    <a class="logo" href="index.html">
                        <img src="images/icon/logo-white.png" alt="CoolAdmin" />
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
<!-- DATA TABLE-->
<section class="p-t-20">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="title-5 m-b-35">data table</h3>
                        <div class="table-responsive table-responsive-data2">
                            <table style="width: 100%; border-collapse: collapse; margin-top: 20px; border: 1px solid #ddd;">
<thead>
<tr style="background-color: #f2f2f2;">
<th style="padding: 12px; text-align: center; border: 1px solid #ddd;">ID</th>
<th style="padding: 12px; text-align: center; border: 1px solid #ddd;">Event Name</th>
<th style="padding: 12px; text-align: center; border: 1px solid #ddd;">Description</th>
<th style="padding: 12px; text-align: center; border: 1px solid #ddd;">Date</th>
<th style="padding: 12px; text-align: center; border: 1px solid #ddd;">Org Name</th>
<th style="padding: 12px; text-align: center; border: 1px solid #ddd;">Status</th>
<th style="padding: 12px; text-align: center; border: 1px solid #ddd;">Action</th>
</tr>
</thead>
<tbody v-for="info in info" :key="info.id">
<tr>
<td style="padding: 12px; border: 1px solid #ddd;">{{ info.id }}</td>
<td style="padding: 12px; border: 1px solid #ddd;">{{ info.eventName }}</td>
<td style="padding: 12px; border: 1px solid #ddd;">{{ info.eventDesc }}</td>
<td style="padding: 12px; border: 1px solid #ddd;">{{ info.eventDate }}</td>
<td style="padding: 12px; border: 1px solid #ddd;">{{ info.OrgName }}</td>
<td style="padding: 12px; border: 1px solid #ddd;">{{ info.status }}</td>
<td style="padding: 12px; border: 1px solid #ddd;">
    <button class="btn btn-primary" type="submit" @click.prevent="approveRequest">Approve</button>
    <span style="margin-left: 5px; margin-right: 5px;"></span> 
    <button class="btn btn-danger" @click="deleteTask(info.id)">Decline</button>
</td>
</tr>
</tbody>
</table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END DATA TABLE-->
</template>


<script>
import axios from 'axios';

export default {
data() {
return {
info: [],
};
},
created() {
this.getOrgData();
},
methods: {
async getOrgData() {
try {
const response = await axios.get('getOrgData');
this.info = response.data;
} catch (error) {
console.log(error);
}
},
async approveRequest() {
try {
// Assuming 'id' is the unique identifier for the record
const idToUpdate = this.info[0].id; // Change this based on your data structure

const response = await axios.post('approveRequest', { id: idToUpdate, status: 'Approved' });

// Assuming the server responds with the updated data
this.info = response.data;

console.log('Request Approved!');
} catch (error) {
console.log(error);
}
},
},
};
</script>