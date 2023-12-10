<template>
    <div class="background-container">
  <div class="container containers">
    <div class="formbold-form-wrapper">
      <div class="logo-frame">
          <img src="../../../public/img/icons/minsu.jpg" alt="Logo" class="logo-img">
        </div>
      <div class="formbold-form-title">
        <h2 class="form-title">Login</h2>
      </div>
      <form class="user" @submit.prevent="validateAndLogin">
        <div class="form-group">
          <label for="floatingIDNum" class="formbold-form-label">ID Number</label>
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
          <label class="form-check-label" for="rememberPasswordCheck">
            Remember password
          </label>
        </div>
        <div class="text-center mt-4 text-sm font-light">
          Enter your login information or <a href="registration" class="text-blue-500">click here</a> to registration
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
  background-image: url('../../../public/img/icons/minsu-bg2.jpg');
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
 

    import axios from 'axios'   
    import { onMounted } from 'vue'
    export default {
      name: 'Login',

      data() {
    return {
      IDNum: '',
      password: '',
      errorMessage: '',
    };
  },
  methods: {
    
    
    validateAndLogin() {
        // console.log(response.data.message)
      if (!this.IDNum || !this.password) {
        this.errorMessage = 'IDNum and password are required';
      } else {
        this.login();
      }
    },
    login() {
      const data = {
        IDNum: this.IDNum,
        password: this.password,
      };

      axios
        .post('/login', JSON.stringify(data), {
          headers: {
            'Content-Type': 'application/json',
          },
        })
        .then((response) => {
          if (response.data.message === 'Login successful') {
            // console.log(response.data.message)
            this.$router.push('/');
         
          
          }
        })
        .catch((error) => {
            console.error(error.response.data);
                if ( error.response.data ) {
                    this.errorMessage = error.response.data;
                } else {
                    this.errorMessage = 'Invalid IDNum or password, try again!';
                }
                this.clearErrorMessageAfterDelay(3000);
            });
    },
    clearErrorMessageAfterDelay(delay) {
    setTimeout(() => {
      this.errorMessage = '';
    }, delay);
  },
  },
      setup() {
    async function loadScript(src) {
      return new Promise((resolve, reject) => {
        const script = document.createElement('script');
        script.src = src;
        script.onload = resolve;
        script.onerror = reject;
        document.head.appendChild(script);
      });
    }

    async function loadScriptsInOrder(scriptUrls) {
      for (const url of scriptUrls) {
        await loadScript(url);
      }
    }

    onMounted(async () => {
        // await loadScript('../vendor/chart.js/Chart.min.js'); 
        // await loadScript('../vendor/jquery/jquery.min.js'); 
      await loadScriptsInOrder([   
      ]);
    });
},
    }

</script>

