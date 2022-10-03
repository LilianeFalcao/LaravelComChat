<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import axios from 'axios';
</script>

<template >
    <AppLayout title="Comunidade">
        <template #header class="font-semibold text-xl text-gray-800 leading-tight ">
            <div class=" flex m-auto bg-[#3B4A52]">
                <ul class="flex justify-between m-auto p-1 list-none">
                    <li class="flex justify-center m-auto p-[10px] text-white">
                        <a href="">Ação</a>
                    </li>
                    <li class="flex justify-center m-auto p-[10px] text-white">
                        <a href="">Comedia</a>
                    </li>
                    <li class="flex justify-center m-auto p-[10px] text-white">
                        <a href="">Slice of life</a>
                    </li>
                    <li class="flex justify-center m-auto p-[10px] text-white">
                        <a href="">Terror</a>
                    </li>
                    <li class="flex justify-center m-auto p-[10px] text-white">
                        <a href="">Sci - fi</a>
                    </li>
                    <li class="flex justify-center m-auto p-[10px] text-white">
                        <a href="">Mais</a>
                    </li>
                </ul>
            </div>
        </template>

        <div class="py-12 bg-[#0E181D]">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg flex"
                    style="min-height: 400px; max-height: 400px; ">

                    <!-- lista de usuarios-->
                    <div class="w-3/12 bg-[#23353E] border-r border-black overflow-y-scroll">
                        <ul>
                            <li v-for="user in users" :key="user.id" @click="() => {loadMessages(user.id)}"
                                class="p-6 text-lg text-white  leading-7 front-semibold border-b border-gray-200 hover:bg-gray-50 hover:bg-opacity-50 hover:cursor-pointer">
                                <p class="flex items-center">{{ user.name }}</p>
                                <span class="ml-2 w-2 h-2 bg-blue-800 rounded-full"></span>
                            </li>

                        </ul>
                    </div>
                    <!-- box mensagens-->
                    <div class="w-9/12 flex flex-col justify-between">

                        <!-- box mensagens-->

                        <div class="w-full p-6 flex flex-col overflow-y-scroll bg-[#23353E]">
                            <div class="w-full mb-3 text-right ">
                                <p class="inline-block p-2 rounded-lg messageFromMe text-white" style="max-width: 75%;">
                                    oi
                                </p>
                                <span class="block mt-1 text-xxs text-gray-400"> 2022/09/28 17:19 </span>
                            </div>
                            <div class="w-full mb-3">
                                <p class="inline-block p-2 rounded-lg messageToMe text-white" style="max-width: 75%;">
                                    tudo bem?
                                </p>
                                <span class="block mt-1 text-xxs text-gray-400"> 2022/09/28 17:19 </span>
                            </div>
                            <div class="w-full mb-3 text-right ">
                                <p class="inline-block p-2 rounded-lg messageFromMe text-white" style="max-width: 75%;">
                                    tudo e vc?
                                </p>
                                <span class="block mt-1 text-xxs text-gray-400"> 2022/09/28 17:19 </span>
                            </div>
                            <div class="w-full mb-3">
                                <p class="inline-block p-2 rounded-lg messageToMe text-white" style="max-width: 75%;">
                                    td
                                </p>
                                <span class="block mt-1 text-xxs text-gray-400"> 2022/09/28 17:19 </span>
                            </div>

                        </div>
                        <div class="w-full bg-[#23353E] p-6 border-t border-[#23353E] ">
                            <form>
                                <div class="flew rounded-md overflow-hidden border border-slate-300">
                                    <input type="text"
                                        class="focus:outline-none flex-1 rounded-lg focus:outline-none px-4 py-2 text-sm bg-[#23353E]">
                                    <button type="submit"
                                        class="rounded-lg bg-sky-900 hover:bg-teal-600 px-4 py-2 text-white">
                                        Enviar
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>

</template>

<script>

export default {

    components: {
        AppLayout,
    },
    data() {
        return {
            users: [],
            messages: []
        }
    },
    methods: {
        loadMessages: function (userId) {
            axios.get(`api/messages/${userId}`).then(response => {
                this.messages = response.data.messages
            })
        }
    },
    mounted() {
        axios.get('api/users')
            .then(response => {
                this.users = response.data.users
            })
    },
}
</script>

<style>
.messageFromMe {
    @apply bg-slate-200 bg-opacity-25;
}

.messageToMe {
    @apply bg-slate-400 bg-opacity-25;
}
</style>