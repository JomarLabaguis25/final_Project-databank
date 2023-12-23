<template>
    <div class="background-container">
  <div class="container containers">
    <div class="formbold-form-wrapper">
      <div class="logo-frame">
          <img src="../../public/img/icons/minsu.jpg" alt="Logo" class="logo-img">
        </div>
        <p class="section-title" style="font-weight: bold;">Mindoro State University</p>
      <div class="formbold-form-title">
        <p class="section-title">Welcome to ADMIN side</p>
      </div>
      <div class="combined-section">
  <p class="section-title">To verify, please insert the default code for Admin</p>
  
  <input v-model="userInput" type="text" style="padding: 8px; margin-right: 10px; border: 1px solid #ccc;" class="default-code-input" placeholder="Enter default code...">
  <button @click="submitCode" type="button" style="padding: 8px 16px; background-color: #4CAF50; color: white; border: none; border-radius: 4px;">Submit Code</button>

</div>
<p v-if="isCodeValid" style="color: green;">Code is valid!</p>
  <p v-if="!isCodeValid && codeSubmitted" style="color: red;">Invalid code. Please try again.</p>
  <p v-if="showMaxAttemptsMessage" style="color: red;">Sorry, you've reached the maximum attempts. Please wait for {{ countdown }} seconds.</p>

          
    </div>
  </div>
</div>

</template>

<style scoped>
.background-container {
  font-family: Arial, sans-serif;
  width: 100vw;
  height: 100vh;
  margin: 0 auto;
  position: absolute;
  top: 0;
  left: 0;
  background-image: url('../../public/img/icons/minsu-bg2.jpg');
  background-position: center;
  background-size: cover;
}

.container {
  position: relative;
  width: 100%;
  height: 100%;
}

.formbold-form-wrapper {
  background-color: rgba(255, 255, 255, 0.9); /* Adjust the alpha channel (0.9 for slight transparency) */
  padding: 20px;
  border-radius: 10px;
  box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}
.logo-frame {
  text-align: center;
  border-radius: 50%;
  overflow: hidden;
  margin-bottom: 20px;
}

.logo-img {
  max-width: 100px;
  max-height: 100px;
  border-radius: 50%;
}

.form-title {
  font-size: 24px;
  color: lightgreen;
}

.formbold-form-label {
  font-weight: bold;
  color: darkgreen;
}

.formbold-form-input {
  width: 100%;
  padding: 8px;
  border: 1px solid #ccc;
  border-radius: 5px;
}

.password-group {
  position: relative;
}

.password-toggle-btn {
  position: absolute;
  top: 50%;
  right: 10px;
  transform: translateY(-50%);
}

.error-message {
  color: red;
}
</style>

<script>
// import axios from 'axios';

export default {
  data() {
  return {
    userInput: '',
    isCodeValid: false,
    codeSubmitted: false,
    defaultCode: 'ip add 192.168.10.10 255.255.255.0',
    consecutiveInvalidAttempts: 0,
    maxConsecutiveInvalidAttempts: 3,
    waitingPeriod: 60, // Waiting period in seconds
    countdown: 0,
    isWaiting: false,
    showMaxAttemptsMessage: false
  };
},
methods: {
  submitCode() {
    if (this.isWaiting) {
      // User is still in the waiting period
      return;
    }

    this.codeSubmitted = true;
    if (this.userInput === this.defaultCode) {
      this.isCodeValid = true;
      this.consecutiveInvalidAttempts = 0; // Reset consecutive invalid attempts
      this.showMaxAttemptsMessage = false; // Reset the warning message
      // Redirect to a specific path if the code is valid
      this.$router.push('/adminLogin'); // Replace '/valid-path' with your desired path
    } else {
      this.isCodeValid = false;
      this.consecutiveInvalidAttempts++;

      if (this.consecutiveInvalidAttempts >= this.maxConsecutiveInvalidAttempts) {
        // Exceeded three consecutive invalid attempts, initiate waiting period
        this.isWaiting = true;
        this.countdown = this.waitingPeriod;
        this.showMaxAttemptsMessage = true; // Show the warning message

        const countdownInterval = setInterval(() => {
          this.countdown--;
          if (this.countdown <= 0) {
            // After waiting period, reset the counter and allow submissions
            this.consecutiveInvalidAttempts = 0;
            this.isWaiting = false;
            this.showMaxAttemptsMessage = false; // Hide the warning message
            clearInterval(countdownInterval); // Stop the countdown interval
          }
        }, 1000); // Update the countdown every second
      }
    }

    // Reset the input field
    this.userInput = '';
  }
}
};
</script>
