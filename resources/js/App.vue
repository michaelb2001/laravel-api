<template>
  <div class="contenitore">
      <ul>
          <li v-for="(post,index) in posts" :key="index">
              <div class="carta">
                <h3>{{post.title}}</h3>
                <p>{{post.content}}</p>
              </div>

              
          </li>
      </ul>
  </div>
</template>

<script>
export default {
    name: "App",
    data(){
        return{
            posts : []
        }    
    },
    created(){
        axios
        .get('/api/posts')
        .then((response)=> {
    
        this.posts = response.data;
  })
    }
}
</script>

<style lang="scss" scoped>
.contenitore{
    background-image: url(https://www.smartworld.it/images/2021/11/09/windows-11-se-sfondo_1200x675.png);
    background-position: center center;
    background-size:cover ;
    background-repeat: no-repeat;
    padding: 20px;
    ul{
    list-style-type: none;

        li{

        text-decoration: none;

            .carta{

                max-width: 300px;
                margin: 10px auto;
                display: flex;
                flex-direction: column;
                flex-wrap:wrap;
                align-content: center;
                justify-content: center;

                background: rgba( 255, 255, 255, 0.25 );
                box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
                backdrop-filter: blur( 4px );
                -webkit-backdrop-filter: blur( 4px );
                border-radius: 10px;
                border: 1px solid rgba( 255, 255, 255, 0.18 );
            }
        }
    }

}
</style>