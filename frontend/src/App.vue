<template>
  <div id="app">
    <div class="container full-column-display" style="gap: 100px">
      <Header></Header>
      <Main />
      <Footer></Footer>
    </div>
  </div>
</template>

<script>
import Header from "./components/partials/Header.vue";
import Footer from "./components/partials/Footer.vue";
import Main from "./components/parts/main-page/Main.vue";

export default {
  components: {
    Header,
    Footer,
    Main,
  },
};
</script>
