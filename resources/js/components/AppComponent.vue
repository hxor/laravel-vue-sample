<template>
    <div class="app-component">
        <task-component></task-component>
    </div>
</template>

<script>
    import TaskComponent from './TaskComponent.vue'

    export default {
        mounted() {
            console.log('Component Mounted');
        },
        components: {TaskComponent}
    }
</script>

<style>

</style>
