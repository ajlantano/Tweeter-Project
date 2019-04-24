<template>
    <a href="#"@click.prevent="doLike" :class="{'font-weight-bold' : isLiked}">
    {{(isLiked ? 'Unlike' : 'Like')}} ({{likeCount}})
    </a>
</template>

<script>
export default {
    props:['id','likes','type','count'],
    data(){
        return{
            isLiked:false,
            likeCount:0
        }
    },
    methods:{
        doLike(e){
                e.preventDefault();

            axios.get('/likes/' + this.id + '/' + this.type)
            . then((response)=>{
                if (response.data.status == 'successful'){
                    this.isLiked = !this.isLiked;
                    if(this.isLiked){
                        this.likeCount++;
                    }else{
                        this.likeCount--;
                    }
                }
            })
        }
    },
    mounted(){
        this.isLiked = this.liked;
        this.likeCount = this.count;
    }
}
</script>

<style lang="css" scoped>
</style>
