<template>
    <div class="container">
      <div class="card">
        <div class="card-header">
          User Details
        </div>
        <div class="card-body">
          <h5 class="card-title">{{ first_name }} {{ last_name }}</h5>
          <p class="card-text">Gender: {{ gender }}</p>
        </div>
      </div>
    </div>
  </template>

<script>
import axios from "axios";
    export default {
        name: "userDetails",
        data(){
            return{
                id:'',
                first_name:'',
                last_name:'',
                gender:''
            }
        },
        created(){
          this.getUserById()
        },
        methods:{
          getUserById(){
            this.id = this.$route.params.id;
            console.log(this.id)
            axios.get(` http://localhost:3000/users/${this.id}`)
            .then((res)=>{
              console.log(res.data)
              this.id = res.data.id
              this.first_name = res.data.first_name
              this.last_name = res.data.last_name
              this.gender = res.data.gender
            })
            .catch((err)=>console.log(err))
          },
          back(){
              this.$router.push('/users')
          }
        }
    }
</script>

<style scoped>

</style>