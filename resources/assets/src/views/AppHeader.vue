<template>
  <nav class="navbar" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
      <a class="navbar-item" href="https://bulma.io">
        <img src="https://bulma.io/images/bulma-logo.png" alt="Bulma: a modern CSS framework based on Flexbox">
      </a>
      <button class="button navbar-burger" data-target="nav-menu">
        <span></span>
        <span></span>
        <span></span>
      </button>
    </div>

    <div class="navbar-menu" id="nav-menu">
      <div class="navbar-start">
        <router-link class="navbar-item" to="/" exact>Home</router-link>
        <router-link class="navbar-item" to="/about" exact>About</router-link>
      </div>
    </div>
  </nav>
</template>
<script>
  import {mapGetters} from 'vuex';
  export default {
    computed: {
      ...mapGetters(['isAuthenticated'])
    }
  }
</script>
