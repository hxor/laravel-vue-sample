<template>
    <div class="col-md-12">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Priority</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="(task, id) in tasks" :key="id">
                    <td>{{ task.id }}</td>
                    <td>{{ task.title }}</td>
                    <td>{{ task.priority }}</td>
                    <td><button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button></td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
    export default{
        created() {
            this.getTasks();
        },
        data() {
            return {
                tasks: []
            }
        },
        methods: {
            getTasks() {
                window.axios.get('/api/task').then(({data}) => {
                    data.forEach(task => {
                        this.tasks.push(task)
                    });
                });
            }
        }
    }
</script>
