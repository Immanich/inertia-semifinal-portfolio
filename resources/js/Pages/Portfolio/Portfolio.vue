<script setup>
import { defineProps } from 'vue';  
import { Link, usePage } from '@inertiajs/inertia-vue3' // Corrected import

const props = defineProps({
    portfolio: Array
})

const deletePortfolio = (id) => {
    if (confirm('Delete this?')) {
        const { $inertia } = usePage() // Use usePage() to access Inertia

        // Send DELETE request using Inertia
        $inertia.delete(`/portfolio/${id}`, {
            onSuccess: () => {
                alert('Portfolio deleted successfully.');
            },
            onError: () => {
                alert('Error deleting portfolio.');
            }
        });
    }
};

</script>

<template>
    <div class="w-full">
        <div class="container flex p-0 m-0 h-full w-full">
            <div class="left-side w-1/3 bg-slate-200">
                <Sidebar />
            </div>
            <div class="right-side bg-blue-300 w-2/3 p-16">
                <div>
                    <div class="heading flex">
                        <h1 class="text-4xl flex-1">Portfolio</h1>
                        <Link href="/portfolio/add" class="text-2xl bg-gradient-to-bl from-zinc-400 to-neutral-200 rounded-full py-4 px-8">Add</Link>
                    </div>
                    <hr class="my-4">
                    <div class="my-4 card-title bg-lime-400 p-6 border border-black border-solid rounded flex" v-for="p in portfolio" :key="p.id">
                        <img :src="p.img" alt="Portfolio Image" class="my-4" v-if="p.img" style="width: 150px; height: 150px;">
                        <div class="details m-8">
                            <h3 class="card-title text-xl">Title: {{ p.title }}</h3>
                            <p class="card-description text-xl">Description: {{ p.description }}</p>
                        </div>
                        <div class="delete ">
                            <button @click="deletePortfolio(p.id)" class="flex-1 delete-btn bg-red-500 text-white px-4 py-2 rounded">Delete
                            <!-- <i class="fa-regular fa-circle" -->
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<style scoped>
</style>