<template>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>University Event Calendar</title>
                      <!-- HEADER DESKTOP-->
                      <header class="header-desktop3 d-none d-lg-block" style="background-color: darkgreen;">
                <div class="section__content section__content--p35">
                    <div class="header3-wrap">
                        <a class="navbar-brand d-flex align-items-center text-center py-0 px-4 px-lg-5" href="/" style="text-decoration: none; color: #333; display: flex; align-items: center;">
                <div style="margin-right: 10px;">
                    <div style="width: 40px; height: 40px; background-color: #3498db; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                        <img src="../../../../../public/img/college logo/osas.jpg" alt="Image" style="border-radius: 50%; max-width: 100%; height: auto;">
                    </div>
                </div>
                <h1 class="m-0 text-primary" style="font-size: 1rem; font-weight: bold;">OSAS</h1>
            </a>
                        <div class="header__tool">
                        <div class="account-wrap">
                            <div class="account-item account-item--style2 clearfix js-item-menu">
                                <div class="image">
                                    <img src="../../../../../public/img/icons/minsu.jpg" alt="MinSU" />
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
    </head>
    <body>
    
<div style="font-family: Arial, sans-serif; margin: 20px;">
    
        <h2 style="text-align: center;">Baanaw's Event Calendar</h2>
    
        <table style="width: 100%; border-collapse: collapse; margin-top: 20px; border: 1px solid #ddd;">
    <thead>
        <tr style="background-color: #f2f2f2;">
            <th style="padding: 12px; text-align: center; border: 1px solid #ddd;">Date</th>
            <th style="padding: 12px; text-align: center; border: 1px solid #ddd;">Event</th>
            <th style="padding: 12px; text-align: center; border: 1px solid #ddd;">Location</th>
            <th style="padding: 12px; text-align: center; border: 1px solid #ddd;">Description</th>
            <th style="padding: 12px; text-align: center; border: 1px solid #ddd;">Status</th>
            <th style="padding: 12px; text-align: center; border: 1px solid #ddd;">Action</th>
        </tr>
    </thead>
    <tbody v-for="info in info" :key="info.id">
        <tr>
            <td style="padding: 12px; border: 1px solid #ddd;">{{ info.eventDate }}</td>
            <td style="padding: 12px; border: 1px solid #ddd;">{{ info.eventName }}</td>
            <td style="padding: 12px; border: 1px solid #ddd;">{{ info.eventLoc }}</td>
            <td style="padding: 12px; border: 1px solid #ddd;">{{ info.eventDesc }}</td>
            <td style="padding: 12px; border: 1px solid #ddd;"><span class="status--process">{{ info.Status }}</span></td>
            <td style="padding: 12px; border: 1px solid #ddd;">
                <button class="btn btn-primary" @click="updateTask(info)">Update</button>
                <span style="margin-left: 5px; margin-right: 5px;"></span> <!-- Adjust the spacing here -->
                <button class="btn btn-danger" @click="deleteTask(info.id)">Delete</button>
            </td>
        </tr>
    </tbody>
</table>
<div style="text-align: right;">
    <a href="/insertEvent" class="btn btn-secondary">
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
    this.getOrgData();
  },
  methods: {
    async getOrgData() {
      try {
        const inf = await axios.get('getOrgData');
        this.info = inf.data;
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
}
}
</script>
