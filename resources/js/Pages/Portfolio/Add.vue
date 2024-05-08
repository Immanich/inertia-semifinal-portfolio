<script setup>
import Sidebar from '@/Components/Sidebar.vue'
import { useForm } from '@inertiajs/vue3'

const form = useForm({
  title: '',
  description: '',
  img: null
})

const handleFileUpload = (event) => {
  const file = event.target.files[0];
  form.img = file;
}

const submit = () => {
  form.post('/portfolio', {
    onSuccess: () => {
      form.reset()
    }
  })
}
</script>
<template>
    <div class="container flex p-0 m-0 h-lvh w-full">
        <div class="left-side w-1/3 bg-slate-200">
            <Sidebar />
        </div>
        <div class="right-side bg-blue-300 w-2/3 p-16">
            <div class="form">
                <form @submit.prevent="submit">
                    <h1 class="text-4xl">Add Portfolio</h1>
                    <hr class="my-4">
                    <label for="img" class="text-2xl">Image
                        <input type="file" name="img" accept="image/*" @change="handleFileUpload" />
                    </label>
                    <label for="title" class="text-2xl">Title
                        <input type="text" name="title" placeholder="Portfolio Title" v-model="form.title">
                    </label>
                    <br>
                    <label for="description" class="text-2xl">Description<br>
                        <textarea name="description" id="description" cols="30" rows="5" v-model="form.description"> </textarea>
                    </label>
                    <div class="button justify-center align-center flex py-4">
                        <button type="submit" class="py-4 px-8 bg-blue-400 hover:bg-blue-500 duration-300 rounded">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>
<style scoped>
form {
    display: flex;
    flex-direction: column;
    max-width: 500px; 
    margin: 0 auto;
}

label {
    margin-bottom: 8px;
}

textarea {
    width: 100%;
    padding: 8px;
    margin-top: 4px;
    resize: vertical;
}

</style>
<!-- <script setup>
import { useForm } from '@inertiajs/vue3'

const form = useForm({
  title: '',
  description: '',
  img: null
})

const handleFileUpload = (event) => {
  const file = event.target.files[0];
  form.img = file;
}

const submit = () => {
  form.post('/portfolio', {
    onSuccess: () => {
      form.reset()
    }
  })
}
</script> -->