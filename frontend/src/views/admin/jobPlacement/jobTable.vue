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
                            <li class="active">
                                <a href="/jobTable">Job Table</a>
                            </li>
                            <li>
                                <a href="/inquireTable">Inquiries</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                <a href="/profileTable">
                    <span class="bot-line"></span>Alumni's Profile</a>
            </li>
            <li>
                <a href="/infoTable">
                    <span class="bot-line"></span>Web Information</a>
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
                        <li>
                            <a href="/jobTable">
                                <i class="fas fa-table"></i>Tables</a>
                        </li>
                        <li>
                            <a href="/infoTable">
                                <i class="far fa-check-square"></i>Web Information</a>
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
<div>
                                    <!-- jOB DETAILS -->
                                <div class="table-responsive m-b-40" style="width: 100%; max-width: 1300px; overflow-x: auto; margin: 0 auto;">
                                    <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 20px;">
    <a href="/index2" style="text-decoration: none; color: inherit; cursor: pointer;">
        <span style="font-size: 24px; margin-right: 10px; cursor: pointer; font-weight: bold;">&larr;</span>
    </a>
    <h2 style="text-align: center; margin-top: 20px;">Job Details</h2>
    <div style="width: 24px;"></div>
</div>
<label for="jobCategorySelect">Filter by Job Category:</label>
<select v-model="selectedjobCategory" @change="filterByjobCategory" id="jobCategorySelect">
      <option value="">All</option>
      <option v-for="category in uniqueJobCategories" :key="category" :value="category">{{ category }}</option>
    </select>
    <table style="width: 100%; border-collapse: collapse; margin-top: 20px; border: 1px solid #ddd;">
    <thead>
        <tr style="background-color: #f2f2f2;">
            <!-- <th style="padding: 12px; text-align: center; border: 1px solid #ddd;">ID</th> -->
            <th style="padding: 12px; text-align: center; border: 1px solid #ddd;">Job Category</th>
            <th style="padding: 12px; text-align: center; border: 1px solid #ddd;">Job Name</th>
            <th style="padding: 12px; text-align: center; border: 1px solid #ddd;">Job Location</th>
            <th style="padding: 12px; text-align: center; border: 1px solid #ddd;">Job Salary</th>
            <th style="padding: 12px; text-align: center; border: 1px solid #ddd;">Job Nature</th>
            <th style="padding: 12px; text-align: center; border: 1px solid #ddd;">Job Description</th>
            <th style="padding: 12px; text-align: center; border: 1px solid #ddd;">Responsibility</th>
            <th style="padding: 12px; text-align: center; border: 1px solid #ddd;">Job Qualification</th>
            <th style="padding: 12px; text-align: center; border: 1px solid #ddd;">Company Details</th>
            <th style="padding: 12px; text-align: center; border: 1px solid #ddd;">Action</th>
        </tr>
    </thead>
    <tbody v-for="info in filteredInfo" :key="info.id">
    <tr>
      <!-- <td style="padding: 12px; border: 1px solid #ddd;">{{ info.id }}</td> -->
      <td style="padding: 12px; border: 1px solid #ddd;">{{ info.jobCategory }}</td>
      <td style="padding: 12px; border: 1px solid #ddd;">{{ info.jobName }}</td>
      <td style="padding: 12px; border: 1px solid #ddd;">{{ info.jobLocation }}</td>
      <td style="padding: 12px; border: 1px solid #ddd;">{{ info.jobSalary }}</td>
      <td style="padding: 12px; border: 1px solid #ddd;">{{ info.JobNature }}</td>
      <td style="padding: 12px; border: 1px solid #ddd;">{{ info.jobDescription }}</td>
      <td style="padding: 12px; border: 1px solid #ddd;">{{ info.responsibility }}</td>
      <td style="padding: 12px; border: 1px solid #ddd;">{{ info.jobQualification }}</td>
      <td style="padding: 12px; border: 1px solid #ddd;">{{ info.companyDetails }}</td>
      <td style="padding: 12px; border: 1px solid #ddd;">
        <button class="btn btn-primary" @click="updateTask(info)">Update</button>
        <span style="margin-left: 5px; margin-right: 5px;"></span>
        <button class="btn btn-danger" @click="deleteTask(info.id)">Delete</button>
          </td>
    </tr>
  </tbody>
</table>
</div>
</div>
<div style="text-align: right;">
    <a href="/insert" class="btn btn-secondary">
        Add
    </a>
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
      info: [],
      selectedjobCategory: '',
      alljobCategory: [],
      isVisible: false,
      modalData: {},
    };
  },
  computed: {
    filteredInfo() {
      if (this.selectedjobCategory !== '') {
        return this.info.filter((item) => item.jobCategory === this.selectedjobCategory);
      } else {
        return this.info;
      }
    },
    uniqueJobCategories() {
      return [...new Set(this.info.map((item) => item.jobCategory))];
    },
  },
  created() {
    this.getData();
  },
  methods: {
    async getData() {
      try {
        const inf = await axios.get('getData');
        this.info = inf.data;
      } catch (error) {
        console.log(error);
      }
    },

    async deleteTask(recordid) {
        const confirm = window.prompt("Type yes if you are sure to delete the data");
        if (confirm === 'yes') {
            await axios.post("deleted", {
                id: recordid,
            });
            this.getData();
        }
    },
    async deleteData(id) {
        try {
            await axios.delete(`deleteData/${id}`);
            this.getData();
        } catch (error) {
            console.log(error);
        }
    },


    showModal(info) {
      this.modalData = { ...info };
      this.isVisible = true;
    },
    
    cancelDialog() {
      this.isVisible = false;
    },
    filterByjobCategory() {
      console.log('Filtering by job category:', this.selectedjobCategory);
      this.alljobCategory = [...new Set(this.info.map((item) => item.jobCategory))];
    },
    updateTask(info) {
      // Your update method implementation
      this.isVisible = false; // Assuming you close the modal after updating
    },
  },
};
</script>
