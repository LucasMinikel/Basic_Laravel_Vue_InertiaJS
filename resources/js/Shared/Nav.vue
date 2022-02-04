<template>
    <div>
        <nav>
            <ul class="flex list-disc space-x-4 list-inside">
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
import NavLink from "../Shared/NavLink";
export default {
    components: {
        NavLink,
    },
};
</script>