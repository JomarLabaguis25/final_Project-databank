<template>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>University Event Calendar</title>
    </head>
    <body>
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
                                    <a href="/mainTable">
                                        <span class="bot-line"></span>Table</a>
                                </li>
                                <li>
                                    <a href="/stat">
                                        <span class="bot-line"></span>Statistics</a>
                                </li>
                                <li>
                                    <a href="/payrollsTable">
                                        <span class="bot-line"></span>Date of Payrolls</a>
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
    
<div style="font-family: Arial, sans-serif; margin: 20px;">
    <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 20px;">
    <a href="/index3" style="text-decoration: none; color: inherit; cursor: pointer;">
        <span style="font-size: 24px; margin-right: 10px; cursor: pointer; font-weight: bold;">&larr;</span>
    </a>
    <h2 style="text-align: center; margin: 0;">Date of Payrolls</h2>
    <div style="width: 24px;"></div>
</div>
<div style="display: flex; align-items: center; margin-left: auto;">
    <input type="text" style="padding: 5px; margin-right: 5px; margin-left: auto;" placeholder="Search...">
    <button style="padding: 5px; cursor: pointer;">Search</button>
</div>


    
        <table style="width: 100%; border-collapse: collapse; margin-top: 20px; border: 1px solid #ddd;">
    <thead>
        <tr style="background-color: #f2f2f2;">
            <th style="padding: 12px; text-align: center; border: 1px solid #ddd;">ID</th>
            <th style="padding: 12px; text-align: center; border: 1px solid #ddd;">Scholarship Name</th>
            <th style="padding: 12px; text-align: center; border: 1px solid #ddd;">Target Location</th>
            <th style="padding: 12px; text-align: center; border: 1px solid #ddd;">Partial Date</th>
            <th style="padding: 12px; text-align: center; border: 1px solid #ddd;">Status</th>
            <th style="padding: 12px; text-align: center; border: 1px solid #ddd;">Action</th>
        </tr>
    </thead>
    <tbody v-for="info in info" :key="info.id">
        <tr>
            <td style="padding: 12px; border: 1px solid #ddd;">{{ info.id }}</td>
            <td style="padding: 12px; border: 1px solid #ddd;">{{ info.SName }}</td>
            <td style="padding: 12px; border: 1px solid #ddd;">{{ info.location }}</td>
            <td style="padding: 12px; border: 1px solid #ddd;">{{ info.date }}</td>
            <td style="padding: 12px; border: 1px solid #ddd;"><span class="status--process">{{ info.status }}</span></td>
            <td style="padding: 12px; border: 1px solid #ddd;">
                <button class="btn btn-primary" @click="updateTask(info)">Update</button>

            </td>
        </tr>
    </tbody>
</table>
<div style="text-align: right;">
    <a href="/insertScholar" class="btn btn-secondary">
        Add
    </a>
</div>
</div>
    </body>
    </html>
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
    this.getPay();
  },
  methods: {
    async getPay() {
      try {
        const inf = await axios.get('getPay');
        this.info = inf.data;
      } catch (error) {
        console.log(error);
      }
    },
}
}
</script>
