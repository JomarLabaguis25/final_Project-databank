<template>
    <div class="background-container">
  <div class="container containers">
    <div class="formbold-form-wrapper">
      <div class="logo-frame">
          <img src="../../../../public/img/icons/minsu.jpg" alt="Logo" class="logo-img">
        </div>
      <div class="formbold-form-title">
        <h2 class="form-title">Admin Login</h2>
      </div>
      <form class="user" @submit.prevent="validateAndLogin">
    <div class="form-group">
      <label for="floatingIDNum" class="formbold-form-label">Username</label>
      <input v-model="IDNum" type="text" class="formbold-form-input" required>
    </div>
    <div class="form-group password-group">
      <label for="floatingPassword" class="formbold-form-label">Password</label>
      <input v-if="!showPassword" v-model="password" type="password" class="formbold-form-input">
      <input v-else v-model="password" type="text" class="formbold-form-input">
      <button @click="togglePasswordVisibility" class="password-toggle-btn">
        <!-- Eye icon for password visibility -->
        <i :class="showPassword ? 'fa fa-eye' : 'fa fa-eye-slash'"></i>
      </button>
    </div>
    <div class="formbold-input-flex">
      <input class="form-check-input" type="checkbox" value="" id="rememberPasswordCheck">
      <label class="form-check-label" for="rememberPasswordCheck">Remember password</label>
    </div>
    <div class="text-center mt-4 text-sm font-light">
      <!-- Display error message if authentication fails -->
      <p v-if="loginError" style="color: red;">Invalid username or password</p>
    </div>
    <button class="btn btn-primary btn-login text-uppercase fw-bold" type="submit">Login Now</button>
  </form>
      <p v-if="errorMessage" class="error-message">{{ errorMessage }}</p>
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
  background-image: url('../../../../public/img/icons/minsu-bg2.jpg');
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
export default {
  data() {
    return {
      IDNum: '',
      password: '',
      showPassword: false,
      loginError: false, // Flag to indicate login error
      defaultUsername: 'MinSU', // Replace with your actual default username
      defaultPassword: 'I Love MinSU' // Replace with your actual default password
    };
  },
  methods: {
    togglePasswordVisibility() {
      this.showPassword = !this.showPassword;
    },
    validateAndLogin() {
      // Reset login error flag
      this.loginError = false;

      // Check if entered username and password match the default values
      if (this.IDNum === this.defaultUsername && this.password === this.defaultPassword) {
        // Perform successful login actions
        console.log('Login successful');

        // Redirect to the specified path (replace '/index1' with your desired path)
        this.$router.push('/index1');
      } else {
        // Set login error flag if authentication fails
        this.loginError = true;
      }
    }
  }
};
</script>
