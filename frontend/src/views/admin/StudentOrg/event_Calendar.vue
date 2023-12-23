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
                                <li >
    <a href="/orgtable">
        <i class="fas fa-shopping-basket"></i>
        <span class="bot-line"></span>Table
    </a>
</li>
                                <li class="active">
                                    <a href="/event_calendar">
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
    
<div style="font-family: Arial, sans-serif; margin: 20px;">
    <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 20px;">
    <a href="/index1" style="text-decoration: none; color: inherit; cursor: pointer;">
        <span style="font-size: 24px; margin-right: 10px; cursor: pointer; font-weight: bold;">&larr;</span>
    </a>
    <h2 style="text-align: center; margin: 0;">University Event Calendar</h2>
    <div style="width: 24px;"></div>
</div>
    
        <table style="width: 100%; border-collapse: collapse; margin-top: 20px; border: 1px solid #ddd;">
    <thead>
        <tr style="background-color: #f2f2f2;">
            <th style="padding: 12px; text-align: center; border: 1px solid #ddd;">Date</th>
            <th style="padding: 12px; text-align: center; border: 1px solid #ddd;">Event Name</th>
            <th style="padding: 12px; text-align: center; border: 1px solid #ddd;">Event Description</th>
            <th style="padding: 12px; text-align: center; border: 1px solid #ddd;">Location</th>
            <th style="padding: 12px; text-align: center; border: 1px solid #ddd;">Status</th>
            <th style="padding: 12px; text-align: center; border: 1px solid #ddd;">Action</th>
        </tr>
    </thead>
    <tbody v-for="info in info" :key="info.id">
        <tr>
            <td style="padding: 12px; border: 1px solid #ddd;">{{ info.date }}</td>
            <td style="padding: 12px; border: 1px solid #ddd;">{{ info.event }}</td>
            <td style="padding: 12px; border: 1px solid #ddd;">{{ info.event_desc }}</td>
            <td style="padding: 12px; border: 1px solid #ddd;">{{ info.location }}</td>
            <td style="padding: 12px; border: 1px solid #ddd;"><span class="status--process">{{ info.status }}</span></td>
            <td style="padding: 12px; border: 1px solid #ddd;">
                <button class="btn btn-primary" @click="updateTask(info)">Approve</button>
                <span style="margin-left: 5px; margin-right: 5px;"></span> <!-- Adjust the spacing here -->
                <button class="btn btn-danger" @click="deleteTask(info.id)">Decline</button>
            </td>
        </tr>
    </tbody>
</table>
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
      sortedData: [],
    };
  },
  created() {
    this.getUSG();
    // Call a method to fetch and set the sorted data
    this.getSortedData();
  },
  methods: {
    async getUSG() {
      try {
        const inf = await axios.get('getUSG');
        this.info = inf.data;
      } catch (error) {
        console.log(error);
      }
    },
    async getSortedData() {
      try {
        const inf = await axios.get('getSortedData'); // Replace 'getSortedData' with your actual API endpoint
        this.sortedData = inf.data;
      } catch (error) {
        console.log(error);
      }
    },
    toggleDetails(id) {
      this.$set(this.showDetails, id, !this.showDetails[id]);
    },
    async deleteTask(id) {
      try {
        await axios.delete(`DeleteData/${id}`);
        this.getOrgData();
      } catch (error) {
        console.log(error);
      }
    },
  },
};
</script>
