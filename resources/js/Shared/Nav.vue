<template>
    <div>
        <nav>
            <ul class="flex space-x-5">
                <li>
                    <NavLink href="/" :active="$page.component == 'Home'"
                        >Home</NavLink
                    >
                </li>
                <li>
                    <NavLink
                        href="/usuarios"
                        :active="$page.component == 'Usuarios/Index'"
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
                <li>
                    <NavLink href="/logout" method="post">Sair</NavLink>
                </li>
            </ul>
        </nav>
    </div>
</template>

<script setup>
import NavLink from "@/Shared/NavLink";
</script>