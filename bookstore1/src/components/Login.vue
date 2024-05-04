<!-- src/components/Login.vue -->
<template>
    <div>
      <h2>Login</h2>
      <input type="text" v-model="username" placeholder="Username">
      <input type="password" v-model="password" placeholder="Password">
      <button @click="login">Login</button>
    </div>
  </template>
  
  <script>
  export default {
    name: 'Login',
    data() {
      return {
        username: '',
        password: ''
      };
    },
    methods: {
      login() {
        const credentials = {
          username: this.username,
          password: this.password
        };
        this.$store.dispatch('authenticateUser', credentials);
      }
    }
  }
  </script>
  