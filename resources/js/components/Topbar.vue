<template>
  <b-navbar toggleable="lg" type="dark" variant="primary">
    <b-navbar-brand :to="{ name: 'home' }">GlossaryApp</b-navbar-brand>

    <b-navbar-toggle target="nav-collapse"></b-navbar-toggle>

    <b-collapse id="nav-collapse" is-nav>
      <b-navbar-nav>
        <b-nav-item :to="{ name: 'glossaries' }">Glossaries</b-nav-item>
        <b-nav-item href="#">See What's more</b-nav-item>
      </b-navbar-nav>
    </b-collapse>
  </b-navbar>       
</template>
<script>
    export default {}
</script>