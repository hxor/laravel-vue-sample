<template>
    <div class="row">
        <div class="col-md-12">
            <div class="form-inline">
                <div class="form-group mx-sm-3 mb-2">
                    <input type="text" v-model="task.title" name="task" class="form-control" placeholder="Task">
                </div>
                <div class="form-group mx-sm-3 mb-2">
                    <select v-model="task.priority" name="priority" id="" class="form-control">
                        <option value="low">Low</option>
                        <option value="medium">Medium</option>
                        <option value="high">High</option>
                    </select>
                </div>
                <button @click="storeTask" class="btn btn-primary mb-2">Submit</button>
            </div>
        </div>
        <hr>
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
    </div>
</template>

<script>
    export default{
        created() {
            this.getTasks();
        },
        data() {
            return {
                tasks: [],
                task: {title: '', priority: ''}
            }
        },
        methods: {
            getTasks() {
                window.axios.get('/api/task').then(({data}) => {
                    data.forEach(task => {
                        this.tasks.push(task)
                    });
                });
            },
            storeTask() {
                window.axios.post('/api/task', this.task).then(savedTask => {
                    this.tasks.push(savedTask.data);
                    this.task.title = '';
                });
            }
        }
    }
</script>
