<template>
  <div id="app">
    <img alt="logo" src="./assets/logo-aircraft.png">
    <AircraftList msg="Welcome to Your Vue.js App"/>
  </div>
</template>

<script>
import AircraftList from './components/AircraftList.vue'

export default {
  name: 'App',
  components: {
    AircraftList
  }
}
</script>

<style>
img {
  height: 150px;
}
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
