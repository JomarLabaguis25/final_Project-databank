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
  <img src="../../../../assets/img/baanaw.jpg" class="img-fluid" alt="" style="width: 100%; height: auto;">
</div>
</div>
</div>
        <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
          <h3>Baanaw Dance Troupe</h3>
          <p class="fst-italic">
            The Baanaw Dance Troupe is a vibrant and culturally rich performing arts ensemble that celebrates 
            the traditional dance forms of a specific ethnic or regional group. Renowned for its captivating performances, 
            the troupe seamlessly weaves together intricate choreography, elaborate costumes, and compelling storytelling to bring the essence of its cultural heritage to life on stage. The troupe's dedication to preserving and promoting its unique dance traditions has garnered widespread acclaim, 
            making it a captivating force in the realm of cultural preservation and artistic expression.
          </p>
          <ul>
            <li><i class="ri-check-double-line"></i> Baanaw Dance Troupe serves as a dynamic platform for the celebration and preservation of a specific ethnic 
                or regional culture through traditional dance forms.</li>
            <li><i class="ri-check-double-line"></i>  The troupe is known for its meticulous choreography, which intricately combines rhythmic movements, symbolic gestures, and expressive 
                storytelling to convey the cultural narratives embedded in its dance traditions.</li>
            <li><i class="ri-check-double-line"></i> With elaborate costumes that reflect the rich history and aesthetics of the cultural group it represents, Baanaw Dance Troupe creates a visually stunning and immersive experience for its audience, fostering a deeper appreciation for the beauty and significance of traditional dance.</li>
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

