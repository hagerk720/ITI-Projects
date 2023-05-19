<template>
    <div>
      <table>
        <thead>
          <tr>
            <th>Name</th>
            <th>Age</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="user in users" :key="user.id">
            <td>{{ user.name }}</td>
            <td>{{ user.age }}</td>
            <td><button @click="deleteUser(user.id)">Delete</button></td>
          </tr>
        </tbody>
      </table>
    </div>
  </template>
  
  <script>
  export default {
    name: "UsersTable",
    props: {
      users: {
        type: Array,
        required: true,
      },
    },
    methods: {
      deleteUser(id) {
        this.$emit("delete-user", id);
      },
    },
  };
  </script>
  
  <style scoped>
  table {
    border-collapse: collapse;
    width: 100%;
  }
  
  th,
  td {
    text-align: left;
    padding: 8px;
    border: 1px solid #ddd;
  }
  
  th {
    background-color: #4caf50;
    color: white;
  }
  </style>