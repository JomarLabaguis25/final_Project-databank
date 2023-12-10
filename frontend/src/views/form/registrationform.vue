<template>
  <div class="background-container">
    <div class="container">
      <div class="formbold-form-wrapper">
        <div class="logo-frame">
          <img src="../../../public/img/icons/minsu.jpg" alt="Logo" class="logo-img">
        </div>
        <div class="form-title">
          <h2>Register now</h2>
        </div>
        <div class="scrollable-form">
          <form class="user" @submit.prevent="register">

            <div class="formbold-input-flex">
              <div class="input-pair">
                <label class="formbold-form-label">Fullname:</label>
          <input v-model="FullName" type="text" class="formbold-form-input">
          <span v-if="!isValidFullName" class="text-danger">Enter your name</span>
              </div>

              <div class="input-pair">
                <label for="IDNum" class="formbold-form-label">ID Number:</label>
                <input v-model="IDNum" type="IDNum" class="formbold-form-input" />
                <span v-if="!isValidIDNum" class="text-danger">{{ IDNumError || 'Please enter a valid ID Number' }}</span>
              </div>
            </div>

            <div class="formbold-input-flex">
              <div class="input-pair">
                <label for="password" class="formbold-form-label">Password:</label>
                <input v-model="password" type="password" class="formbold-form-input" />
                <span v-if="!isValidPassword" class="text-danger">{{ passwordError || 'Please enter a valid password' }}</span>
              </div>
            </div>

            <div class="formbold-input-flex">
              <div class="input-pair">
                <label for="repeatPassword" class="formbold-form-label">Repeat Password:</label>
                <input v-model="repeatPassword" type="password" class="formbold-form-input" />
                <span v-if="!isValidRepeatPassword" class="text-danger">Passwords do not match</span>
              </div>
            </div>

            <div class="formbold-input-flex">
              <input class="form-check-input" type="checkbox" value="" id="rememberPasswordCheck">
              <label class="form-check-label" for="rememberPasswordCheck">Remember password</label>
            </div>

            <button class="btn btn-primary btn-login text-uppercase fw-bold" type="submit">Register Now</button>
          </form>
        </div>
        <div class="login-link">
          <p>Already have an account? <a href="loginform" class="text-blue-500">Login</a></p>
        </div>
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
  background-image: url('../../../public/img/icons/minsu-bg2.jpg');
  background-position: center;
  background-size: cover;
}

.container {
  display: flex;
  align-items: center;
  justify-content: center;
  height: 100vh;
}
.formbold-form-wrapper {
  background-color: rgba(255, 255, 255, 0.9);
  padding: 20px;
  border-radius: 10px;
  box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
  max-width: 350px;
  width: 80%;
  margin: 0 auto; /* Center the form horizontally */
}

.logo-frame {
  text-align: center;
  margin-bottom: 10px;
}

.logo-img {
  max-width: 80px;
  max-height: 80px;
  border-radius: 50%;
}

.form-title {
  text-align: center;
  margin-bottom: 10px;
}

.login-link {
  text-align: center;
  margin-top: 20px;
}

.formbold-input-flex {
  display: flex;
  flex-direction: column;
  margin-bottom: 15px;
}

.input-pair {
  margin-bottom: 10px;
}

.formbold-form-label {
  font-weight: bold;
  color: darkgreen;
  margin-bottom: 5px;
}

.formbold-form-input {
  width: 100%;
  padding: 6px;
  border: 1px solid #ccc;
  border-radius: 5px;
}

.text-danger {
  color: red;
}

.scrollable-form {
  max-height: calc(70vh - 140px); /* Adjust the max height as needed, considering other elements' height */
  overflow-y: auto;
}
</style>

  <script>
  import axios from 'axios';
  export default {
    name: 'Register',
    data() {
      return {
        FullName: '',
        IDNum: '',
        IDNumError: '',
        password: '',
        passwordError: '',
        repeatPassword: '',
        isValidFullName: true,
        isValidIDNum: true,
        isValidPassword: true,
        isValidRepeatPassword: true,
      };
    },
    methods: {
      async register() {
        // Validate the form fields before proceeding
        this.isValidFullName = !!this.FullName.trim();
        this.isValidIDNum = this.IDNum;
        this.isValidPassword = this.password.length >= 6; // Example: Password should be at least 6 characters
        this.isValidRepeatPassword = this.password === this.repeatPassword;
       console.log(this.FullName)

        const passwordRegex = /^(?=.*[A-Za-z])(?=.*\d)(?=.*[@#])[A-Za-z\d@#]+$/;
      if (!passwordRegex.test(this.password)) {
        this.isValidPassword = false;
        this.passwordError = 'Password must contain at least one letter, one number, and one character';
      }
  
        // If all validations pass, proceed with registration logic
        if (this.isValidFullName && this.isValidIDNum && this.isValidPassword && this.isValidRepeatPassword) {
          try {
            const response = await axios.post("register", {
              name: this.FullName,
              IDNum: this.IDNum,
              password: this.password,
              confirmpassword: this.repeatPassword,
             
        
            });
                  console.log(this.FullName);
            console.log(response.data);
            this.$router.push('/loginform');
            // Handle the response accordingly, e.g., redirect to another page
          } catch (error) {
            console.error(error);
            if (error.response && error.response.status === 400 ) {
          this.isValidIDNum = false;
          this.IDNumError = 'IDNum already exists';
            }
            // Handle registration error
          }
        }
      },
      validateIDNum(IDNum) {
        // Regular expression for a simple email validation
        const IDNumRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return IDNumRegex.test(IDNum);
      },
    },
  };
  </script>
  





