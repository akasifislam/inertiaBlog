<template>
  <app-layout>
    <AppHeader title="Contact-masterman.com" />
    <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 flex justify-between">
            <h2 class="text-3xl font-bold text-gray-900">All Contact</h2>
            <inertia-link href="contact/create" class="bg-green-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded hover:text-gray-100 float-right"
                              >Create</inertia-link>
        </div>
    </header>
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
                            Subject
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
                            Message
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
                            Action
                          </th>
                          <th scope="col" class="relative px-6 py-3">
                            <span class="sr-only">Edit</span>
                          </th>
                        </tr>
                      </thead>
                      <tbody class="bg-white divide-y divide-gray-200">
                        <tr v-for="(contact,index) in contactMessages" :key="index.id">
                          <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                              <div class="ml-4">
                                <div class="text-sm font-medium text-gray-900">
                                  {{ contact.name }}
                                </div>
                              </div>
                            </div>
                          </td>
                          <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                              <div class="ml-4">
                                <div class="text-sm font-medium text-gray-900">
                                  {{ contact.email }}
                                </div>
                              </div>
                            </div>
                          </td>
                          <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                              <div class="ml-4">
                                <div class="text-sm font-medium text-gray-900">
                                  {{ contact.subject }}
                                </div>
                              </div>
                            </div>
                          </td>
                          <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                              <div class="ml-4">
                                <div class="text-sm font-medium text-gray-900">
                                  {{ contact.message }}
                                </div>
                              </div>
                            </div>
                          </td>
                          <div class="flex items-center justify-center mb-4">
                          <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            <inertia-link :href="`/contact/`+contact.id+`/edit`" class="hover:text-gray-100 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
                              >Edit</inertia-link>
                            <button type="button" @click="destroy(contact.id)"  class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded hover:text-gray-100"
                              >Delete</button>
                          </td>
                          </div>
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

export default {
    components:{
        AppLayout,
        AppHeader
    },
    props:{
      contactMessages:  Array
    },
    setup() {
      function destroy(id) {
        Inertia.delete(`/contact/${id}/destroy/`,{
          onBefore: () => confirm('Are you Sure Want to delete This Data')
        })
    }

      return {
        destroy
      }
    }
}
</script>
