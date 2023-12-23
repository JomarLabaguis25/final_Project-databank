<template>
    <body class="animsition">
                    <!-- HEADER DESKTOP-->
                    <header class="header-desktop3 d-none d-lg-block" style="background-color: darkgreen;">
                    <div class="section__content section__content--p35">
                        <div class="header3-wrap">
                            <a class="navbar-brand d-flex align-items-center text-center py-0 px-4 px-lg-5" href="/" style="text-decoration: none; color: #333; display: flex; align-items: center;">
                    <div style="margin-right: 10px;">
                        <div style="width: 40px; height: 40px; background-color: #3498db; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                            <img src="../../../public/img/college logo/osas.jpg" alt="Image" style="border-radius: 50%; max-width: 100%; height: auto;">
                        </div>
                    </div>
                    <h1 class="m-0 text-primary" style="font-size: 1rem; font-weight: bold;">OSAS</h1>
                </a>
                <div class="header__navbar">
                                <ul class="list-unstyled">
                                    <li class="has-sub">
                                        <a href="#">
                                            <i class="fas fa-tachometer-alt"></i>Registered Account
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
                                        <a href="/alumniAcc">
                                            <span class="bot-line"></span>Alumni</a>
                                    </li>
                                    <li class="active">
                                        <a href="/chairsAcc">
                                            <span class="bot-line"></span>Chairperson</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="header__tool">
                            <div class="account-wrap">
                                <div class="account-item account-item--style2 clearfix js-item-menu">
                                    <div class="image">
                                        <img src="../../../public/img/icons/minsu.jpg" alt="MinSU" />
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
                <div style="font-family: Arial, sans-serif; margin: 20px;">
    
    <h2 style="text-align: center;">Chairperson's Account</h2>

    <table style="width: 100%; border-collapse: collapse; margin-top: 20px; border: 1px solid #ddd;">
<thead>
    <tr style="background-color: #f2f2f2;">
        <th style="padding: 12px; text-align: center; border: 1px solid #ddd;">ID</th>
        <th style="padding: 12px; text-align: center; border: 1px solid #ddd;">Full Name</th>
        <th style="padding: 12px; text-align: center; border: 1px solid #ddd;">ID Number</th>
        <th style="padding: 12px; text-align: center; border: 1px solid #ddd;">Org Name</th>
        <th style="padding: 12px; text-align: center; border: 1px solid #ddd;">Action</th>
    </tr>
</thead>
<tbody v-for="info in info" :key="info.id">
    <tr>
        <td style="padding: 12px; border: 1px solid #ddd;">{{ info.id }}</td>
        <td style="padding: 12px; border: 1px solid #ddd;">{{ info.FullName }}</td>
        <td style="padding: 12px; border: 1px solid #ddd;">{{ info.IDNum }}</td>
        <td style="padding: 12px; border: 1px solid #ddd;">{{ info.OrgName }}</td>
        <td style="padding: 12px; border: 1px solid #ddd;">
            <button class="btn btn-primary" type="submit" @click.prevent="showModal(info)">Update</button>
            <span style="margin-left: 5px; margin-right: 5px;"></span> 
            <button class="btn btn-danger" @click="deleteTask(info.id)">Delete</button>
        </td>
    </tr>
</tbody>
</table>

</div>
    </body>
    </template>
<script>
import axios from 'axios';

export default {
  data() {
    return {
      info: [],
    };
  },
  created() {
    this.getOrgInfo();
  },
  methods: {
    async getOrgInfo() {
      try {
        const inf = await axios.get('getOrgInfo');
        this.info = inf.data;
      } catch (error) {
        console.log(error);
      }
    },
    toggleDetails(id) {
                this.$set(this.showDetails, id, !this.showDetails[id]);
            },
    async deleteData(id) {
        try {
        await axios.delete(`deleteData/${id}`)
        this.getOrgInfo()
      } catch (error) {
        console.log(error)
      }
  },
  async showModal(info) {
		try {
            this.modalData ={...info}
  		this.isVisible = !this.isVisible
		} catch (error) {
			console.log(error);
		}
    },
        async getAccount() {
            try {
                const inf = await axios.get('getAccount');
                this.info = inf.data;
            } catch (error) {
                console.log(error);
            }
        },
        async deleteTask(recordid) {
            const confirm = window.prompt("Type yes if you are sure to delete the data");
            if(confirm === 'yes'){
                await axios.post("del",{
                id: recordid,
            });
            this.getAccount();
            }
            
        },
        cancelDialog() {
            this.isVisible = false;
        },
        cancelDialog() {
			this.isVisible = false;
		},
    },
};
</script>
