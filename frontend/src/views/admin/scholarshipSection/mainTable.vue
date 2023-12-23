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
    
<div style="font-family: Arial, sans-serif; margin: 20px;">
    
        <h2 style="text-align: center;">Scholarships and Cash Assistance Qualifiers</h2>
        <select v-model="selectedScholar" @change="filterByScholar" style="padding: 8px; font-size: 16px; border-radius: 5px; border: 1px solid #ccc;">
  <option value="">All Scholars</option>
  <option v-for="scholar in allScholars" :key="scholar">{{ scholar }}</option>
</select>



        <table style="width: 100%; border-collapse: collapse; margin-top: 20px; border: 1px solid #ddd;">  <thead>
        <tr style="background-color: #f2f2f2;">
            <th style="padding: 12px; text-align: center; border: 1px solid #ddd;">ID</th>
            <th style="padding: 12px; text-align: center; border: 1px solid #ddd;">ID Number</th>
            <th style="padding: 12px; text-align: center; border: 1px solid #ddd;">Full Name</th>
            <th style="padding: 12px; text-align: center; border: 1px solid #ddd;">Year & Section</th>
            <th style="padding: 12px; text-align: center; border: 1px solid #ddd;">College</th>
            <th style="padding: 12px; text-align: center; border: 1px solid #ddd;">CP Number</th>
            <th style="padding: 12px; text-align: center; border: 1px solid #ddd;">Email</th>
            <th style="padding: 12px; text-align: center; border: 1px solid #ddd;">Scholar Name</th>
            <th style="padding: 12px; text-align: center; border: 1px solid #ddd;">Action</th>
        </tr>
    </thead>
    <tbody v-for="info in filteredInfo" :key="info.id">
        <tr>
            <td style="padding: 12px; border: 1px solid #ddd;">{{ info.id }}</td>
            <td style="padding: 12px; border: 1px solid #ddd;">{{ info.stud_id }}</td>
            <td style="padding: 12px; border: 1px solid #ddd;">{{ info.full_name }}</td>
            <td style="padding: 12px; border: 1px solid #ddd;">{{ info.year_section }}</td>
            <td style="padding: 12px; border: 1px solid #ddd;">{{ info.college }}</td>
            <td style="padding: 12px; border: 1px solid #ddd;">{{ info.cp }}</td>
            <td style="padding: 12px; border: 1px solid #ddd;">{{ info.email }}</td>
            <td style="padding: 12px; border: 1px solid #ddd;">{{ info.scholar }}</td>
            <td style="padding: 12px; border: 1px solid #ddd;">
                <button class="btn btn-primary" @click="updateTask(info)">Update</button>
                <span style="margin-left: 5px; margin-right: 5px;"></span>
                <button class="btn btn-danger" @click="deleteTask(info.id)">Delete</button>
            </td>
        </tr>
    </tbody>
    
    <!-- <div class="modal" v-if="isEditing">
    <div class="modal-content">
        <span class="close" @click="cancelEdit">&times;</span>
        <h2>{{ updatedInfo.id ? 'Edit' : 'Add' }} Information</h2>
        <form @submit.prevent="saveEdit">
            <label for="updatedIDNumber">ID Number:</label>
            <input v-model="updatedInfo.stud_id" id="updatedIDNumber" required>

            <label for="updatedFullName">Full Name:</label>
            <input v-model="updatedInfo.full_name" id="updatedFullName" required>

            <label for="updatedYearSection">Year & Section:</label>
            <input v-model="updatedInfo.year_section" id="updatedYearSection" required>

            <label for="updatedCollege">College:</label>
            <input v-model="updatedInfo.college" id="updatedCollege" required>

            <label for="updatedCPNumber">CP Number:</label>
            <input v-model="updatedInfo.cp" id="updatedCPNumber" required>

            <label for="updatedEmail">Email:</label>
            <input v-model="updatedInfo.email" id="updatedEmail" required>

            <label for="updatedScholarName">Scholar Name:</label>
            <input v-model="updatedInfo.scholar" id="updatedScholarName" required>


            <button type="submit">{{ updatedInfo.id ? 'Save Changes' : 'Add Task' }}</button>
        </form>
    </div>
</div> -->
</table>

