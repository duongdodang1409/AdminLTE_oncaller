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
                    <th>Name</th>
                    <th>Type</th>
                    <th>Content</th>
                    <th>Image</th>
                </tr>
                </thead>
                <tbody v-for="item in items" v-bind:key="item.id">
                <tr>
                    <td>{{item.id}}</td>
                    <td>{{item.name}}</td>
                    <td>{{item.type}}</td>
                    <td>{{item.content}}</td>
                    <td>{{item.image}}</td>
                    <td>
                        <button class="btn btn-danger" @click="deleteItem(item.id)">Delete</button>
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
            items: [],
            item:{
                id: '',
                name: '',
                type: '',
                content: '',
                image: '',
            },
            pagination: {},
            edit:true
        }
    },
    created:function() {
        this.fetchItem();
    },
    methods:{
        fetchItem: function(){
            axios.get('api/v1/item')
                .then(response => {

                    console.log('response', response.data.data.items);
                    this.items = response.data.data.items;
                });
        },
        deleteItem: function(id){
            console.log(id);
            axios.delete('api/v1/item/'+id)
                .then(response=>{
                    alert('Da Xoa');
                })
                .catch(err => console.log(err));
        },
        createItem: function(){

            axios.post('api/v1/item/',{
                name : this.item.name,
                type: this.item.type,
                content: this.item.content,
                image: this.item.image
            });


        }

    }
}
</script>

