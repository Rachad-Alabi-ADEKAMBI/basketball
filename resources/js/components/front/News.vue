<template>
    <div class="news">
        <h2 class="subtitle">
            News
        </h2>

        <div class="news__content">
            <div class=" card new" v-for="detail in news" :key="detail.id">
                <h4>
                    {{  detail.title  }}
                </h4>

                <div class="new__date">
                    <div class="date">
                        <i class="fa-regular fa-clock"></i> {{ detail.date }}
                    </div>

                    <div class="likes">
                        <i class="fa-regular like fa-thumbs-up"></i>
                        <i class="fa-regular   dislike fa-thumbs-up"></i>
                    </div>
                </div>

                <div class="new__image">
                    <img :src="detail.image" />
                </div>

                <div class="new__text">
                    <p>
                        {{ detail.preview }}
                    </p>
                </div>

                <div class="new__link" @click="(viewArticle(detail.id))">
                    Read more ...
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default{
name: 'News',
props:{
img_url: String
},
data() {
return {
news:[
{
    id: 1, title: 'title 1', date: '15/09/2023', image: 'http://127.0.0.1/basketball/public/images/img4.jpg', preview: 'Bavaria" Bayern are the automatic favorites in every Bundesliga match due to the quality of their squad. Harry Kane also began to make a difference from the first matches: in the game against Werder he scored '
},
{
    id: 2, title: 'title 1', date: '15/10/2023', image: 'http://127.0.0.1/basketball/public/images/img1.jpg', preview: 'Reece James has been selected by Real Madrid as a long-term replacement for Spaniard Dani Carvajal. James, who was recently named Chelsea captain, signed a six-year contract in 2022. Source:  '
},
{
    id: 3, title: 'title 1', date: '15/11/2023', image: 'http://127.0.0.1/basketball/public/images/img3.jpg', preview: 'Bavaria" Bayern are the automatic favorites in every Bundesliga match due to the quality of their squad. Harry Kane also began to make a difference from the first matches: in the game against Werder he scored '
}

],
showBox1: false,
showBox2: false,
showBox3: false,
title1: {

},
title2:{

},
title3:{

},
apiResult: {
get: '',
parameters: [],
errors: [],
results: 0,
response: '',
},
}
},
mounted: function() {
},
methods: {

format(num){
let res = new Intl.NumberFormat('fr-FR', { maximumSignificantDigits: 3 }).format(num);
return res;
},
getImgUrl(pic) {
return  pic;
},
viewArticle(id){
window.location.replace('/article/'+id)
}
}


}
</script>