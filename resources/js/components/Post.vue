<template>
  <div class="contenitore">
      <ul>
          <li v-for="(post,index) in posts" :key="index">
              <div class="carta">
                <h3>{{post.title}}</h3>
                <p>{{post.content}}</p>
                <img v-if="post.img" :src="`/storage/${post.img} `">

                <!--<p v-if="post.category">#category : {{post.category.name}}</p>
                <p v-if="post.tags">{{post.tags.name}}</p>-->
              </div>
          </li>
      </ul>
  </div>
</template>

<script>
export default {
    name:"Post",
    data(){
        return{
            posts:[]
        }    
    },
    created(){
        axios.get('/api/posts')
        .then((response)=> {
          console.log(response)
          this.posts = response.data;
        })
    }
}
</script>

<style lang="scss" scoped>
    img{
      width: 200px;
    }
</style>