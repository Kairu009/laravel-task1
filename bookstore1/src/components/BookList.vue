<!-- src/components/BookList.vue -->
<template>
    <div>
      <h2>Available Books</h2>
      <div v-for="book in books" :key="book.id">
        <p>{{ book.title }} - ${{ book.price }}</p>
        <button @click="addToCart(book)">Add to Cart</button>
      </div>
    </div>
  </template>
  
  <script>
  export default {
    name: 'BookList',
    props: ['books'],
    methods: {
      addToCart(book) {
        this.$store.commit('addToCart', book);
      }
    }
  }
  </script>
  