<div style="font-family: Arial, sans-serif; margin: 20px;">
  <h2 style="text-align: center;">PDF and Excel Files</h2>
  <table style="width: 100%; border-collapse: collapse; margin-top: 20px; border: 1px solid #ddd;">
    <thead style="background-color: #f2f2f2;">
      <tr>
        <th style="padding: 12px; text-align: center; border: 1px solid #ddd;">File Name</th>
        <th style="padding: 12px; text-align: center; border: 1px solid #ddd;">Action</th>
      </tr>
    </thead>
    <tbody>
      <tr v-for="file in pdfFiles" :key="file.id">
        <td style="padding: 12px; border: 1px solid #ddd;">{{ file.name }}</td>
        <td style="padding: 12px; border: 1px solid #ddd;">
          <button style="padding: 8px 16px; background-color: #4CAF50; color: white; border: none; border-radius: 3px; cursor: pointer;" @click="downloadPdf(file.name)">
            Download
          </button>
        </td>
      </tr>
    </tbody>
  </table>
</div>


<!-- <div style="text-align: right; margin-bottom: 15px;">
    <a href="/addScholar" class="btn btn-secondary">
        Add
    </a>
</div>

<form action="/uploadProfilePicture" method="post" enctype="multipart/form-data" style="margin-bottom: 15px;">
    <label for="profilePicture" style="display: block; margin-bottom: 5px;">Upload Profile Picture:</label>
    <input type="file" name="profilePicture" accept="image/*" style="margin-bottom: 10px;">
    <input type="submit" value="Upload" style="padding: 5px 10px; background-color: #4CAF50; color: white; border: none; border-radius: 3px; cursor: pointer;">
</form>

<form action="/uploadExcelFile" method="post" enctype="multipart/form-data" style="margin-bottom: 15px;">
    <label for="excelFile" style="display: block; margin-bottom: 5px;">Upload Excel File:</label>
    <input type="file" name="excelFile" accept=".xls, .xlsx" style="margin-bottom: 10px;">
    <input type="submit" value="Upload" style="padding: 5px 10px; background-color: #4CAF50; color: white; border: none; border-radius: 3px; cursor: pointer;">
</form>

</div> -->
<div style="text-align: right; margin-bottom: 15px;">
    <button style="background-color: #4CAF50; color: white; padding: 5px 10px; border: none; border-radius: 3px; cursor: pointer;" @click="openModal">Add</button>
</div>
<div v-if="showModal" class="modal" @click="handleModalClick" ref="modal" style="display: block;">
    <div class="modal-content" style="background-color: #fff; margin: 5% auto; padding: 20px; border: 1px solid #ccc; width: 80%; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">

<span class="close" @click="closeModal" style="color: #aaa; float: right; font-size: 28px; font-weight: bold; cursor: pointer;">&times;</span>

<form action="/addScholar" method="post" enctype="multipart/form-data" style="margin-top: 15px;">

    <button @click="addInformation" style="padding: 10px 20px; background-color: #4CAF50; color: white; border: none; border-radius: 3px; cursor: pointer; margin-bottom: 20px;">Add Information</button>

    <form @submit.prevent="uploadFile" style="margin-bottom: 15px;">
        <label for="pdfFile" style="display: block; margin-bottom: 5px;">Upload PDF File:</label>
        <input type="file" ref="pdfFile" accept=".pdf, .xls, .xlsx" style="margin-bottom: 10px;">
        <button style="padding: 5px 10px; background-color: #4CAF50; color: white; border: none; border-radius: 3px; cursor: pointer;">
          Upload
        </button>
      </form>


</form>
</div>

</div>

</div>

    </template>
    <!-- <style scoped>
    body {
        font-family: Arial, sans-serif;
    }
    .modal {
        display: none;
        position: fixed;
        z-index: 1;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgba(0,0,0,0.4);
        padding-top: 60px;
    }

    .modal-content {
        background-color: #fefefe;
        margin: 5% auto;
        padding: 20px;
        border: 1px solid #888;
        width: 80%;
    }

    .close {
        color: #aaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: black;
        text-decoration: none;
        cursor: pointer;
    }

    .btn-secondary {
        background-color: #4CAF50;
        color: white;
        padding: 5px 10px;
        border: none;
        border-radius: 3px;
        cursor: pointer;
    }
</style> -->
<script>
import axios from 'axios';

