<template>
    <!-- HEADER DESKTOP-->
    <header class="header-desktop3 d-none d-lg-block" style="background-color: darkgreen;">
<div class="section__content section__content--p35">
<div class="header3-wrap">
    <a class="navbar-brand d-flex align-items-center text-center py-0 px-4 px-lg-5" href="/" style="text-decoration: none; color: #333; display: flex; align-items: center;">
<div style="margin-right: 10px;">
<div style="width: 40px; height: 40px; background-color: #3498db; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
    <img src="../../../../public/img/college logo/osas.jpg" alt="Image" style="border-radius: 50%; max-width: 100%; height: auto;">
</div>
</div>
<h1 class="m-0 text-primary" style="font-size: 1rem; font-weight: bold;">OSAS</h1>
</a>
    <div class="header__navbar">
        <ul class="list-unstyled">
            <li class="has-sub">
                <a href="#">
                    <i class="fas fa-tachometer-alt"></i>Scholarship
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
                <a href="/mainTable">
                    <span class="bot-line"></span>Table</a>
            </li>
            <li>
                <a href="/stat">
                    <span class="bot-line"></span>Statistics</a>
            </li>
            <li>
                <a href="/payrollsTable">
                    <span class="bot-line"></span>Date of Payrolls</a>
            </li>
        </ul>
    </div>
    <div class="header__tool">
    <div class="account-wrap">
        <div class="account-item account-item--style2 clearfix js-item-menu">
            <div class="image">
                <img src="../../../../public/img/icons/minsu.jpg" alt="MinSU" />
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


<!-- Vue Dynamic Form -->
<form @submit.prevent="insertData" style="text-align: center; margin-top: 20px;">
<div v-for="(field, label) in formFields" :key="label" style="display: flex; justify-content: center; align-items: center; margin-bottom: 20px;">
<label :for="label" style="margin-right: 10px;">{{ label }}</label>
<input v-if="field.type === 'text'" type="text" :id="label" :name="label" v-model="formData[label]" style="padding: 8px; width: 150px;">
<input v-else-if="field.type === 'date'" type="date" :id="label" :name="label" v-model="formData[label]" style="padding: 8px; width: 150px;">
</div>

<button type="submit" style="padding: 10px 20px; font-size: 16px; background-color: #008CBA; color: white; border: none; border-radius: 5px;">Insert</button>
</form>
</template>
<script>
import axios from 'axios';

export default {
data() {
return {
formData: {
id: '',
stud_id: '',
full_name: '',
year_section: '',
college: '',
cp: '',
email: '',
scholar: ''
},
formFields: {
stud_id: { type: 'text' },
full_name: { type: 'text' },
year_section: { type: 'text' },
college: { type: 'text' },
cp: { type: 'text' },
email: { type: 'text' },
scholar: { type: 'text' }
}
};
},
methods: {
insertData() {
axios.post('addScholar', this.formData)
.then(response => {
console.log(response.data);
this.$router.push('/mainTable');
})
.catch(error => {
console.error(error);
});
},
handleSubmit() {
axios.post('addScholar', {
stud_id: this.stud_id,
full_name: this.full_name,
year_section: this.year_section,
college: this.college,
cp: this.cp,
email: this.email,
scholar: this.scholar,
})
.then(response => {
// Handle success
console.log(response.data);
this.$router.push('/payrollsTable');
})
.catch(error => {
// Handle error
console.error(error);
});
},
},
};
</script>
