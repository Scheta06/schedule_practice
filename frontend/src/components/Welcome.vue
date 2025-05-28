<template>
  <main class="welcome full-center-column-display">
    <div class="full-height">
      <h1>{{ companyTitle }}</h1>
      <div class="subtitle">
        {{ subTitle }}
      </div>
    </div>
    <div>
      <router-link to="/cars" class="full-width">
        <button class="login-btn center full-width">Войти</button>
      </router-link>
    </div>
  </main>
</template> 

<script setup>
import { ref, reactive } from "vue";
const companyTitle = ref("MyCar");
const subTitle = ref("Твой автомобиль - твои расходы");
</script>

<style scoped>
main.welcome {
  text-align: center;
  height: calc(100vh - 300px);
}

main.welcome > div > h1 {
  font-weight: var(--bold);
}

.subtitle {
  margin-top: 20px;
  font-size: var(--font-size1);
}

.login-btn {
  font-size: var(--font-size1);
  font-weight: var(--bold);
  min-width: 350px;
  border-radius: var(--border-radius2);
  min-height: 100px;
}
</style>