<template>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>University Event Calendar</title>
    </head>
    <body>
    
<div style="font-family: Arial, sans-serif; margin: 20px;">
    
        <h2 style="text-align: center;">University Event Calendar</h2>
    
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
