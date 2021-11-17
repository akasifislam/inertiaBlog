<template>
    <app-layout>
       <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-gray-900">About</h2>
        </div>
    </header>

    <main>
        <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
            <div class="px-4 py-6 sm:px-0">
                <div class="border-4 border-dashed border-gray-600 rounded-lg h-96"></div>
            </div>
        </div>
    </main>
    </app-layout>
</template>

<script>
import AppLayout from '../Layouts/App.vue'
export default {
    components:{
        AppLayout
    }
}
</script>
