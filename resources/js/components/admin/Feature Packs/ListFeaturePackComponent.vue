<template>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">List Feature Pack</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Price</th>
                    <th>Price Sale</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody v-for="feature_pack in feature_packs" v-bind:key="feature_pack.id">
                <tr>
                    <td>{{feature_pack.id}}</td>
                    <td>{{feature_pack.title}}</td>
                    <td>{{feature_pack.price}}</td>
                    <td>{{feature_pack.price_sale}}</td>
                    <td>
                        <button class="btn btn-danger" @click="deleteFeaturePack(feature_pack.id)">Delete</button>
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
            feature_packs: [],
            feature_pack:{
                id: '',
                title: '',
                price: '',
                price_sale: '',
                status: '',
            },
            pagination: {},
            edit:true
        }
    },
    created:function() {
        this.fetchFeaturePack();
    },
    methods:{
        fetchFeaturePack: function(){
            axios.get('api/v1/feature_pack')
                .then(response => {

                    console.log('response', response.data.data.items);
                    this.feature_packs = response.data.data.items;
                });
        },
        deleteFeaturePack: function(id){
            console.log(id);
            axios.delete('api/v1/feature_pack/'+id)
                .then(response=>{
                    alert('Da Xoa');
                })
                .catch(err => console.log(err));
        },
        createFeaturePack: function(){

            axios.post('api/v1/feature_pack/',{
                title : this.feature_pack.title,
                price: this.feature_pack.price,
                price_sale: this.feature_pack.price_sale,
            });


        }

    }
}
</script>

