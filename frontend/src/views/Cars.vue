<template>
  <div>
    <div class="profile-section flex">
      <div class="profile-photo full-width"></div>
      <div class="profile-info full-column-display full-width">
        <h2>{{ name }}</h2>
        <div class="emal">
          {{ email }}
        </div>
        <router-link to="">
          <button class="editProfile full-width">Редактировать профиль</button>
        </router-link>
      </div>
    </div>
    <div class="car-section column-display">
      <div>
        <h2>Мои автомобили</h2>
      </div>
      <div class="car-block flex flex-wrap">
        <router-link
          to="/"
          class="car-item full-column-display full-height full-width"
          v-for="item in carsInfo"
          :key="item.id"
        >
          <div class="car-info-title">
            {{ setString(item) }}
          </div>
          <div class="car-title">
            {{ item.title }}
          </div>
        </router-link>
      </div>
    </div>
  </div>
</template>

<script setup>
import { ref, reactive, capitalize } from "vue";
const name = ref("Матвей Иванов");
const email = ref("admin@bk.ru");
const carsInfo = reactive([
  {
    id: 1,
    title: "Бешенная табуретка",
    carInfo: {
      mark: "toyota",
      pattern: "mark 2",
      generation: "x100",
    },
  },
]);

function setString(item) {
  const carInfo = item.carInfo;

  return `${capitalize(carInfo.mark)} ${carInfo.pattern} ${carInfo.generation}`;
}
</script>
