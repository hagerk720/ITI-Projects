<template>
    <div>
      <h1>Users List</h1>
      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="user in users" :key="user.id">
            <th scope="row">{{ user.id }}</th>
            <td>{{ user.first_name }}</td>
            <td>{{ user.last_name }}</td>
            <td>
              <div class="d-flex align-items-center">
                <router-link class="btn btn-sm btn-primary me-2" :to="`/users/${user.id}/edit`">
                  Edit
                </router-link>
                <button class="btn btn-sm btn-danger" @click="deleteUser(user.id)">
                  Delete
                </button>
                <router-link :to="`/users/${user.id}`" class="ms-4">
                 Details
                </router-link>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </template>

<script>
import axios from "axios";

    export default {
        name:"allUsers",
        created() {
    this.getAllUsers();
  },
  data() {
    return {
      users: [],
    };
  },
  methods: {
    getAllUsers() {
      axios
        .get("http://localhost:3000/users")
        .then((res) => {
          console.log(res.data);
          this.users = res.data
        })
        .catch((err) => console.log(err));
    },
    deleteUser(id){
        axios.delete(`http://localhost:3000/users/${id}`)
        .then((res)=>{
            console.log(res.data)
            this.getAllUsers()
        })
        .catch((err)=>console.log(err))
    },
  },
    }
</script>

<style scoped>

</style>