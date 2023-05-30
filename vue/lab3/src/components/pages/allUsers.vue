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
import { ref } from "vue";

    export default {
        name:"allUsers",
        setup() {
    const users = ref([]);

    const getAllUsers = function() {
      axios
        .get("http://localhost:3000/users")
        .then((res) => {
          console.log(res.data);
          users.value = res.data; // Update the value of the reactive reference
        })
        .catch((err) => console.log(err));
    };
    getAllUsers(); // Call the function to fetch users
    return {
      users,
    };
  },
    }
</script>

<style scoped>

</style>