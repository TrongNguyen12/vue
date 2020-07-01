<template>
    <div>
        <div class="form-group">
            <router-link to="/" class="btn btn-success">Back</router-link>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading">Add Company</div>
            <div class="row">
                <div class="col-sm-12">
                    <form v-on:submit="saveForm()">
                        <div class="form-group">
                            <label for="">Tên công ty</label>
                            <input type="text" v-model="company.name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Địa chỉ</label>
                            <input type="text" v-model="company.address" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Website</label>
                            <input type="text" v-model="company.website" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="text" v-model="company.email" class="form-control" required>
                        </div>
                        <button class="btn btn-success">Create</button>
                    </form>
                </div>
                
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data: function () {
            return {
                company: {
                    name: '',
                    address: '',
                    website: '',
                    email: '',
                }
            }
        },
        methods: {
            saveForm() {
                event.preventDefault();
                var app = this;
                var newCompany = app.company;
                axios.post('/api/companies', app.company)
                    .then(function (resp) {
                        app.$router.push({path: '/'});
                    })
                    .catch(function (resp) {
                        console.log(resp);
                        alert("Could not create your company");
                    });
            }
        }
    }
</script>