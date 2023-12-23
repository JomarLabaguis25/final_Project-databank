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
    
<div style="font-family: Arial, sans-serif; margin: 20px;">
    
        <h2 style="text-align: center;">Eng-Thusiast's Event Calendar</h2>
    
        <table style="width: 100%; border-collapse: collapse; margin-top: 20px; border: 1px solid #ddd;">
    <thead>
        <tr style="background-color: #f2f2f2;">
            <th style="padding: 12px; text-align: center; border: 1px solid #ddd;">Date</th>
            <th style="padding: 12px; text-align: center; border: 1px solid #ddd;">Event</th>
            <th style="padding: 12px; text-align: center; border: 1px solid #ddd;">Location</th>
            <th style="padding: 12px; text-align: center; border: 1px solid #ddd;">Description</th>
            <th style="padding: 12px; text-align: center; border: 1px solid #ddd;">Status</th>
            <th style="padding: 12px; text-align: center; border: 1px solid #ddd;">Org Name</th>
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
            <td style="padding: 12px; border: 1px solid #ddd;">{{ info.OrgName }}</td>
            <td style="padding: 12px; border: 1px solid #ddd;">
                <button class="btn btn-primary" @click="updateTask(info)">Update</button>
                <span style="margin-left: 5px; margin-right: 5px;"></span> <!-- Adjust the spacing here -->
                <button class="btn btn-danger" @click="confirmDeleteTask(info.id)">Delete</button>
            </td>
        </tr>
    </tbody>
</table>
<div style="text-align: right;">
    <a href="#" class="btn btn-secondary" @click="toggleForm">
        Add
    </a>
</div>
<div v-if="showForm" class="modal">
      <div class="modal-content">
        <!-- Form content -->
        <form @submit.prevent="insertData" style="text-align: center; margin-top: 20px;">
          <!-- Your form fields -->
          <div v-for="(field, label) in formFields" :key="label" style="display: flex; justify-content: center; align-items: center; margin-bottom: 20px;">
            <label :for="label" style="margin-right: 10px;">{{ label }}</label>
            <input v-if="field.type === 'text'" type="text" :id="label" :name="label" v-model="formData[label]" style="padding: 8px; width: 150px;">
            <input v-else-if="field.type === 'date'" type="date" :id="label" :name="label" v-model="formData[label]" style="padding: 8px; width: 150px;">
          </div>

          <button type="submit" style="padding: 10px 20px; font-size: 16px; background-color: #008CBA; color: white; border: none; border-radius: 5px;">Insert</button>
        </form>

        <!-- Close button for the modal -->
        <span class="close" @click="toggleForm">&times;</span>
      </div>
    </div>

</div>
    </body>
    </html>
    </template>
    <style scoped>
    /* Modal styles */
    .modal {
      display: block;
      position: fixed;
      z-index: 1;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      overflow: auto;
      background-color: rgba(144, 238, 144, 0.4); /* Super light green background with opacity */
    }
    
    .modal-content {
  background-color: rgb(184, 255, 194); /* Not transparent background color */
  margin: 10% auto;
  padding: 20px;
  border: 1px solid #888;
  width: 50%;
  border-radius: 10px; /* Add border-radius for slightly circular corners */
}
    
    /* Close button style */
    .close {
      color: #aaa;
      float: right;
      font-size: 28px;
      font-weight: bold;
      cursor: pointer;
    }
    
    /* Styling for input fields */
    input[type="text"],
    input[type="date"] {
      padding: 12px;
      width: calc(100% - 24px); /* Adjust the width as needed */
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 5px;
      box-sizing: border-box;
    }
    </style>
    
    
<script>
import axios from 'axios';

export default {
  data() {
    return {
      showForm: false,
      formData: {
        eventDate: '',
        eventName: '',
        eventLoc: '',
        eventDesc: '',
        Status: '',
        OrgName: ''
      },
      formFields: {
        eventDate: { type: 'date' },
        eventName: { type: 'text' },
        eventLoc: { type: 'text' },
        eventDesc: { type: 'text' },
        Status: { type: 'text' },
        OrgName: { type: 'text' }
      },
      info: [],
      showDetails: {} // Assuming you have showDetails property
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
    toggleForm() {
      this.showForm = !this.showForm;
    },
    insertData() {
  axios.post('insertEvent', {
    eventDate: this.formData.eventDate,
    eventName: this.formData.eventName,
    eventLoc: this.formData.eventLoc,
    eventDesc: this.formData.eventDesc,
    Status: this.formData.Status,
    OrgName: this.formData.OrgName
  })
  .then(response => {
    console.log(response.data);
    this.$router.push('/baanaw'); // Redirect to the "baanaw" route
  })
  .catch(error => {
    console.error(error);
  });
},
confirmDeleteTask(taskId) {
        // Display a confirmation dialog
        if (window.confirm('Are you sure you want to delete this task?')) {
            // User clicked OK, proceed with deletion
            this.deleteTask(taskId);
        } else {
            // User clicked Cancel, do nothing or provide feedback
            console.log('Deletion canceled.');
        }
    },
    deleteTask(taskId) {
        // Find the index of the task in the data array
        const index = this.info.findIndex(info => info.id === taskId);

        // Check if the task is found
        if (index !== -1) {
            // Remove the task from the data array
            this.info.splice(index, 1);

            // Optionally, you can make an API call to delete the task on the server
            // Replace the following line with your actual API call
            console.log(`Deleting task with ID ${taskId} on the server...`);

            // Provide feedback or update your data source accordingly
            console.log(`Task with ID ${taskId} deleted successfully.`);
        } else {
            console.error(`Task with ID ${taskId} not found.`);
        }
    },
  }
};
</script>

