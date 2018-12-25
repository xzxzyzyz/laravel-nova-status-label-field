Nova.booting((Vue, router) => {
    Vue.component('index-laravel-nova-status-label-field', require('./components/IndexField'));
    Vue.component('detail-laravel-nova-status-label-field', require('./components/DetailField'));
    Vue.component('form-laravel-nova-status-label-field', require('./components/FormField'));
})
