<script setup>
// import Sidebar from '@/Components/Sidebar.vue'
import { Link } from '@inertiajs/vue3'
</script>
<template>
    <div class="container flex p-0 m-0 min-h-lvh min-w-lvh">
        <div class="left-side w-1/3 bg-slate-200">
            <Sidebar />
        </div>
        <div class="right-side bg-blue-300 min-w-lvh w-2/3 p-16">
            <div>
            <h1 class="text-4xl my-8">About Me</h1>
            <hr class="my-4">
            <p>Hi there! I'm Me, a passionate and dedicated web developer 
                with 3 years of experience in creating dynamic and user-friendly 
                web applications. I specialize in front-end development, 
                back-end development, full-stack development, and I love 
                bringing creative ideas to life through code.</p>
            </div>
            <div class="buttons p-16 w-full flex justify-between items-center">
                <a class="border border-black border-solid py-4 px-8 hover:bg-blue-400 duration-300" href="#">Resume</a>
                <Link class="border border-black border-solid py-4 px-8 hover:bg-blue-400 duration-300" href="/portfolio">Portfolio</Link>
            </div>
        </div>
    </div>
</template>