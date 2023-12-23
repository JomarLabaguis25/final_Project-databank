<template>
  <div>
    <section class="main-section">
      <header>
        <h1 class="main-heading">Welcome to Mindoro State University</h1>
      </header>
      <br>
      <div class="content-box">
        <div class="combined-section">
          <p class="section-title">Are you a MinSU alumni looking for a job?</p>
          <a href="/registrationform" class="button btn-dark-green">Explore Opportunities</a>

          <!-- Adjusted the margin for the paragraph -->
          <p class="section-title" style="margin-top: 15px;">Chairperson of an organization?</p>
          <a href="/orgReg" class="button btn-light-green">Register Your Organization</a>
        </div>
      </div>

      <!-- Move the admin icon to the top right -->
      <div>
        <div>
          <div style="display: flex; align-items: center; position: fixed; top: 20px; right: 20px;">
    <a href="#" @click="toggleForm">
      <img src="../assets/img/admin.png" alt="Admin Icon" width="50" height="50">
    </a>

    <div v-if="showForm" style="background: rgba(255, 255, 255, 0.9); padding: 20px; border-radius: 8px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);">
      <!-- Form content -->
      <p>Are you really the admin?</p>

      <!-- Yes and No buttons -->
      <div>
  <button style="background-color: green; color: white; margin-right: 10px;" type="button" @click="handleYes">Yes</button>
  <button style="background-color: red; color: white;" type="button" @click="handleNo">No</button>
</div>




      <!-- Close button for the modal -->
      <span style="position: absolute; top: 10px; right: 10px; cursor: pointer; font-size: 20px;" @click="toggleForm">&times;</span>
    </div>
  </div>
  </div>
  </div>
    </section>
  </div>
</template>

<!-- Add or adjust styles as needed -->
<script>
export default {
  data() {
    return {
      showForm: false,
    };
  },
  methods: {
    toggleForm() {
      this.showForm = !this.showForm;
    },
    handleYes() {
      this.$router.push('/page');
    },
    handleNo() {
      console.log('No clicked');
      this.showForm = false;
    },
  },
};
</script>
<style scoped>
body {
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  margin: 0;
  text-align: center;
  color: #333;
  background-color: #f0f8ff; /* Set a light blue background color */
}

header {
  margin-bottom: 10px;
}

.main-heading {
  color: white;
  margin-bottom: 5px;
}

.main-section {
  margin: 20px 0;
  background-image: url('../../public/img/icons/minsu-bg2.jpg');
  background-size: 100% 100vh;
  background-repeat: no-repeat;
  position: relative; /* Add position relative to create a stacking context */
}

.content-box {
  max-width: 400px;
  margin: 0 auto;
  padding: 20px;
  border: 1px solid #006400;
  border-radius: 10px;
  background-color: rgba(240, 248, 255, 0.8);
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.combined-section {
  margin-bottom: 20px;
}

.section-title {
  color: #006400;
  margin: 0;
  font-size: 18px;
  font-weight: bold;
}

.button {
  display: inline-block;
  padding: 12px 24px;
  font-size: 16px;
  text-align: center;
  text-decoration: none;
  border-radius: 5px;
  margin: 10px;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

.button:hover {
  background-color: #003300;
}

.btn-dark-green {
  background-color: #006400;
  color: #fff;
}

.btn-light-green {
  background-color: #4CAF50;
  color: #fff;
}

/* Modal styles */
</style>
