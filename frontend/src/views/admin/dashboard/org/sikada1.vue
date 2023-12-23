<template>
  <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
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
                      <div class="header__navbar">
                          <ul class="list-unstyled">
                              <li class="has-sub">
                                  <a href="#">
                                      <i class="fas fa-tachometer-alt"></i>Student Organization
                                      <span class="bot-line"></span>
                                  </a>
                                  <ul class="header3-sub-list list-unstyled">
                                      <li>
                                          <a href="index1">Student Organization</a>
                                      </li>
                                      <li>
                                          <a href="index2">Job Placement</a>
                                      </li>
                                      <li>
                                          <a href="index3">Scholarship</a>
                                      </li>
                                      <li>
                                          <a href="index4">Student Discipline</a>
                                      </li>
                                      <li>
                                          <a href="accounts">Registered Account</a>
                                      </li>
                                  </ul>
                              </li>
                              <li>
                                  <a href="/orgtable">
                                      <i class="fas fa-shopping-basket"></i>
                                      <span class="bot-line"></span>Table</a>
                              </li>
                              <li>
                                  <a href="/event_Calendar">
                                      <span class="bot-line"></span>University Student Government</a>
                              </li>
                              <li>
                                  <a href="/insertEvent">
                                      <span class="bot-line"></span>Add Event</a>
                              </li>
                          </ul>
                      </div>
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
          <section id="about" class="about">
  <div class="container">

    <div class="row">
      <div class="col-lg-6 order-1 order-lg-2">
        <div class="col-lg-6 order-1 order-lg-2">
          <div style="width: 400px; height: 400px; overflow: hidden; border-radius: 50%; margin-left: 30px; margin-top: 10px;">
<img src="../../../../assets/img/sikada.jpg" class="img-fluid" alt="" style="width: 100%; height: auto;">
</div>
</div>
</div>
      <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
        <h3>Sikada Chorale</h3>
        <p class="fst-italic">

            Sikada Chorale is a vibrant musical ensemble renowned for its rich harmonies and captivating performances, showcasing a diverse repertoire that spans classical, contemporary, and cultural genres. Originating from [insert location], this choir has gained acclaim for its exceptional vocal talent and commitment to musical excellence. Founded on the principles of unity and artistic expression, Sikada Chorale has become a cultural ambassador, enchanting audiences with its emotive interpretations and unique blend of voices.        </p>
        <ul>
          <li><i class="ri-check-double-line"></i> Sikada Chorale embraces a wide range of musical styles, seamlessly navigating classical masterpieces, contemporary compositions, and traditional cultural pieces.</li>
          <li><i class="ri-check-double-line"></i> The ensemble is characterized by a harmonious collaboration among its members, fostering a strong sense of artistic unity that transcends into their performances.</li>
          <li><i class="ri-check-double-line"></i> Sikada Chorale not only entertains but also serves as a cultural ambassador, promoting the beauty of music and fostering a deep appreciation for diverse musical traditions.</li>
        </ul>
      </div>
    </div>

  </div>
</section>
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
  export default{
      data(){
          return{
              info:""
          }
      },
      mounted(){
          this.getDis();
      },
      methods:{
          async getDis(){
              try{
                  const a = await axios.get("getDis");
                  this.info = a.data;
                  console.log(a);
              }catch(error){
              console.log(error);
              }
          }
      }
  }
  </script>

