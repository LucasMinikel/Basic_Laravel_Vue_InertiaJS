<template>
    <div>
        <nav class="mt-6">
            <ul class="list-disc">
                <li>
                    <Link href="/" class="text-blue-500 hover:underline"
                        >Home</Link
                    >
                </li>
                <li>
                    <Link href="/usuarios" class="text-blue-500 hover:underline"
                        >Usuarios</Link
                    >
                </li>
                <li>
                    <Link
                        href="/configuracao"
                        class="text-blue-500 hover:underline"
                        >Configuração</Link
                    >
                </li>
                <li>
                    <Link
                        href="/logout"
                        method="post"
                        :data="{ foo: 'bar' }"
                        as="button"
                        class="text-blue-500 hover:underline"
                        >Sair</Link
                    >
                </li>
            </ul>
        </nav>
    </div>
</template>

<script>
import { Link } from "@inertiajs/inertia-vue3";
export default {
    components: {
        Link,
    },
};
</script>