<template>
    <header class="header full-center-length">
        <router-link to="/" class="logotype">
            {{ logoTitle }}
        </router-link>
        <button class="nav-bar-btn full-column-display">
            <div class="nav-bar-row" v-for="item in 3" :key="item"></div>
        </button>
    </header>
</template>

<script setup>
import { ref, reactive } from 'vue'
const logoTitle = ref('MyCar');
</script>