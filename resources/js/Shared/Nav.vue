<template>
    <div>
        <nav class="mt-6">
            <ul class="list-disc">
                <li>
                    <NavLink href="/" :active="$page.component == 'Home'"
                        >Home</NavLink
                    >
                </li>
                <li>
                    <NavLink
                        href="/usuarios"
                        :active="$page.component == 'Usuarios'"
                        >Usuarios</NavLink
                    >
                </li>
                <li>
                    <NavLink
                        href="/configuracao"
                        :active="$page.component == 'Configuracao'"
                        >Configuração</NavLink
                    >
                </li>
            </ul>
        </nav>
    </div>
</template>

<script>
import { Link } from "@inertiajs/inertia-vue3";
import NavLink from "../Shared/NavLink";
export default {
    components: {
        NavLink,
    },
};
</script>