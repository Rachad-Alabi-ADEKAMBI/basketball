<template>
        <div class="dahsboard">
            <div class="dashboard__top">
                <ul>
                    <li>
                        <button class="btn btn-secondary">
                            New Game
                        </button>
                    </li>

                    <li>
                        <button class="btn btn-secondary">
                            My games
                        </button>
                    </li>
                </ul>
            </div>

            <div class="dashboard__content">
                <ul>
        <li v-for="game in details" :key="game.id">
          <h2>{{ game.id }}</h2>
        </li>
      </ul>
            </div>
        </div>
</template>

<script>
export default{
    name: 'Dashboard',
    props:{
        msg: String
    },
    data() {
    return {
        details:[],
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
}
}


}
</script>