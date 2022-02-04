<template>
    <div>
        <h1>Usuarios</h1>
        <Nav />
    </div>
    <div style="margin-top: 400px">
        <p>{{ time }}</p>
        <Link href="/usuarios" class="text-blue-500" preserve-scroll>
            Carregar</Link
        >
    </div>
</template>
<script>
import Nav from "../Shared/Nav";
import { Link } from "@inertiajs/inertia-vue3";
export default {
    components: {
        Nav,
        Link,
    },
    props: {
        time: String,
    },
};
</script>