<template>
    <div>
        <h2>Calculatrice</h2>

        <div v-if="error" class="error">{{ error }}</div>
        <div ><strong>Résultat :</strong> {{ result }}</div>

        <form @submit.prevent="calculate">
            <label>Nombre 1 :</label>
            <input type="number" v-model="num1" required>

            <label>Opération :</label>
            <select v-model="operation">
                <option value="add">+</option>
                <option value="subtract">-</option>
                <option value="multiply">×</option>
                <option value="divide">÷</option>
            </select>

            <label>Nombre 2 :</label>
            <input type="number" v-model="num2" required>

            <button type="submit">Calculer</button>
        </form>
    </div>
</template>

<script setup>
import { ref } from "vue";
import axios from "axios";

const num1 = ref(null);
const num2 = ref(null);
const operation = ref("add");
const result = ref(null);
const error = ref(null);

const calculate = async () => {
    result.value = null;
    error.value = null;

    try {
        const response = await axios.post("/api/calculator", {
            num1: num1.value,
            num2: num2.value,
            operation: operation.value,
        });
        result.value = response.data.result;
    } catch (err) {
        error.value = err.response?.data?.message || "Une erreur est survenue";
    }
};
</script>

<style>
.error {
    color: red;
}
body{
    background-color: #f0f0f0;
    color: black;
}
</style>
