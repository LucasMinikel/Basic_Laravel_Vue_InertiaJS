<template>
    <Head title="Usuarios" />
    <div class="flex justify-between mb-6">
        <div class="flex items-center">
            <h1 class="text-3xl font-bold">Usuários</h1>
            <Link href="/usuarios/create" class="text-blue-500 text-sm ml-4"
                >Novo usuario</Link
            >
        </div>
        <input
            v-model="search"
            type="text"
            placeholder="Pesquisar..."
            class="border px-2 rounded-lg"
        />
    </div>
    <div class="flex flex-col">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div
                class="
                    py-2
                    align-middle
                    inline-block
                    min-w-full
                    sm:px-6
                    lg:px-8
                "
            >
                <div
                    class="
                        shadow
                        overflow-hidden
                        border-b border-gray-200
                        sm:rounded-lg
                    "
                >
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th
                                    scope="col"
                                    class="
                                        px-6
                                        py-3
                                        text-left text-xs
                                        font-medium
                                        text-gray-500
                                        uppercase
                                        tracking-wider
                                    "
                                >
                                    Nome
                                </th>
                                <th scope="col" class="relative px-6 py-3">
                                    <span class="sr-only">Ações</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <tr v-for="user in users.data" :key="user.id">
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div>
                                            <div
                                                class="
                                                    text-sm
                                                    font-medium
                                                    text-gray-900
                                                "
                                            >
                                                {{ user.name }}
                                            </div>
                                            <div class="text-sm text-gray-500">
                                                {{ user.email }}
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td
                                    class="
                                        px-6
                                        py-4
                                        whitespace-nowrap
                                        text-right text-sm
                                        font-medium
                                    "
                                >
                                    <Link
                                        :href="`/users/${user.id}/edit`"
                                        class="
                                            text-indigo-600
                                            hover:text-indigo-900
                                        "
                                        >Editar</Link
                                    >
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <Pagination :links="users.links" class="mt-6" />
</template>


<script setup>
import Pagination from "../../Shared/Pagination";
import { ref, watch } from "vue";
import { Inertia } from "@inertiajs/inertia";
import debounce from "lodash/debounce";
let props = defineProps({
    users: Object,
    filters: Object,
});
let search = ref(props.filters.search);
watch(
    search,
    debounce(function (value) {
        Inertia.get(
            "/usuarios",
            { search: value },
            {
                preserveState: true,
                replace: true,
            }
        );
    }, 200)
);
</script>