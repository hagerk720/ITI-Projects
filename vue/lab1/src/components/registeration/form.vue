<template>
    <div class="form-container">
    <form @submit.prevent="submitForm" class="form">
      <div class="form-group">
        <label for="name" class="form-label">Name:</label>
        <input type="text" id="name" v-model="name" class="form-input">
      </div>
      <div class="form-group">
        <label for="age" class="form-label">Age:</label>
        <input type="number" id="age" v-model="age" class="form-input">
      </div>
      <div class="form-group">
        <label for="role" class="form-label">Role:</label>
        <select id="role" v-model="role" class="form-select">
          <option value="user">User</option>
          <option value="admin">Admin</option>
        </select>
      </div>
      <button type="submit" class="submit-button">Submit</button>
    </form>
  </div>
</template>

<script>
    export default {
        name:"RegistrationForm" , 
        data() {
            return {
              name: '',
              age: null,
              role: 'user',
            }
        },
        methods: {
          submitForm() {
            this.$emit('form-submitted', { name: this.name, age: this.age, role: this.role });
            this.name = '';
            this.age = null;
            this.role = 'user';
          }
        }
    }
</script>

<style scoped>
.form-container {
    max-width: 400px;
    margin: 0 auto;
  }

  .form {
    padding: 20px;
    background-color: #f2f2f2;
    border-radius: 5px;
  }

  .form-group {
    margin-bottom: 10px;
  }

  .form-label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
  }

  .form-input,
  .form-select {
    width: 100%;
    padding: 8px;
    font-size: 16px;
    border-radius: 3px;
    border: 1px solid #ccc;
  }

  .submit-button {
    display: block;
    width: 100%;
    padding: 10px;
    margin-top: 10px;
    font-size: 16px;
    background-color: #4CAF50;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
  }

  .submit-button:hover {
    background-color: #45a049;
  }
</style>