<!-- src/components/Cart.vue -->
<template>
    <div>
      <h2>Shopping Cart</h2>
      <div v-for="(item, index) in cart" :key="index">
        <p>{{ item.title }} - ${{ item.price }}</p>
        <button @click="removeFromCart(index)">Remove</button>
      </div>
      <p>Total: ${{ totalPrice }}</p>
      <button @click="purchase">Purchase</button>
    </div>
  </template>
  
  <script>
  export default {
    name: 'Cart',
    computed: {
      cart() {
        return this.$store.getters.cartItems;
      },
      totalPrice() {
        return this.$store.getters.totalPrice;
      }
    },
    methods: {
      removeFromCart(index) {
        this.$store.commit('removeFromCart', index);
      },
      purchase() {
        this.$store.dispatch('purchase');
      }
    }
  }
  </script>
  