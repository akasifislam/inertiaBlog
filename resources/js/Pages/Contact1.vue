<template>
    <app-layout>
       <AppHeader title="Contact-masterman.com" />

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
import AppHeader from '../Layouts/AppHead.vue'
export default {
    components:{
        AppLayout,
        AppHeader
    }
}
</script>
