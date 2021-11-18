<template>
  <app-layout>
    <AppHeader title="Contact-masterman.com" />

    <main>
      <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
        <div class="px-4 py-6 sm:px-0">
          <div class="">
            <div class="mt-10 sm:mt-0">
              <div class="mt-5 md:mt-0 md:col-span-2">
                <form action="#" method="POST">
                  <div class="shadow overflow-hidden sm:rounded-md">
                    <div class="px-4 py-5 bg-white sm:p-6">
                      <div class="grid grid-cols-6 gap-6">
                        <div class="col-span-6 sm:col-span-4">
                          <label
                            for="name"
                            class="block text-sm font-medium text-gray-700"
                            >Name</label
                          >
                          <input
                            type="text"
                            name="name"
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
                          />
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
                          />
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
                          />
                        </div>
                        <div class="col-span-6 sm:col-span-4">
                          <label
                            for="message"
                            class="block text-sm font-medium text-gray-700"
                            >Message</label
                          >
                          <textarea
                            type="text"
                            cols="30"
                            rows="10"
                            name="message"
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
                          ></textarea>
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
import AppLayout from '../Layouts/App.vue'
import AppHeader from '../Layouts/AppHead.vue'
export default {
    components:{
        AppLayout,
        AppHeader
    }
}
</script>
