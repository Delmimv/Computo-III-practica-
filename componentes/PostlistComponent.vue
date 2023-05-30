<template>
<div class="container">
<h1>Post</h1>
<br />
<ul v-for="post in posts" :key="post.idi">
<li>{{post.id}} {{post.post_name}}</li>
</ul>
</div>



</template>

<script>
export default([
    data(){
        posts: []
    },
    methods:{
        getPost(api_url){
            api_url = api_url || '/api/v2/post'
            const headers ={
                'Authorization': 'Bearer 1|

            };
            fetch(api_url, (headers))
            .then(response=>response.json())
            .ten(response=>{
                this.post=response.data
            })
            .catch(error=>console.log(error))
        }
    }
])