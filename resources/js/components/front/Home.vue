<template>

                <div class="hero">
                        <div class="hero__text">
                            <p>
                                Digital platform
                            </p>

                                <h1>
                                    CRUSPHER
                                </h1>
                                <span>
                                    Unification of fans from different
                                    continents and regions, <br> based on basketball interactive.
                                </span> <br>


                            <a href="" class="btn btn-primary">
                                Interactive game
                            </a>
                        </div>
                </div>

                <div class="clubs">
                    <h2 class="subtitle">
                        Clubs
                    </h2>

                    <ul>
                        <li>
                            <img src="images/logos/cruspher-text.png" alt="">
                        </li>

                        <li>
                            <img src="images/logos/cruspher-text.png" alt="">
                        </li>

                        <li>
                            <img src="images/logos/cruspher-text.png" alt="">
                        </li>
                    </ul>
                </div>

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

                <div class="partnership">
                    <img src="http://127.0.0.1/basketball/public/images/img5.jpg" alt="" class="partnership__image">
                    <div class="partnership__text">
                        <h4>
                            Partnership
                        </h4> <br>

                        <p>
                            Our vision is to unite football fans from different countries to create the world's largest football platform with Cruspher technology. <br>

                                Every football club can benefit from a custom-designed football app featuring Cruspher technology, tailored to your team. The app incorporates interactive features, competitions, news updates, a fan forum, in-depth statistics, and much more, all of which serve to unite your club's fans. This enables the creation of an international platform for direct engagement with your fan base.»
                        </p>

                        <button class="btn btn-primary" >
                            Contact us
                        </button>
                    </div>
                </div>

                <div class="contact">
                    <h2 class="subtitle">
                        Contact Us
                    </h2>

                    <div class="contact__items">
                        <div class="contact__items__item">
                            <div class="icone">
                                <i class="fa fa-phone" aria-hidden="true"></i>

                            </div>

                            <div class="infos">
                                <p>Phone</p>
                                <span>+48508635736 </span>
                            </div>
                        </div>

                        <div class="contact__items__item">
                            <div class="icone">
                                <i class="fa fa-envelope" aria-hidden="true"></i>

                            </div>

                            <div class="infos">
                                <p>Email</p>
                                <span>support@cruspher.com </span>
                            </div>
                        </div>

                        <div class="contact__items__item">
                            <div class="icone">
                                <i class="bi bi-telegram"></i>
                            </div>

                            <div class="infos">
                                <p>Telegram</p>
                                <span>+48508635736 </span>
                            </div>
                        </div>
                    </div>
                </div>
 </template>

<script>
export default{
    name: 'Home',
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
    }
},
mounted: function() {
   this.getGames();
},
methods: {
    getGames() {
    var myHeaders = new Headers();
    myHeaders.append("x-rapidapi-key", "71d95ba09f4094fa6f5f291f089cb27b");
    myHeaders.append("x-rapidapi-host", "v1.basketball.api-sports.io/leagues");

    var requestOptions = {
        method: 'GET',
        headers: myHeaders,
        redirect: 'follow'
    };

    fetch("https://v1.basketball.api-sports.io/leagues", requestOptions)
        .then(response => response.json()) // Use response.json() to parse JSON data
        .then(result => {
            console.log(result)
            this.details = result;
        })
        .catch(error => {
            console.log('error', error);
        });
},
    getCurrentUserId() {
      return '{{ Auth::id() }}'; // Get the current user ID using the auth helper function
    },
    format(num){
    let res = new Intl.NumberFormat('fr-FR', { maximumSignificantDigits: 3 }).format(num);
    return res;
},
    getImgUrl(pic) {
    return "http://cruspherbasketball/public/img/" + pic;
},
viewArticle(id){
    window.location.replace('/article/'+id)
}
}


}
</script>