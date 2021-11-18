<template>
  <app-layout>
    <AppHeader title="Contact-masterman.com" />

    <main>
      <div class="max-w-12xl mx-auto py-6 sm:px-6 lg:px-8">
        <div class="px-4 py-6 sm:px-0">
          <div class="">
            <div class="flex flex-col">
              <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                  <div
                    class="
                      shadow
                      overflow-hidden
                      border-b border-gray-200
                      sm:rounded-lg
                    "
                  >
                    <table class="min-w-full divide-y divide-gray-200">
                      <thead class="bg-gray-50">
                        <tr>
                          <th
                            scope="col"
                            class="
                              px-6
                              py-3
                              text-left text-xs
                              font-medium
                              text-gray-500
                              uppercase
                              tracking-wider
                            "
                          >
                            Name
                          </th>
                          <th
                            scope="col"
                            class="
                              px-6
                              py-3
                              text-left text-xs
                              font-medium
                              text-gray-500
                              uppercase
                              tracking-wider
                            "
                          >
                            Title
                          </th>
                          <th
                            scope="col"
                            class="
                              px-6
                              py-3
                              text-left text-xs
                              font-medium
                              text-gray-500
                              uppercase
                              tracking-wider
                            "
                          >
                            Email
                          </th>
                          <th
                            scope="col"
                            class="
                              px-6
                              py-3
                              text-left text-xs
                              font-medium
                              text-gray-500
                              uppercase
                              tracking-wider
                            "
                          >
                            Role
                          </th>
                          <th scope="col" class="relative px-6 py-3">
                            <span class="sr-only">Edit</span>
                          </th>
                        </tr>
                      </thead>
                      <tbody class="bg-white divide-y divide-gray-200">
                        <tr>
                          <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                              <div class="ml-4">
                                <div class="text-sm font-medium text-gray-900">
                                  Flora Wu
                                </div>
                              </div>
                            </div>
                          </td>
                          <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-500">
                              Software engineer, IT
                            </div>
                          </td>
                          <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-500">
                              flora.wu@example.com
                            </div>
                          </td>
                          <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            <a href="#" class="hover:text-gray-100 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
                              >Edit</a>
                            <a href="#" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded hover:text-gray-100"
                              >Delete</a>
                          </td>
                        </tr>

                        <!-- More people... -->
                      </tbody>
                    </table>
                  </div>
                </div>
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
      form.post('/contact')
    }
      return { form,submit };
    }
}
</script>
