<template>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">List Post</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Content</th>
                    <th>Images</th>
                    <th>User-ID</th>
                    <th>Slug</th>
                    <th>Tags</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody v-for="post in posts" v-bind:key="post.id">
                <tr>
                    <td>{{post.id}}</td>
                    <td>{{post.title}}</td>
                    <td>{{post.content}}</td>
                    <td>{{post.images}}</td>
                    <td>{{post.user_id}}</td>
                    <td>{{post.slug}}</td>
                    <td>{{post.tags}}</td>
                    <td>
                        <button class="btn btn-danger" @click="deletePost(post.id)">Delete</button>
                        <button class="btn btn-warning" @click="editPost()">
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
            posts: [],
            post:{
                id: '',
                title: '',
                content: '',
                images: '',
                user_id: '',
                slug: '',
                tags: '',
                status: '',
            },
            pagination: {},
            edit:true
        }
    },
    created:function() {
        this.fetchPost();
    },
    methods:{
        fetchPost: function(){
            axios.get('api/v1/post')
                .then(response => {
                    console.log('response', response.data);
                    this.posts = response.data;
                });
        },
        deletePost: function(id){
            console.log(id);
            axios.delete('api/v1/post/'+id)
                .then(response=>{
                    alert('Da Xoa');
                })
                .catch(err => console.log(err));
        },
        createPost: function(){

            axios.post('api/v1/post/',{
                title : this.post.title,
                content: this.post.content,
                images: this.post.images,
                user_id: this.post.user_id,
                slug: this.post.slug,
                tags: this.post.tags
            });
        }

    }
}
</script>

