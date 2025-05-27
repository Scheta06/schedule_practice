<template>
  <div class="container">
    <main class="welcome full-center-column-display full-height">
      <div>
        <h1>{{ companyTitle }}</h1>
        <div class="subtitle">
          {{ subTitle }}
        </div>
      </div>
      <div>
        <Router-link to="/login">Войти</Router-link>
      </div>
    </main>
  </div>
</template> 

<script setup>

import { ref, reactive } from "vue";
const companyTitle = ref('MyCar');
const subTitle = ref("Твой автомобиль - твои расходы");

</script>

<style scoped>
main.welcome {
  text-align: center;
}

main.welcome > div > h1 {
  font-weight: var(--bold);
}

.subtitle {
  margin-top: 20px;
  font-size: var(--font-size1);
}
</style>