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
      <div style="position: fixed; top: 20px; right: 20px;">
        <a href="/admin-login" @mouseover="showModal" @mouseout="hideModal">
          <img src="../assets/img/admin.png" alt="Admin Icon" width="50" height="50">
        </a>
        <!-- Modal -->
        <div v-if="isModalVisible" class="modal" @mouseover="keepModal" @mouseout="hideModal">
          <div class="modal-content">
            <!-- Add your modal content here -->
            <p>This is the admin modal content.</p>
          </div>
        </div>
      </div>
    </section>
  </div>
</template>
<script>
export default {
  data() {
    return {
      isModalVisible: false
    };
  },
  methods: {
    showModal() {
      this.isModalVisible = true;
    },
    hideModal() {
      this.isModalVisible = false;
    },
    keepModal() {
      // Add any logic here if you want to keep the modal open under certain conditions
      // For example, if you want the modal to stay open even when the cursor leaves the admin icon but is inside the modal area
      this.isModalVisible = true;
    }
  }
};
</script>
  <style>
    /* Remove the background image from the body */
    .body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            text-align: center;
            color: #333;
            height: 100vh; /* Set body height to viewport height */
        }

        .header {
            margin-bottom: 10px;
        }

        .main-heading {
            color: white;
            margin-bottom: 5px;
        }

        .main-section {
            margin: 0;
            padding: 0;
            height: 100vh; /* Set height to viewport height */
            background-image: url('../../public/img/icons/minsu-bg2.jpg');
            background-size: cover; /* Cover the entire element */
            background-repeat: no-repeat;
        }
  
    .content-box {
    max-width: 400px;
    margin: 0 auto;
    padding: 20px;
    border: 1px solid #006400;
    border-radius: 10px;
    background-color: rgba(240, 248, 255, 0.8); /* Adjust the alpha channel for transparency */
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
    .modal {
  display: none;
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.5); /* Semi-transparent black overlay */
}

.modal-content {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  background-color: white;
  padding: 20px;
  border-radius: 5px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
}

  </style>