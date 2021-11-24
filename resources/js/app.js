import { createApp, h } from 'vue'
import { createInertiaApp,Link ,Head } from '@inertiajs/inertia-vue3'
import { InertiaProgress } from '@inertiajs/progress'
// import { Link } from '@inertiajs/inertia-vue'

InertiaProgress.init()
createInertiaApp({
  resolve: name => require(`./Pages/${name}`),
  setup({ el, App, props, plugin }) {
    createApp({ render: () => h(App, props) })
      .mixin({methods:{route:window.route}})
      .use(plugin)
      .component('InertiaLink', Link,Head)
      .mount(el)
  },
})