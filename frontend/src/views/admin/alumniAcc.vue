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
    <li class="active">
                                        <a href="/alumniAcc">
                                            <span class="bot-line"></span>Alumni</a>
                                    </li>
                                    <li>
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
                  <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 20px;">
    <a href="/index1" style="text-decoration: none; color: inherit; cursor: pointer;">
        <span style="font-size: 24px; margin-right: 10px; cursor: pointer; font-weight: bold;">&larr;</span>
    </a>
    <h2 style="text-align: center; margin: 0;">Alumni's Account</h2>
    <div style="width: 24px;"></div>
</div>

    <table style="width: 100%; border-collapse: collapse; margin-top: 20px; border: 1px solid #ddd;">
<thead>
    <tr style="background-color: #f2f2f2;">
        <th style="padding: 12px; text-align: center; border: 1px solid #ddd;">ID</th>
        <th style="padding: 12px; text-align: center; border: 1px solid #ddd;">Full Name</th>
        <th style="padding: 12px; text-align: center; border: 1px solid #ddd;">ID Number</th>
        <th style="padding: 12px; text-align: center; border: 1px solid #ddd;">Action</th>
    </tr>
</thead>
<tbody v-for="info in info" :key="info.id">
    <tr>
        <td style="padding: 12px; border: 1px solid #ddd;">{{ info.id }}</td>
        <td style="padding: 12px; border: 1px solid #ddd;">{{ info.Fullname }}</td>
        <td style="padding: 12px; border: 1px solid #ddd;">{{ info.IDNum }}</td>
        <td style="padding: 12px; border: 1px solid #ddd;">
            <button class="btn btn-primary" @click="updateTask(info)">Update</button>
            <span style="margin-left: 5px; margin-right: 5px;"></span> <!-- Adjust the spacing here -->
            <button class="btn btn-danger" @click="deleteTask(info.id)">Delete</button>
        </td>
    </tr>
</tbody>
<tr v-if="info.isUpdating">
        <td colspan="4">
            <form @submit.prevent="saveUpdatedTask(info)">
                <label for="updatedFullname">Full Name:</label>
                <input type="text" v-model="info.updatedFullname" required>

                <label for="updatedIDNum">ID Number:</label>
                <input type="text" v-model="info.updatedIDNum" required>

                <button type="submit" class="btn btn-success">Save</button>
                <button type="button" class="btn btn-secondary" @click="cancelUpdate(info)">Cancel</button>
            </form>
        </td>
    </tr>
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
        isVisible: false, // Assuming you are using a modal
        modalData: {},    // Data for the modal
    };
},
created() {
    this.getAccount();
},
methods: {
    async getAccount() {
        try {
            const inf = await axios.get('getAccount');
            this.info = inf.data;
        } catch (error) {
            console.log(error);
        }
    },
    async showModal(info) {
        try {
            this.modalData = { ...info };
            this.isVisible = true;
        } catch (error) {
            console.log(error);
        }
    },
    cancelDialog() {
        this.isVisible = false;
    },
    async deleteTask(recordid) {
        const confirm = window.prompt("Type yes if you are sure to delete the data");
        if (confirm === 'yes') {
            await axios.post("del", {
                id: recordid,
            });
            this.getAccount();
        }
    },
    async deleteData(id) {
        try {
            await axios.delete(`deleteData/${id}`);
            this.getAccount();
        } catch (error) {
            console.log(error);
        }
    },
    updateTask(info) {
        // Set the 'isUpdating' property to true for the clicked row
        info.isUpdating = true;

        // Set initial values for the updatedFullname and updatedIDNum
        info.updatedFullname = info.Fullname;
        info.updatedIDNum = info.IDNum;
    },
    cancelUpdate(info) {
        // Set the 'isUpdating' property to false to cancel the update
        info.isUpdating = false;
    },
    async saveUpdatedTask(info) {
        try {
            // Implement the logic to save the updated task
            // For example, you can send a request to update the data on the server
            await axios.post('updateData', {
                id: info.id,
                updatedFullname: info.updatedFullname,
                updatedIDNum: info.updatedIDNum,
            });

            // After updating, set 'isUpdating' back to false
            // and update other relevant properties
            info.Fullname = info.updatedFullname;
            info.IDNum = info.updatedIDNum;
            info.isUpdating = false;

            // Refresh the data
            this.getAccount();
        } catch (error) {
            console.log(error);
        }
    },
    async insertData() {
        try {
            const data = { name: this.name, email: this.email };
            await axios.post('addData', data);
            this.getAccount();
            this.name = null;
            this.email = null;
        } catch (error) {
            console.log(error);
        }
    },
},

}
</script>
