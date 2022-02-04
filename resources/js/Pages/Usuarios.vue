<template>
    <Layout>
        <h1 class="text-3xl">Usuarios</h1>
        <div style="margin-top: 400px">
            <p>{{ time }}</p>

            <Link href="/usuarios" class="text-blue-500" preserve-scroll>
                Carregar</Link
            >
        </div>
    </Layout>
</template>
<script>
import Layout from "../Shared/Layout";
import { Link } from "@inertiajs/inertia-vue3";
export default {
    components: {
        Layout,
        Link,
    },
    props: {
        time: String,
    },
};
</script>
