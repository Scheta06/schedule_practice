<template>
    <form action="">
        <h1>Регистрация</h1>
        <div class="input-block" v-for="item in inputValues" :key="item.name">
            <label :for="item.name">{{ item.title }}</label>
            <input :type="item.type" class="input" :name="item.name" required>
        </div>
        <button type="submit">Зарегистрироваться</button>
    </form>
</template>

<script setup>
import { reactive } from 'vue'
const inputValues = reactive([
    {
        title: 'Фамилия',
        name: 'surname',
        type: 'text',
    },
    {
        title: 'Имя',
        name: 'name',
        type: 'text',
    },
    {
        title: 'Отчество',
        name: 'patronymic',
        type: 'text',
    },
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
    {
        title: 'Повтор пароля',
        name: 'password_confirmation',
        type: 'password',
    },
]);
</script>