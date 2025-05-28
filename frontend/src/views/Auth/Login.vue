<template>
    <form action="">
        <h1>Авторизация</h1>
        <div class="input-block" v-for="item in inputValues" :key="item.name">
            <label :for="item.name">{{ item.title }}</label>
            <input :type="item.type" class="input" :name="item.name" required>
        </div>
        <button type="submit">Войти</button>
    </form>
</template>

<script setup>
import { reactive } from 'vue'
import api from '../../services/api.js'
const inputValues = reactive([
    {
        title: 'E-mail',
        name: 'email',
        type: 'email',
    },
    {
        title: 'Пароль',
        name: 'password',
        type: 'password',
    },
]);
</script>