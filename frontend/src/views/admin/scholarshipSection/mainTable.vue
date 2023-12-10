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
                      <i class="fas fa-tachometer-alt"></i>Scholarship
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

<h2 style="text-align: center;">Scholarships and Cash Assistance Qualifiers</h2>
<select v-model="selectedScholar" @change="filterByScholar" style="padding: 8px; font-size: 16px; border-radius: 5px; border: 1px solid #ccc;">
<option value="">All Scholars</option>
<option v-for="scholar in allScholars" :key="scholar">{{ scholar }}</option>
</select>



<table style="width: 100%; border-collapse: collapse; margin-top: 20px; border: 1px solid #ddd;">  <thead>
<tr style="background-color: #f2f2f2;">
<th style="padding: 12px; text-align: center; border: 1px solid #ddd;">ID</th>
<th style="padding: 12px; text-align: center; border: 1px solid #ddd;">ID Number</th>
<th style="padding: 12px; text-align: center; border: 1px solid #ddd;">Full Name</th>
<th style="padding: 12px; text-align: center; border: 1px solid #ddd;">Year & Section</th>
<th style="padding: 12px; text-align: center; border: 1px solid #ddd;">College</th>
<th style="padding: 12px; text-align: center; border: 1px solid #ddd;">CP Number</th>
<th style="padding: 12px; text-align: center; border: 1px solid #ddd;">Email</th>
<th style="padding: 12px; text-align: center; border: 1px solid #ddd;">Scholar Name</th>
<th style="padding: 12px; text-align: center; border: 1px solid #ddd;">Action</th>
</tr>
</thead>
<tbody v-for="info in filteredInfo" :key="info.id">
<tr>
<td style="padding: 12px; border: 1px solid #ddd;">{{ info.id }}</td>
<td style="padding: 12px; border: 1px solid #ddd;">{{ info.stud_id }}</td>
<td style="padding: 12px; border: 1px solid #ddd;">{{ info.full_name }}</td>
<td style="padding: 12px; border: 1px solid #ddd;">{{ info.year_section }}</td>
<td style="padding: 12px; border: 1px solid #ddd;">{{ info.college }}</td>
<td style="padding: 12px; border: 1px solid #ddd;">{{ info.cp }}</td>
<td style="padding: 12px; border: 1px solid #ddd;">{{ info.email }}</td>
<td style="padding: 12px; border: 1px solid #ddd;">{{ info.scholar }}</td>
<td style="padding: 12px; border: 1px solid #ddd;">
<button class="btn btn-primary" @click="updateTask(info)">Update</button>
<span style="margin-left: 5px; margin-right: 5px;"></span>
<button class="btn btn-danger" @click="deleteTask(info.id)">Delete</button>
</td>
</tr>
</tbody>
<div class="modal" v-if="isEditing">
<div class="modal-content">
<span class="close" @click="cancelEdit">&times;</span>
<h2>{{ updatedInfo.id ? 'Edit' : 'Add' }} Information</h2>
<form @submit.prevent="saveEdit">
<!-- Input fields for updated information -->
<label for="updatedIDNumber">ID Number:</label>
<input v-model="updatedInfo.stud_id" id="updatedIDNumber" required>

<label for="updatedFullName">Full Name:</label>
<input v-model="updatedInfo.full_name" id="updatedFullName" required>

<label for="updatedYearSection">Year & Section:</label>
<input v-model="updatedInfo.year_section" id="updatedYearSection" required>

<label for="updatedCollege">College:</label>
<input v-model="updatedInfo.college" id="updatedCollege" required>

<label for="updatedCPNumber">CP Number:</label>
<input v-model="updatedInfo.cp" id="updatedCPNumber" required>

<label for="updatedEmail">Email:</label>
<input v-model="updatedInfo.email" id="updatedEmail" required>

<label for="updatedScholarName">Scholar Name:</label>
<input v-model="updatedInfo.scholar" id="updatedScholarName" required>

<!-- Add other input fields for other properties -->

<button type="submit">{{ updatedInfo.id ? 'Save Changes' : 'Add Task' }}</button>
</form>
</div>
</div>
</table>
<div style="text-align: right;">
<a href="/addScholar" class="btn btn-secondary">
Add
</a>
</div>
</div>
</template>
<script>
import axios from 'axios';

export default {
data() {
return {
info: [],
selectedScholar: '',
allScholars: [],
isEditing: false,
updatedInfo: {},
};
},
created() {
this.getScholar();
},
computed: {
filteredInfo() {
if (this.selectedScholar !== '') {
return this.info.filter((item) => item.scholar === this.selectedScholar);
} else {
return this.info;
}
},
},
methods: {
async getScholar() {
try {
const response = await axios.get('getScholar');
this.info = response.data;
this.filterByScholar();
} catch (error) {
console.error(error);
}
},
filterByScholar() {
this.allScholars = [...new Set(this.info.map((item) => item.scholar))];
this.sortInfoByScholar();
},
sortInfoByScholar() {
this.info.sort((a, b) => a.scholar.localeCompare(b.scholar));
},
updateTask(info) {
this.updatedInfo = { ...info };
this.isEditing = true;
},
saveEdit() {
if (this.updatedInfo.id) {
// Implement logic to update existing task on the server
axios.put('updateInfo/' + this.updatedInfo.id, this.updatedInfo)
  .then(() => {
      console.log('Information updated successfully.');
      // You may want to refresh the data after updating
      this.getScholar();
  })
  .catch((error) => {
      console.error('Error updating information:', error);
  })
  .finally(() => {
      // Reset state
      this.isEditing = false;
      this.updatedInfo = {};
  });
} else {
// Implement logic to add a new task on the server
console.log('Adding task:', this.updatedInfo);

// Make an axios request to add the new information on the server
axios.post('addInfo', this.updatedInfo)
  .then(() => {
      console.log('Information added successfully.');
      // You may want to refresh the data after adding
      this.getScholar();
  })
  .catch((error) => {
      console.error('Error adding information:', error);
  })
  .finally(() => {
      // Reset state
      this.isEditing = false;
      this.updatedInfo = {};
  });
}
},
cancelEdit() {
this.isEditing = false;
this.updatedInfo = {};
},
deleteTask(id) {
// Your deleteTask method implementation
},
},
};
</script>
