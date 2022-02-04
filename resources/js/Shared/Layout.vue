<template>
    <Head>
        <title>App</title>
        <meta
            type="description"
            content="Informação padrão"
            head-key="description"
        />
    </Head>
    <section class="p-6 bg-gray-200">
        <header class="flex justify-between">
            <div class="flex items-center">
                <h1 class="font-bold text-lg">APP</h1>
                <p class="text-sm ml-4">
                    {{ nome }}
                </p>
            </div>
            <Nav />
        </header>
    </section>
    <section class="p-6">
        <div class="max-w-3xl mx-auto">
            <slot />
        </div>
    </section>
</template>
<script >
import Nav from "./Nav";

export default {
    components: {
        Nav,
    },

    computed: {
        nome() {
            return this.$page.props.auth.user.name;
        },
    },
};
</script>