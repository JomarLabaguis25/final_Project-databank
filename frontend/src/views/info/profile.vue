<template>
    <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Insert Form</title>
</head>
<body style="font-family: Arial, sans-serif; background-color: #f4f4f4; margin: 0; padding: 20px;">
  <button v-if="!editMode" @click="startEditMode">Edit</button>

  <form
    v-if="editMode && formData.id" 
    action="process_form.php"
    method="post"
    enctype="multipart/form-data"
    @submit.prevent="saveOrUpdate"
    style="max-width: 600px; margin: 0 auto; background-color: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);"
  >


    <h2 style="color: #333;">Personal Information</h2>
    <label for="fullName" style="display: block; margin-bottom: 8px; color: #555;">Full Name:</label>
      <input v-model="formData.fullName" type="text" id="fullName" name="fullName" required style="width: 100%; padding: 8px; margin-bottom: 15px; box-sizing: border-box; border: 1px solid #ccc; border-radius: 4px; font-size: 14px;" />

      <label for="studentNumber" style="display: block; margin-bottom: 8px; color: #555;">Student Number:</label>
      <input v-model="formData.studentNumber" type="text" id="studentNumber" name="studentNumber" required style="width: 100%; padding: 8px; margin-bottom: 15px; box-sizing: border-box; border: 1px solid #ccc; border-radius: 4px; font-size: 14px;" />

      <label for="username" style="display: block; margin-bottom: 8px; color: #555;">Username:</label>
      <input v-model="formData.username" type="text" id="username" name="username" required style="width: 100%; padding: 8px; margin-bottom: 15px; box-sizing: border-box; border: 1px solid #ccc; border-radius: 4px; font-size: 14px;" />

      <label for="address" style="display: block; margin-bottom: 8px; color: #555;">Address:</label>
      <input v-model="formData.address" type="text" id="address" name="address" required style="width: 100%; padding: 8px; margin-bottom: 15px; box-sizing: border-box; border: 1px solid #ccc; border-radius: 4px; font-size: 14px;" />

      <label for="mobileNumber" style="display: block; margin-bottom: 8px; color: #555;">Mobile Number:</label>
      <input v-model="formData.mobileNumber" type="text" id="mobileNumber" name="mobileNumber" required style="width: 100%; padding: 8px; margin-bottom: 15px; box-sizing: border-box; border: 1px solid #ccc; border-radius: 4px; font-size: 14px;" />

      <label for="email" style="display: block; margin-bottom: 8px; color: #555;">Email:</label>
      <input v-model="formData.email" type="email" id="email" name="email" required style="width: 100%; padding: 8px; margin-bottom: 15px; box-sizing: border-box; border: 1px solid #ccc; border-radius: 4px; font-size: 14px;" />

      <label for="country" style="display: block; margin-bottom: 8px; color: #555;">Country:</label>
      <select v-model="formData.country" id="country" name="country" required style="width: 100%; padding: 8px; margin-bottom: 15px; box-sizing: border-box; border: 1px solid #ccc; border-radius: 4px; font-size: 14px;">
        <option value="country1">Country 1</option>
        <option value="country2">Country 2</option>
        <!-- Add more countries as needed -->
      </select>

    <h2 style="color: #333;">Educational Background</h2>

      <label for="hsSchool" style="display: block; margin-bottom: 8px; color: #555;">High School:</label>
      <input v-model="formData.hsSchool" type="text" id="hsSchool" name="hsSchool" required style="width: 100%; padding: 8px; margin-bottom: 15px; box-sizing: border-box; border: 1px solid #ccc; border-radius: 4px; font-size: 14px;" />

      <label for="hsGradYear" style="display: block; margin-bottom: 8px; color: #555;">Year Graduated:</label>
      <input v-model="formData.hsGradYear" type="text" id="hsGradYear" name="hsGradYear" required style="width: 100%; padding: 8px; margin-bottom: 15px; box-sizing: border-box; border: 1px solid #ccc; border-radius: 4px; font-size: 14px;" />

      <label for="shsSchool" style="display: block; margin-bottom: 8px; color: #555;">Senior High School:</label>
      <input v-model="formData.shsSchool" type="text" id="shsSchool" name="shsSchool" required style="width: 100%; padding: 8px; margin-bottom: 15px; box-sizing: border-box; border: 1px solid #ccc; border-radius: 4px; font-size: 14px;" />

      <label for="shsGradYear" style="display: block; margin-bottom: 8px; color: #555;">Year Graduated:</label>
      <input v-model="formData.shsGradYear" type="text" id="shsGradYear" name="shsGradYear" required style="width: 100%; padding: 8px; margin-bottom: 15px; box-sizing: border-box; border: 1px solid #ccc; border-radius: 4px; font-size: 14px;" />

      <label for="collegeSchool" style="display: block; margin-bottom: 8px; color: #555;">College:</label>
      <input v-model="formData.collegeSchool" type="text" id="collegeSchool" name="collegeSchool" required style="width: 100%; padding: 8px; margin-bottom: 15px; box-sizing: border-box; border: 1px solid #ccc; border-radius: 4px; font-size: 14px;" />

      <label for="collegeGradYear" style="display: block; margin-bottom: 8px; color: #555;">Year Graduated:</label>
      <input v-model="formData.collegeGradYear" type="text" id="collegeGradYear" name="collegeGradYear" required style="width: 100%; padding: 8px; margin-bottom: 15px; box-sizing: border-box; border: 1px solid #ccc; border-radius: 4px; font-size: 14px;" />


    <h2 style="color: #333;">Job History</h2>
    <label for="jobProfile" style="display: block; margin-bottom: 8px; color: #555;">Job Profile/Works:</label>
      <textarea v-model="formData.jobProfile" id="jobProfile" name="jobProfile" rows="4" required style="width: 100%; padding: 8px; margin-bottom: 15px; box-sizing: border-box; border: 1px solid #ccc; border-radius: 4px; font-size: 14px;"></textarea>

      <label for="resume" style="display: block; margin-bottom: 8px; color: #555;">Resume (PDF, DOC, DOCX):</label>
  <input
    type="file"
    id="resume"
    name="resume"
    accept=".pdf, .doc, .docx"
    @change="handleFileChange"
    style="width: 100%; padding: 8px; margin-bottom: 15px; box-sizing: border-box; border: 1px solid #ccc; border-radius: 4px; font-size: 14px;"
  />
    <input type="submit"
        value="Update"
        style="background-color: #4caf50; color: #fff; padding: 10px 15px; border: none; border-radius: 4px; cursor: pointer; font-size: 16px;">
  </form>

</body>
</html>

</template>
<script>
export default {
  data() {
    return {
      editMode: true, // Set to true when you want to edit
      formData: {
        id: 1, // Replace with the fetched user ID
        fullName: "",
        studentNumber: "",
        username: "",
        address: "",
        mobileNumber: "",
        email: "",
        country: "country1",
        hsSchool: "",
        hsGradYear: "",
        shsSchool: "",
        shsGradYear: "",
        collegeSchool: "",
        collegeGradYear: "",
        jobProfile: "",
      },
    };
  },
  methods: {
    saveOrUpdate() {
      // Add your logic to handle the form submission here
      // You can send an AJAX request to update the user data on the server
      console.log("Form data submitted:", this.formData);
    },
    handleFileChange(event) {
      // Your existing file change logic here
    },
  },
};
</script>