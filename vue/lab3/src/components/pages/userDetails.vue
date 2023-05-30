<template>
    <div class="container">
      <div class="card">
        <div class="card-header">
          User Details
        </div>
        <div class="card-body">
          <h5 class="card-title">{{ user.first_name }} {{ user.last_name }}</h5>
          <p class="card-text">Gender: {{ user.gender }}</p>
        </div>
      </div>
    </div>
  </template>

<script>
import axios from "axios";
import { ref, reactive } from "vue";
import { useRoute } from 'vue-router'
    export default {
        name: "userDetails",
        setup() {
        const route = useRoute();
        let user = reactive({
          first_name: ref(""),
          last_name: ref(""),
          gender: ref(""),
        });
      
        const getUserById = function() {
          let id = route.params.id;
          axios
            .get(`http://localhost:3000/users/${id}`)
            .then((res) => {
              user.first_name = res.data.first_name;
              user.last_name = res.data.last_name;
              user.gender = res.data.gender;
            })
            .catch((err) => console.log(err));
        };

    getUserById(); // Call the function to fetch users

    return {
      user
    };
  },
    }
</script>

<style scoped>

</style>