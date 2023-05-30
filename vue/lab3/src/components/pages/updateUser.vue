<template>
    <div>
      <h1>Edit User</h1>
      <form @submit="updateUser">
        <label for="first_name">First Name:</label>
        <input v-model="user.first_name" type="text" id="first_name" required>
        
        <label for="last_name">Last Name:</label>
        <input v-model="user.last_name" type="text" id="last_name" required>
                
        <button type="submit">Save</button>
      </form>
    </div>
  </template>
<script>
import axios from 'axios';

export default {
    name : "updateUser" ,
  data() {
    return {
      user: {
        id: null,
        first_name: '',
        last_name: '',
      }
    }
  },
  created() {
    this.fetchUserData();
  },
  methods: {
    async fetchUserData() {
      const userId = this.$route.params.id;
      try {
        const response = await axios.get(`http://localhost:3000/users/${userId}`);
        this.user = response.data;
      } catch (error) {
        console.error(error);
      }
    },
     updateUser() {
        axios
        .put(`http://localhost:3000/users/${this.user.id}`, this.user)
        .then((res) => {
          console.log(res.data);
          this.$router.push('/users');
        })
        .catch((err) => console.log(err));
        this.$router.push('/users');

    }
  }
}
</script>

<style scoped>

</style>