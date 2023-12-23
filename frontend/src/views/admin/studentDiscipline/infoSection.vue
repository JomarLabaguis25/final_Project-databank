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
                                <li class="active">
    <a href="/infoSection">
        <i class="fas fa-copy"></i>
        <span class="bot-line"></span>Information Section</a>
</li>
<li>
                                    <a href="/handbook">
                                        <span class="bot-line"></span>Student Handbook</a>
                                </li>
                                <li>
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

<div>
                        <!-- jOB dETAILS -->
                        
                        <div class="col-md-12">
    <div class="row m-t-30">
        <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 20px;">
    <a href="/index4" style="text-decoration: none; color: inherit; cursor: pointer; display: flex; align-items: center;">
        <span style="font-size: 18px; margin-right: 3px; cursor: pointer; font-weight: bold; background-color: grey; color: #fff; padding: 8px 12px; border-radius: 5px;">&larr;</span>
    </a>
    <h2 style="text-align: center; margin: 0;">Student Information</h2>
    <div style="width: 24px;"></div>
</div>

<div style="display: flex; align-items: center; margin-left: auto; margin-top: -20px;">
    <input type="text" style="padding: 8px; margin-right: 8px; margin-left: auto; border: 1px solid #ccc; border-radius: 4px;" placeholder="Enter ID number...">
    <button style="padding: 8px 12px; cursor: pointer; background-color: #4CAF50; color: #fff; border: none; border-radius: 4px;">Search</button>
</div>

<label for="courseSelect" style="font-size: 16px; color: #333; margin-bottom: 10px; font-weight: bold; display: block;">Select Course:</label>
<select id="courseSelect" v-model="selectedCourse" style="padding: 8px; font-size: 14px;">
  <option value="" style="font-style: italic;">All Courses</option>
  <option v-for="course in uniqueCourses" :key="course" :value="course" style="background-color: #f4f4f4; color: #333; padding: 5px;">
    {{ course }}
  </option>
</select>

        <div class="col-md-12">
            <!-- DATA TABLE-->
            <div class="table-responsive m-b-30">
                <table style="border-collapse: collapse; width: 100%; border: 1px solid #ddd;">
    <thead style="background-color: grey; color: white;">
        <tr>
            <th style="text-align: center; vertical-align: middle; border: 1px solid #ddd;">ID</th>
            <th style="text-align: center; vertical-align: middle; border: 1px solid #ddd;">Student Number</th>
            <th style="text-align: center; vertical-align: middle; border: 1px solid #ddd;">Student Name</th>
            <th style="text-align: center; vertical-align: middle; border: 1px solid #ddd;">Year & Section</th>
            <th style="text-align: center; vertical-align: middle; border: 1px solid #ddd;">College Course</th>
            <th style="text-align: center; vertical-align: middle; border: 1px solid #ddd;">Status</th>
            <th style="text-align: center; vertical-align: middle; border: 1px solid #ddd;">Action</th>
        </tr>
    </thead>
    <tbody v-for="info in filteredInfo" :key="info.id">
        <tr>
            <td style="text-align: center; vertical-align: middle; border: 1px solid #ddd;">{{ info.id }}</td>
            <td style="text-align: center; vertical-align: middle; border: 1px solid #ddd;">{{ info.studentNum }}</td>
            <td style="text-align: center; vertical-align: middle; border: 1px solid #ddd;">{{ info.name }}</td>
            <td style="text-align: center; vertical-align: middle; border: 1px solid #ddd;">{{ info.yearSec }}</td>
            <td style="text-align: center; vertical-align: middle; border: 1px solid #ddd;">{{ info.course }}</td>
            <td style="text-align: center; vertical-align: middle; border: 1px solid #ddd; color: 
                {{ info.status === 'No Violations' ? 'lightgreen' : 'red' }};">
                {{ info.status }}
            </td>
            <td style="padding: 12px; border: 1px solid #ddd;">
  <!-- Existing Update button -->
  <button class="btn btn-primary" @click="updateTask(info)">Update</button>

  <!-- Conditional rendering for the update form -->
  <router-link v-if="showUpdateForm" :to="{ path: '/insertinformation', query: { id: selectedId } }">
    <button class="btn btn-primary">Update Form</button>
  </router-link>
</td>

            <td style="text-align: center; vertical-align: middle; border: 1px solid #ddd;"></td>
        </tr>
    </tbody>
</table>
            </div>
            <!-- END DATA TABLE-->
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="copyright">
                <p>Copyright © 2018 Colorlib. All rights reserved</p>
            </div>
        </div>
    </div>
</div>

        </div>
</div>
</template>

<style>
@import'../../../assets/admin/css/bootstrap-datetimepicker.min.css';
@import'../../../assets/admin/css/font-face.css';
@import'../../../assets/admin/css/theme.css';
</style>

<script>
import axios from 'axios';

export default {
    data() {
  return {
    selectedCourse: "", // Selected course for filtering
    info: [], // Your original data
    showUpdateForm: false, // Set this to true to show the update form
    selectedId: null, // Store the selected ID for updating
  };
},
computed: {
  // Get unique courses from the data
  uniqueCourses() {
    return [...new Set(this.info.map((item) => item.course))];
  },
  // Filter data based on the selected course
  filteredInfo() {
    if (!this.selectedCourse) {
      // If no course is selected, return all data
      return this.info;
    } else {
      // Filter data based on the selected course
      return this.info.filter((item) => item.course === this.selectedCourse);
    }
  }
},
methods: {
  // Method to fetch information using Axios
  async getInfos() {
    try {
      const response = await axios.get("getInfos");
      this.info = response.data;
      console.log(response);
    } catch (error) {
      console.log(error);
    }
  },

  // Updated updateTask method
  updateTask(info) {
    console.log("Selected Info:", info);

    if (info) {
      // Set the selected ID and show the update form
      this.selectedId = info.id;
      console.log("Selected ID:", this.selectedId);

      // Assuming you have a separate form component for updating
      // Pass the selected info to the form component for pre-filling the fields
      this.$router.push({
        path: '/insertinformation',
        query: { id: this.selectedId, data: JSON.stringify(info) }
      });
    } else {
      console.error('Invalid data provided for update.');
    }
  },
},
mounted() {
  // Call the method to fetch information when the component is mounted
  this.getInfos();
},
};
</script>
