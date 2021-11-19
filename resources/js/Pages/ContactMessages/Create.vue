<template>
  <app-layout>
    <AppHeader title="Contact-masterman.com" />

    <main>
      <div class="max-w-12xl mx-auto py-6 sm:px-6 lg:px-8">
        <div class="px-4 py-6 sm:px-0">
          <div class="">
            <div class="mt-10 sm:mt-0">
              <div class="mt-5 md:mt-0 md:col-span-2">
                <inertia-link href="/contact" class="bg-green-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded hover:text-gray-100 float-right"
                              >Back</inertia-link>
                <form @submit.prevent="submit">
                  <div class="shadow overflow-hidden sm:rounded-md">
                    <div class="px-4 py-5 bg-white sm:p-6">
                      <div class="grid grid-cols-4 gap-8">
                        <div class="col-span-6 sm:col-span-4">
                          <label
                            for="name"
                            class="block text-sm font-medium text-gray-700"
                            >Name</label
                          >
                          <input
                            type="text"
                            name="name"
                            v-model="form.name"
                            id="name"
                            autocomplete="name"
                            class="
                              mt-1
                              focus:ring-indigo-500 focus:border-indigo-500
                              block
                              w-full
                              shadow-sm
                              sm:text-sm
                              border-gray-300
                              rounded-md
                            "
                            :class="{'border-red-500':form.errors.name}"
                          />
                          <div class="text-red-500" v-if="form.errors.name">{{ form.errors.name }}</div>
                        </div>
                        <div class="col-span-6 sm:col-span-4">
                          <label
                            for="email-address"
                            class="block text-sm font-medium text-gray-700"
                            >Email address</label
                          >
                          <input
                            type="text"
                            name="email-address"
                            v-model="form.email"
                            id="email-address"
                            autocomplete="email"
                            class="
                              mt-1
                              focus:ring-indigo-500 focus:border-indigo-500
                              block
                              w-full
                              shadow-sm
                              sm:text-sm
                              border-gray-300
                              rounded-md
                            "
                            :class="{'border-red-500':form.errors.email}"
                          />
                          <div class="text-red-500" v-if="form.errors.email">{{ form.errors.email }}</div>
                        </div>
                        <div class="col-span-6 sm:col-span-4">
                          <label
                            for="subject"
                            class="block text-sm font-medium text-gray-700"
                            >Subject</label
                          >
                          <input
                            type="text"
                            name="subject"
                            v-model="form.subject"
                            id="subject"
                            autocomplete="subject"
                            class="
                              mt-1
                              focus:ring-indigo-500 focus:border-indigo-500
                              block
                              w-full
                              shadow-sm
                              sm:text-sm
                              border-gray-300
                              rounded-md
                            "
                            :class="{'border-red-500':form.errors.subject}"
                          />
                          <div class="text-red-500" v-if="form.errors.subject">{{ form.errors.subject }}</div>
                        </div>
                        <div class="col-span-6 sm:col-span-4">
                          <label
                            for="message"
                            class="block text-sm font-medium text-gray-700"
                            >Message</label
                          >
                          <textarea
                            type="text"
                            rows="3"
                            name="message"
                            v-model="form.message"
                            id="message"
                            autocomplete="message"
                            class="
                              mt-1
                              focus:ring-indigo-500 focus:border-indigo-500
                              block
                              w-full
                              shadow-sm
                              sm:text-sm
                              border-gray-300
                              rounded-md
                            "
                            :class="{'border-red-500':form.errors.message}"
                          ></textarea>
                          <div class="text-red-500" v-if="form.errors.message">{{ form.errors.message }}</div>
                        </div>
                      </div>
                    </div>
                    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                      <button
                        type="submit"
                        class="
                          inline-flex
                          justify-center
                          py-2
                          px-4
                          border border-transparent
                          shadow-sm
                          text-sm
                          font-medium
                          rounded-md
                          text-white
                          bg-indigo-600
                          hover:bg-indigo-700
                          focus:outline-none
                          focus:ring-2
                          focus:ring-offset-2
                          focus:ring-indigo-500
                        "
                      >
                        Save
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
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
      form.post('/contact/store')    }
      return { form,submit };
    }
}
</script>
