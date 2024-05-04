<template>
  <img alt="Vue logo" src="./assets/logo.png">
  <HelloWorld msg="Welcome to Your Vue.js App"/>
</template>

<script>
// src/store/index.js
import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex)

export default new Vuex.Store({
  state: {
    books: [
      { id: 1, title: 'Book 1', price: 10 },
      { id: 2, title: 'Book 2', price: 15 },
      { id: 3, title: 'Book 3', price: 20 },
      { id: 4, title: 'Book 4', price: 25 },
      { id: 5, title: 'Book 5', price: 30 },
      { id: 6, title: 'Book 6', price: 35 },
      { id: 7, title: 'Book 7', price: 40 },
      { id: 8, title: 'Book 8', price: 45 },
      { id: 9, title: 'Book 9', price: 50 },
      { id: 10, title: 'Book 10', price: 55 },
    ],
    cart: [],
    isAuthenticated: false
  },
  mutations: {
    addToCart(state, book) {
      state.cart.push(book);
    },
    removeFromCart(state, index) {
      state.cart.splice(index, 1);
    },
    updateAuthenticationStatus(state, status) {
      state.isAuthenticated = status;
    },
  },
  actions: {
    async purchase({ commit, state }) {
      // Handle purchase transactions asynchronously
      // For demonstration purposes, let's just log a message
      console.log('Purchase completed:', state.cart);
      commit('updateAuthenticationStatus', false); // Reset authentication status after purchase
      commit('clearCart'); // Clear the cart after purchase
    },
    async authenticateUser({ commit }, credentials) {
      // Simulate user authentication and authorization asynchronously
      // For demonstration purposes, let's just log a message
      console.log('User authenticated with credentials:', credentials);
      commit('updateAuthenticationStatus', true); // Update authentication status
    },
  },
  getters: {
    availableBooks: state => state.books,
    cartItems: state => state.cart,
    totalPrice: state => state.cart.reduce((total, item) => total + item.price, 0),
  }
})

</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
