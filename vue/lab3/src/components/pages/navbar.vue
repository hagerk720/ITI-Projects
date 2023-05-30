<template>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <router-link class="nav-link" to="/">All Users </router-link> 
      </li>
      <li class="nav-item">
        <router-link class="nav-link" to="/users/new">Create</router-link>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link disabled" href="#">errors</a>
      </li> -->
    </ul>
  </div>
  </nav>
</template>

<script>
    export default {
        name:'navbarApp'
    }
</script>

<style scoped>

</style>