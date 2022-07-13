<template>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <h1 class="navbar-brand" href="#">BoolPress</h1>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active mr-3">
        <router-link to="/">Home</router-link>
      </li>
      <li class="nav-item mr-3">
        <router-link to="/about">About</router-link>
      </li>
      <li class="nav-item">
        <router-link to="/blog">Blog</router-link>
      </li>
    </ul>
  </div>
</nav>
</template>

<script>

export default {
    name: 'Header',
}
</script>

<style>

</style>