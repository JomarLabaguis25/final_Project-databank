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
          <li class="has-sub active">
              <a href="">
                  <span class="bot-line"></span>Table</a>
                  <ul class="header3-sub-list list-unstyled">
                  <li>
                      <a href="/jobTable">Job Table</a>
                  </li>
                  <li class="active">
                              <a href="/inquireTable">Inquiries</a>
                          </li>
              </ul>
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
<form @submit.prevent="insertData" style="text-align: center; margin-top: 20px;">
<div v-for="(field, label) in formFields" :key="label" style="display: flex; justify-content: center; align-items: center; margin-bottom: 20px;">
<label :for="label" style="margin-right: 10px;">{{ label }}</label>
<input v-if="field.type === 'text'" type="text" :id="label" :name="label" v-model="formData[label]" style="padding: 8px; width: 150px;">
<input v-else-if="field.type === 'date'" type="date" :id="label" :name="label" v-model="formData[label]" style="padding: 8px; width: 150px;">
</div>

<button type="submit" style="padding: 10px 20px; font-size: 16px; background-color: #008CBA; color: white; border: none; border-radius: 5px;">Insert</button>
</form>
</div>

</template>

<script>
import axios from 'axios';

export default {
data() {
  return {
    formData: {
      id: '',
      jobCategory: '',
      jobName: '',
      jobLocation: '',
      jobSalary: '',
      JobNature: '',
      jobDescription: '',
      responsibility: '',
      jobQualification: '',
      companyDetails: ''
    },
    formFields: {
      jobCategory: { type: 'text' },
      jobName: { type: 'text' },
      jobLocation: { type: 'text' },
      jobSalary: { type: 'text' },
      JobNature: { type: 'text' },
      jobDescription: { type: 'text' },
      responsibility: { type: 'text' },
      jobQualification: { type: 'text' },
      companyDetails: { type: 'text' }
    }
  };
},
methods: {
  insertData() {
    axios.post('insert', this.formData)
      .then(response => {
        console.log(response.data);
        this.$router.push('/jobTable');
      })
      .catch(error => {
        console.error(error);
      });
  },
  handleSubmit() {
    axios.post('insert', {
      jobCategory: this.jobCategory,
      jobName: this.jobName,
      jobLocation: this.jobLocation,
      jobSalary: this.jobSalary,
      JobNature: this.JobNature,
      jobDescription: this.jobDescription,
      responsibility: this.responsibility,
      jobQualification: this.jobQualification,
      companyDetails: this.companyDetails
    })
    .then(response => {
      // Handle success
      console.log(response.data);
      this.$router.push('/jobTable');
    })
    .catch(error => {
      // Handle error
      console.error(error);
    });
  },
},
};
</script>
