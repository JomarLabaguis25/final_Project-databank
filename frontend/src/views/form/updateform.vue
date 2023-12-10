<template>
    <div class="modal" v-if="show" @click.self="cancel" @hidden="closeModal">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="container d-flex align-items-center justify-content-center" style="min-height: 100vh;">
              <div class="formbold-form-wrapper" style="background-color: white; padding: 20px; border-radius: 10px; box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);">
                <div class="formbold-form-title" style="text-align: center; margin-bottom: 10px;">
                  <img src="../../../public/img/icons/minsu.jpg" alt="Logo" style="max-width: 80px; margin-bottom: 10px;">
                </div>
    
                <div class="formbold-form-title" style="text-align: center; margin-bottom: 10px;">
                  <h2 style="font-size: 20px; color: lightgreen;">Update Profile</h2>
                </div>
                <form class="user" @submit.prevent="updateProfile(data.id)">
    
                  <div class="formbold-input-flex" style="display: flex; flex-direction: column; margin-bottom: 15px;">
                    <label for="Fullname" class="formbold-form-label" style="font-weight: bold; color: darkgreen;">Fullname:</label>
                    <input v-model="data.Fullname" type="text" id="Fullname" class="formbold-form-input" style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 5px;">
                    <span v-if="!isValidFullname" class="text-danger">Update your Name</span>
                  </div>
    
                  <div class="formbold-input-flex" style="display: flex; flex-direction: column; margin-bottom: 15px;">
                    <label for="IDNum" class="formbold-form-label" style="font-weight: bold; color: darkgreen;">ID Number:</label>
                    <input v-model="data.IDNum" type="text" id="IDNum" class="formbold-form-input" style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 5px;">
                    <span v-if="!isValidIDNum" class="text-danger">{{ IDNumError || 'Enter your new ID Number' }}</span>
                  </div>      
    
                  <button class="btn btn-primary btn-login text-uppercase fw-bold" type="submit">Update</button>
                  <button class="btn btn-primary" @click="cancel">Cancel</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    
      </template>
    
    <script>
    import axios from 'axios';
    
    export default {
      props: {
        modalData: Object,
        show:Boolean,
      },
      data() {
        return {
          profileId: 1, // Default ID, replace with the actual ID based on your logic
          Fullname: '',
          IDNum: '',
          isValidFullname: true,
          isValidIDNum: true,
          IDNumError: '',
          data:{
            ...this.modalData
          }
        }
      },
      watch: {
        modalData(newModalData) {
          this.data = { ...newModalData };
        }
      },
      methods: {
        updateProfile(profileId) {
          this.isValidFullname = this.Fullname.trim() !== '';
          this.isValidIDNum = this.IDNum.trim() !== '';
    
         // if (this.isValidFullname && this.isValidIDNum) {
            axios.post(`/api/update-profile/${profileId}`, this.data)
              .then(response => {
                // Handle the successful response
                console.log(response.data);
              })
              this.$emit('update');
                this.$emit('close')
              .catch(error => {
                // Handle errors
                console.error(error);
              });
          //}
        },
        cancel() {
          this.$emit('cancelled');
        },
      },
    };
    </script>
    
    