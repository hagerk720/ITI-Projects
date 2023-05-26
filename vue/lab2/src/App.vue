<template>
<navbarApp v-if="!$route.meta.hideNavbar"/>
  <router-view></router-view>

</template>

<script>
import navbarApp from "./components/pages/navbar.vue"

export default {
  name: 'App',
  components: {
    navbarApp
  }
}
</script>

