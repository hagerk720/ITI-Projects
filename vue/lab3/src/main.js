import { createApp } from "vue";
import App from "./App.vue";
import { createWebHistory, createRouter } from "vue-router";
import "bootstrap/dist/css/bootstrap.css";
import "bootstrap-vue/dist/bootstrap-vue.css";
import allUsers from "./components/pages/allUsers.vue";
import createUser from "./components/pages/createUser.vue";
import updateUser from "./components/pages/updateUser.vue";
import userDetails from "./components/pages/userDetails.vue";
import errorsPage from "./components/pages/errors.vue";
const routes = [
  {
    path: "/",
    component: allUsers,
    alias: "/users",
  },
  {
    path: "/users/:id",
    component: userDetails,
  },
  {
    path: "/users/new",
    component: createUser,
  },
  {
    path: "/users/:id/edit",
    component: updateUser,
    name: "editUser",
  },
  {
    path: "/:NotFound(.*)*",
    component: errorsPage,
    meta: { hideNavbar: true },
  },
];

const router = createRouter({
  history: createWebHistory(),
  routes,
});
createApp(App).use(router).mount("#app");
