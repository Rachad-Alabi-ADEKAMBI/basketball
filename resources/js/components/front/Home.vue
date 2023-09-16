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
                    </h2> <br>

                    <ul>
                        <li v-for="game in apiResult.response" :key="game.id">
                            <p>{{ game.name   }}</p>
                            <p>{{ game.type   }}</p>
                        </li>
                    </ul>
                </div>

                <div class="platform">
                    <h2 class="subtitle">
                            Digital platform CRUSPHER
                    </h2>

                    <div class="platform__content">
                        <div class="platform__content__top">
                            <div class="title" @click="displayBox1()" :style="title1">
                                <p>Idea</p>
                            </div>

                             <div class="title" @click="displayBox2()" :style="title2">
                                <p>The present</p>
                            </div>

                             <div class="title" @click="displayBox3()" :style="title3">
                                <p>
                                    The futur
                                </p>
                            </div>
                        </div>

                        <div class="platform__content__main">
                            <div class="box box1" v-if="showBox1" >
                                <div class="box__text">
                                    <h4>
                                        Unique Digital Product for
                                         Basketball Fans
                                    </h4>

                                    <p>
                                        product aimed at satisfying the needs of basketball fans. We have successfully merged real basketball events with an immersive virtual world, creating a platform that brings together basketball enthusiasts of different nationalities, regardless of their location. <br><br>
                                        Our platform, Cruspher, not only provides the opportunity to access match statistics of your favorite basketball club at any time but also allows engaging in virtual betting on basketball games. It's a basketball gaming experience that helps fans generate new emotions and impressions without leaving their homes <br><br>
                                        We understand the importance of match statistics for basketball fans. That's why Cruspher offers detailed match statistics and latest basketball news ensuring you're always up to date with the latest events and able to make informed decisions during the game and virtual betting.

                                    </p>
                                </div>

                                <div class="box__image">
                                        <img src="images/img6.jpg" alt="">
                                </div>
                            </div>

                            <div class="box box2" v-if="showBox2">
                                <div class="box__text">
                                    <h4>
                                        Technology Employed
                                    </h4>

                                    <p>
                                        Currently, we harness cutting-edge and efficient
                                        resources to construct web platforms, high-speed
                                        databases,
                                        next-generation frameworks, and more.
                                    </p>
                                </div>

                                <div class="box__image">
                                        <img src="images/img5.jpg" alt="">
                                </div>
                            </div>

                            <div class="box box3" v-if="showBox3">
                                <div class="box__text">
                                    <h4>
                                        Web Application
                                    </h4>

                                    <p>
                                        In the near future, we aim to greatly expand the functional capabilities of our web application. These enhancements will include a streaming system employing the latest graphic capabilities, a system for clan events and tournaments, a unique football statistics data analysis system, and many other exciting updates.

                                    </p>
                                </div>

                                <div class="box__text">
                                    <h4>
                                        Mobile Application
                                    </h4>

                                    <p>
                                        Furthermore, we plan to develop mobile applications, which will enable our team to implement even more features and services to enhance the operation of our platform.

                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
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
                            Our vision is to unite basketball fans from different countries to create the world's largest basketball platform with Cruspher technology. <br>

                                Every basketballs club can benefit from a custom-designed basketball app featuring Cruspher technology, tailored to your team. The app incorporates interactive features, competitions, news updates, a fan forum, in-depth statistics, and much more, all of which serve to unite your club's fans. This enables the creation of an international platform for direct engagement with your fan base.»
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
   this.getGames();
   this.displayBox1();
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
            this.apiResult = result;
        })
        .catch(error => {
            console.log('error', error);
        });
    },
    displayBox1(){
        this.showBox1 = true;
        this.showBox2 = false;
        this.showBox3 = false;
        this.title1.background = '#FDE635';
        this.title1.color = 'black';

        this.title2.background = '#22242b';
        this.title2.color = 'white';
        this.title3.background = '#22242b';
        this.title3.color = 'white';

    },
    displayBox2(){
        this.showBox1 = false;
        this.showBox2 = true;
        this.showBox3 = false;
        this.title2.background = '#FDE635';
        this.title2.color = 'black';

        this.title1.background = '#22242b';
        this.title1.color = 'white';
        this.title3.background = '#22242b';
        this.title3.color = 'white';
    },
    displayBox3(){
        this.showBox1 = false;
        this.showBox2 = false;
        this.showBox3 = true;
        this.title3.background = '#FDE635';
        this.title3.color = 'black';

        this.title1.background = '#22242b';
        this.title1.color = 'white';
        this.title2.background = '#22242b';
        this.title2.color = 'white';
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