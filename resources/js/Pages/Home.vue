<template>
    <div>
        <h1>{{ name }}</h1>
        <p>Usando</p>
        <ul>
            <li v-for="framework of frameworks" v-text="framework"></li>
        </ul>
    </div>
</template>
<script>
export default {
    props: {
        name: String,
        frameworks: Array,
    },
};
</script>