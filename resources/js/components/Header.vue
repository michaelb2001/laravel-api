<template>
  <header>
      <nav>
          <li><router-link :to="{ name: 'home'}">HOME</router-link></li>
          <li><router-link :to="{ name: 'about'}">CHI SIAMO</router-link></li>
      </nav>
  </header>
</template>

<script>
export default {
    name: "Header"
}
</script>

<style>
    li{
        cursor: pointer;
    }
</style>