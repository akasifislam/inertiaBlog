<template>
  <app-layout>
    <AppHeader title="Contact-masterman.com" />

    <main>
      <div class="max-w-12xl mx-auto py-6 sm:px-6 lg:px-8">
        <div class="px-4 py-6 sm:px-0">
          <div class="">
            <h2>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ex, quos deleniti officiis dolor a voluptates excepturi et alias, cum ut voluptate quae possimus beatae asperiores sit, quidem nihil? Vitae, repellat!</h2>
          </div>
        </div>
      </div>
    </main>
  </app-layout>
</template>

<script>
import AppLayout from '../../Layouts/App.vue'
import AppHeader from '../../Layouts/AppHead.vue'
import { reactive } from 'vue'
import { Inertia } from '@inertiajs/inertia'
import { useForm } from '@inertiajs/inertia-vue3'
export default {
    components:{
        AppLayout,
        AppHeader
    },
    setup() {
    const form = useForm({
      name: null,
      email: null,
      subject: null,
      message: null,
    });

    function submit() {
      // Inertia.post('/contact', form)
      form.post('/contact')
    }
      return { form,submit };
    }
}
</script>
