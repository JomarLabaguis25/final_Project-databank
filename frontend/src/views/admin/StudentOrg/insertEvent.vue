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
                              <li >
  <a href="/orgtable">
      <i class="fas fa-shopping-basket"></i>
      <span class="bot-line"></span>Table
  </a>
</li>
                              <li>
                                  <a href="/event_calendar">
                                      <span class="bot-line"></span>University Student Government</a>
                              </li>
                              <li class="active">
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
     <!-- Vue Dynamic Form -->
<form @submit.prevent="insertData" style="text-align: center; margin-top: 20px;">
<div v-for="(field, label) in formFields" :key="label" style="display: flex; justify-content: center; align-items: center; margin-bottom: 20px;">
<label :for="label" style="margin-right: 10px;">{{ label }}</label>
<input v-if="field.type === 'text'" type="text" :id="label" :name="label" v-model="formData[label]" style="padding: 8px; width: 150px;">
<input v-else-if="field.type === 'date'" type="date" :id="label" :name="label" v-model="formData[label]" style="padding: 8px; width: 150px;">
</div>

<button type="submit" style="padding: 10px 20px; font-size: 16px; background-color: #008CBA; color: white; border: none; border-radius: 5px;">Insert</button>
</form>

  </template>
  
  <script>
import axios from 'axios';

export default {
  data() {
    return {
      formData: {
        id: '',
        eventName: '',
        eventLoc: '',
        eventDesc: '',
        status: '',
        eventDate: '',
        OrgName: ''
      },
      formFields: {
        eventName: { type: 'text' },
        eventLoc: { type: 'text' },
        eventDesc: { type: 'text' },
        status: { type: 'text' },
        eventDate: { type: 'date' },
        OrgName: { type: 'text' }
      }
    };
  },
  methods: {
    insertData() {
      axios.post('insertEvent', this.formData)
        .then(response => {
          console.log(response.data);
          this.$router.push('/orgtable');
        })
        .catch(error => {
          console.error(error);
        });
    },
    handleSubmit() {
      axios.post('insertEvent', {
        eventName: this.eventName,
        eventLoc: this.eventLoc,
        eventDesc: this.eventDesc,
        status: this.status,
        eventDate: this.eventDate,
        OrgName: this.OrgName
      })
      .then(response => {
        // Handle success
        console.log(response.data);
        this.$router.push('/orgtable');
      })
      .catch(error => {
        // Handle error
        console.error(error);
      });
    },
  },
};
</script>
