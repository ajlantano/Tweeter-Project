<template>
    <div>
        <h2 class="title">Search</h2>
        <input type="hidden" name="giph_search" v-model="selectedGif">
        <input type="hidden" name="gif_comment" :value="(selectedGif ? 1 : 0)">
       <input type="text" class="input-group-append" name="query" v-model="query" @keyup="fetchGifs">

       <div class="columns is-multiline" v-if="dropdownOpen">
         <div class="column is-one-quarter" v-for="gif in gifs">
           <div class="gif-box">
             <a href="#" @click.prevent="selectGif(gif.images)">
               <img class="gif-image" :src="gif.images.fixed_width.url">
             </a>
           </div>
         </div>

       </div>
       <div v-show="selectedGif" class="card selectedGifPreview">
           <div class="card-body">
               <img :src="selectedGif" />
               <a href="#" class="btn btn-sm btn-danger" @click="selectedGif=''">x</a>
           </div>
       </div>
     </div>
</template>

<script>
export default {
    data(){
        return{
            query: null,
            apiKey: 'tZTbkZkpbZhyDnHqQR5zzMAPF9bnQ27x',
            gifs: [],
            selectedGif: null,
            apiUrl:'https://api.giphy.com/v1/gifs/search',
            dropdownOpen: false,

            }
    },
    methods: {
        fetchGifs: function() {
          const url = `${this.apiUrl}?q=${this.query}&api_key=${this.apiKey}&limit=8`;
          axios.get(url)
            .then((response) => {
                console.log(response)
                this.gifs = response.data.data;
                this.dropdownOpen = true;
            })
        },

        selectGif(gif) {
            console.log(gif);
            this.selectedGif = gif.fixed_height.url;
            this.dropdownOpen = false;

        },
    },
}

</script>

<style >
</style>
