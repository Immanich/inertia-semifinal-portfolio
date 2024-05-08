<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import Sidebar from '@/Components/Sidebar.vue'
// import About from '@/Pages/Portfolio/About.veue'
import About from './Portfolio/About.vue'
import Portfolio from './Portfolio/Portfolio.vue'
</script>

<template>
    <!-- <Head title="Dashboard" /> -->

    <!-- <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Dashboard</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">You're logged in!</div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout> -->
    <div class="w-full flex">
        <div class="sidebar">
            <nav class="w-1/3">
                <Sidebar />
            </nav>
        </div>
        <div id="content">
            @yield('content')
        </div>
        <!-- <div class="w-auto"> -->
            <!-- <InertiaLink :href="'/'">
                <About />
            </InertiaLink>
            <InertiaLink :href="'/portfolio'">
                    <Portfolio />
            </InertiaLink> -->
            <!-- </Link> -->
        <!-- </div> -->
    </div>

</template>
