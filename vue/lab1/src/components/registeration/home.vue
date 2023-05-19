<template>
    <div class="container">
     <button type="button" @click="showForm=true;showUsers=false;showAdmins=false" class="btn btn-success">Form</button>
     <button type="button" @click="showUsers=true;showAdmins=false;showForm=false " class="btn btn-info">Users</button>
     <button type="button" @click="showAdmins=true;showUsers=false;showForm=false " class="btn btn-warning">Admins</button>
     <div v-if="showForm" >
        <RegistrationForm  @form-submitted="addUser"/>  
     </div>
     <div v-if="showUsers">
      <h2>Users</h2>
      <UsersTable :users="filteredUsers" @delete-user="deleteUser"/>
    </div>

     <div v-if="showAdmins">
        <h2>Admins</h2>
      <AdminsTable :users="filteredAdmins" @delete-user="deleteUser"/>      
     </div>
  </div>
</template>
<script>
import RegistrationForm from './form.vue'
import UsersTable from './users.vue'
import AdminsTable from './admins.vue'

export default {
    name: 'HomePage',
    components:{
        RegistrationForm,
        UsersTable,
        AdminsTable
    },
    data() {
        return {
          showForm: false,
          showUsers: false,
          showAdmins: false,
          name: '',
          age: null,
          role: 'user',
          users: []
        }
    },
  methods: {

    addUser(userData) {
      this.users.push({
        id: Date.now(),
        name: userData.name,
        age: userData.age,
        role: userData.role
      });
      this.showForm = false;
    },
    deleteUser(id) {
      this.users = this.users.filter(user => user.id !== id);
    }
  },
  computed: {
    filteredUsers() {
      return this.users.filter(user => user.role === 'user');
        },
    filteredAdmins() {
      return this.users.filter(user => user.role === 'admin');
        }
     }
    }
</script>

<style scoped>

</style>