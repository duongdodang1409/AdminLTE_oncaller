<template>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Feature</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Primary</th>
                    <th>Feature Pack ID</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody v-for="feature in features" v-bind:key="feature.id">
                <tr>
                    <td>{{feature.id}}</td>
                    <td>{{feature.name}}</td>
                    <td>{{feature.primary}}</td>
                    <td>{{feature.feature_pack_id}}</td>
                    <td>
                        <button class="btn btn-danger" @click="deleteFeature(feature.id)">Delete</button>
                        <button class="btn btn-warning" @click="editFeature()">
                            Edit
                        </button>
                    </td>
                </tr>

                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
        <!--        <div class="card-footer clearfix">-->
        <!--            <ul class="pagination pagination-sm m-0 float-right">-->
        <!--                <li class="page-item"><a class="page-link" href="#">«</a></li>-->
        <!--                <li class="page-item"><a class="page-link" href="#">1</a></li>-->
        <!--                <li class="page-item"><a class="page-link" href="#">2</a></li>-->
        <!--                <li class="page-item"><a class="page-link" href="#">3</a></li>-->
        <!--                <li class="page-item"><a class="page-link" href="#">»</a></li>-->
        <!--            </ul>-->
        <!--        </div>-->
    </div>
</template>

<script>
export default {
    data(){
        return{
            features: [],
            feature:{
                id: '',
                name: '',
                primary: '',
                feature_pack_id: '',
                status: '',
            },
            pagination: {},
            edit:true
        }
    },
    created:function() {
        this.fetchFeature();
    },
    methods:{
        fetchFeature: function(){
            axios.get('api/v1/feature')
                .then(response => {

                    console.log('response', response.data.data.items);
                    this.features = response.data.data.items;
                });
        },
        deleteFeature: function(id){
            console.log(id);
            axios.delete('api/v1/feature/'+id)
                .then(response=>{
                    alert('Da Xoa');
                })
                .catch(err => console.log(err));
        },
        createFeature: function(){

            axios.post('api/v1/feature/',{
                name : this.feature.name,
                primary: this.feature.primary,
                feature_pack_id: this.feature_pack_id,
            });


        }

    }
}
</script>

