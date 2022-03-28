<template>
  <!--<div class="contenitore">
      <ul>
          <li v-for="(post,index) in posts" :key="index">
              <div class="carta">
                <h3>{{post.title}}</h3>
                <p>{{post.content}}</p>
                <img v-if="post.img" :src="`/storage/${post.img} `">

                <p v-if="post.category">#category : {{post.category.name}}</p>
                <p v-if="post.tags">{{post.tags.name}}</p>
              </div>
          </li>
      </ul>
  </div>-->

  <main>
      <router-view></router-view>
  </main>
</template>

<script>
export default {
    name: "Main"
}
</script>

<style lang="scss" scoped>
.contenitore{
    background-color: #000;
    padding: 20px;
    ul{
    list-style-type: none;
    display: flex;
    flex-wrap:wrap;
    align-content: flex-start;
        li{
        display: flex;
        flex-wrap:wrap;
        align-content: flex-start;
        text-decoration: none;
        min-height: 450px;
            .carta{
                color:#fff;
                width: 300px;
                height: 475px;
                margin: 10px 20px;
                display: flex;
                flex-direction: column;
                flex-wrap:wrap;
                align-content: center;
                justify-content: flex-start;

                border: 2px solid white;
                img{
                    width: 80%;
                    height :auto;
                }
            }
        }
    }

}
</style>