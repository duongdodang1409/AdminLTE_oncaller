<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create Post</div>
                    <form @submit.prevent="createPost()">
                        <div type="form-group">
                            <input type="text" class="form-control" placeholder="post_title" v-model="post.title">
                        </div>
                        <div type="form-group">
                            <input type="text" class="form-control" placeholder="post_content" v-model="post.content">
                        </div>
                        <div type="form-group">
                            <input type="text" class="form-control" placeholder="post_images" v-model="post.images">
                        </div>
                        <div type="form-group">
                            <input type="text" class="form-control" placeholder="user_id" v-model="post.user_id">
                        </div>
                        <div type="form-group">
                            <input type="text" class="form-control" placeholder="post_slug" v-model="post.slug">
                        </div>
                        <div type="form-group">
                            <input type="text" class="form-control" placeholder="post_tag" v-model="post.tags">
                        </div>
                        <button type="submit" class="btn btn-primary">Create</button>
                    </form>
                    <div class="card-body" v-for="post in posts" v-bind:key="post.id">
                        <p>{{post.title}}</p>

                        <button class="btn btn-danger" @click="deletePost(post.id)">Delete</button>
                        <button class="btn btn-warning" @click="editPost()">
                            Edit
                        </button>
                    </div>

<!--                    <div class="card-body" v-for="showrank in ranks" v-bind:key="showrank.rank_id">-->
<!--                        <p>{{showrank.rank_id}}</p>-->
<!--                        <p>{{showrank.rank_name}}</p>-->
<!--                        <p>{{showrank.rank_avatar}}</p>-->
<!--                        <p>{{showrank.rank_color}}</p>-->
<!--                        <p>{{showrank.rank_effect}}</p>-->
<!--                        <p>{{showrank.rank_status}}</p>-->
<!--                    </div>-->
                </div>
            </div>
        </div>
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
                console.log('response', response.data.data.items);
                this.posts = response.data.data.items;
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
        // createPost(e){
        //     this.axios.post('api/v1/post', this.posts);
        //     e.preventDefault();
        // }
    }


    // created(){
    //     this.fetchPost();
    // },
    // methods:{
    //     fetchPost: function(){
    //         fetch('api/v1/post')
    //         .then(res=>{
    //
    //             console.log(res);
    //         })
    //     }
    // }

    // created:function() {
    //     this.fetchPost();
    // },
    // methods:{
    //     fetchPost: function(){
    //         axios.get('api/v1/post')
    //         .then(function(response){
    //
    //            this.posts = JSON.parse(response.data);
    //
    //         });
    //     }
    // }
}
</script>

