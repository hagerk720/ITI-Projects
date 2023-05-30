<template>
    <div id="app" class="container">
      <h1>Create User</h1>
      <form @submit.prevent="createUser">
        <div class="mb-3">
          <label for="first_name" class="form-label">First Name</label>
          <input type="text" class="form-control" id="first_name" v-model="user.first_name">
        </div>
        <div class="mb-3">
          <label for="last_name" class="form-label">Last Name</label>
          <input type="text" class="form-control" id="last_name" v-model="user.last_name">
        </div>
        <div class="mb-3">
          <label for="gender" class="form-label">Gender</label>
          <select class="form-select" id="gender" v-model="user.gender">
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
          </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </template>

<script>
import axios from "axios";

    export default {
        name:"createUser",
        data() {
      return {
        user: {
          first_name: '',
          last_name: '',
          gender: '',
        }
      }
    },
    methods: {
      createUser: function() {
        axios.post('http://localhost:3000/users', this.user)
          .then(function(response) {
            console.log(response.data);
            this.user.first_name = '';
            this.user.last_name = '';
            this.user.gender = '';
            this.$router.push('/users')
          }.bind(this))
          .catch(function(error) {
            console.log(error);
          });
      }
    }

    }
</script>

<style scoped>

</style>