export default {
    data() {
        return {
            info: [],
            selectedScholar: '',
            allScholars: [],
            isEditing: false,
            updatedInfo: {},
            showModal: false,
            //
            pdfFiles: [],
        };
    },
    created() {
        this.getScholar();
    },
    computed: {
        filteredInfo() {
            if (this.selectedScholar !== '') {
                return this.info.filter((item) => item.scholar === this.selectedScholar);
            } else {
                return this.info;
            }
        },
    },

    mounted() {
    // Fetch the initial list of PDF files when the component is mounted
    this.fetchPdfFiles();
  },

    methods: {
        //
        async uploadFile() {
  const formData = new FormData();
  formData.append('uploadedFile', this.$refs.pdfFile.files[0]);

  try {
    // Use Axios to handle the file upload
    const response = await axios.post('uploadFile', formData);

    if (response.status === 200) {
      // If the upload is successful, fetch the updated list of files
      await this.fetchPdfFiles(); // Assuming you have a fetchFiles method
      this.closeModal();
    } else {
      console.error('Failed to upload file.');
    }
  } catch (error) {
    console.error('Error during file upload:', error);
  }
},
async deleteTask(recordid) {
        const confirm = window.prompt("Type yes if you are sure to delete the data");
        if (confirm === 'yes') {
            await axios.post("dele", {
                id: recordid,
            });
            this.getScholar();
        }
    },
    async deleteData(id) {
        try {
            await axios.delete(`deleteData/${id}`);
            this.getScholar();
        } catch (error) {
            console.log(error);
        }
    },


    async fetchPdfFiles() {
      try {
        // Use Axios to fetch the list of PDF files
        const response = await axios.get('getPdfFiles');

        if (response.status === 200) {
          this.pdfFiles = response.data;
        } else {
          console.error('Failed to fetch PDF files.');
        }
      } catch (error) {
        console.error('Error during PDF files fetch:', error);
      }
    },

    downloadPdf(fileName) {
  // Use Axios to initiate the download
  axios({
    method: 'get',
    url: `http://localhost:8080/downloadPdf/${fileName}`, // Add the base URL
    responseType: 'blob', // Important: responseType 'blob' for binary data
  })
  .then(response => {
    // Create a blob from the response data
    const blob = new Blob([response.data], { type: 'application/pdf' });

    // Create a link element and set its attributes for download
    const link = document.createElement('a');
    link.href = window.URL.createObjectURL(blob);
    link.download = fileName;

    // Append the link to the document and trigger the download
    document.body.appendChild(link);
    link.click();

    // Clean up: remove the link and revoke the blob URL
    document.body.removeChild(link);
    window.URL.revokeObjectURL(link.href);
  })
  .catch(error => {
    console.error('Error during PDF download:', error);
  });
},


        //
        async getScholar() {
            try {
                const response = await axios.get('getScholar');
                this.info = response.data;
                this.filterByScholar();
            } catch (error) {
                console.error(error);
            }
        },
        filterByScholar() {
            this.allScholars = [...new Set(this.info.map((item) => item.scholar))];
            this.sortInfoByScholar();
        },
        sortInfoByScholar() {
            this.info.sort((a, b) => a.scholar.localeCompare(b.scholar));
        },
        updateTask(info) {
            this.updatedInfo = { ...info };
            this.isEditing = true;
            this.openModal();
        },
        saveEdit() {
    if (this.updatedInfo.id) {
        // Implement logic to update existing task on the server
        axios.put('updateInfo/' + this.updatedInfo.id, this.updatedInfo)
            .then(() => {
                console.log('Information updated successfully.');
                // You may want to refresh the data after updating
                this.getScholar();
                this.closeModal();
            })
            .catch((error) => {
                console.error('Error updating information:', error);
            })
            .finally(() => {
                // Reset state
                this.isEditing = false;
                this.updatedInfo = {};
            });
    } else {
        // Implement logic to add a new task on the server
        console.log('Adding task:', this.updatedInfo);

        // Make an axios request to add the new information on the server
        axios.post('addInfo', this.updatedInfo)
            .then(() => {
                console.log('Information added successfully.');
                // You may want to refresh the data after adding
                this.getScholar();
                this.closeModal();
            })
            .catch((error) => {
                console.error('Error adding information:', error);
            })
            .finally(() => {
                // Reset state
                this.isEditing = false;
                this.updatedInfo = {};
            });
    }
},
openModal() {
      console.log('Open modal method called.');
      this.showModal = true;
      console.log('showModal set to true.');
    },

    closeModal() {
      this.showModal = false;
    },
    addInformation() {
    // Implement logic to add information to the server
    // For example, you can use axios.post('/addInformation', yourDataObject)
    // Make sure to handle success and error cases accordingly

    // After successfully adding information, navigate to the insertScholar route
    this.$router.push('/addScholar');
  },
},
}
</script>
