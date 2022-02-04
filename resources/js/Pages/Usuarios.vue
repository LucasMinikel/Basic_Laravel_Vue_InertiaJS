<template>
    <h1 class="text-3xl font-bold">Usuarios</h1>
    <div style="margin-top: 400px">
        <p>{{ time }}</p>

        <Link href="/usuarios" class="text-blue-500" preserve-scroll>
            Carregar</Link
        >
    </div>
</template>
<script setup>
defineProps({
    time: String,
});
</script>