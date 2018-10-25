<template>
    <div class="app-component">
        <div class="row">
            <div class="col-md-12">
                <form class="form-inline">
                    <div class="form-group mx-sm-3 mb-2">
                        <input type="text" name="task" class="form-control" placeholder="Task">
                    </div>
                    <div class="form-group mx-sm-3 mb-2">
                        <select name="priority" id="" class="form-control">
                            <option value="low">Low</option>
                            <option value="medium">Medium</option>
                            <option value="high">High</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary mb-2">Submit</button>
                </form>
            </div>
        </div>
        <div class="row">
            <task-component></task-component>
        </div>
    </div>
</template>

<script>
    import TaskComponent from './TaskComponent.vue'

    export default {
        mounted() {
            console.log('Component Mounted')
        },
        data() {
            return {
                message: 'Hello World'
            }
        },
        components: {TaskComponent}
    }
</script>

<style>

</style>
