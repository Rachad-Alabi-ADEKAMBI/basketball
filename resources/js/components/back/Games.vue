<template>
    <div class="dahsboard">
        <div class="dashboard__content">
            <div class="games">
                <div class="" v-if="apiResult.response.length == 0">
                    <p>
                        There is no game at the moment
                    </p>
                </div>


                <div class="game" v-for="game in apiResult.response" :key="game.id"  v-if="apiResult.response.length > 0">
                           <a href="/game">
                            <div class="game__date">
                                    <p>
                                        {{ formatDate(game.date) }} at {{ game.time }}
                                    </p>

                                    <span>
                                        {{  game.country.name  }}
                                    </span>
                            </div>

                            <div class="game__teams">
                                <div class="team">
                                        <img :src="getImgUrl(game.teams.home.logo)" alt="">
                                </div>

                                <div class="team">
                                    <img :src="getImgUrl(game.teams.away.logo)" alt="">
                                </div>
                            </div>

                            <div class="game__stadium">
                                <span>
                                        {{ game.status.long }}
                                    </span>
                            </div>
                           </a>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default{
name: 'Games',
props:{
    msg: String
},
data() {
return {
    details:[],
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
},
methods: {
    getGames() {
      var currentDate = new Date();
      var formattedDate = currentDate.toISOString().split('T')[0]; // Formats the date as 'yyyy-mm-dd'

      var myHeaders = new Headers();
      myHeaders.append("x-rapidapi-key", "71d95ba09f4094fa6f5f291f089cb27b");
      myHeaders.append("x-rapidapi-host", "v1.basketball.api-sports.io/games?date=" + formattedDate);

      var requestOptions = {
        method: 'GET',
        headers: myHeaders,
        redirect: 'follow'
      };

      fetch("https://v1.basketball.api-sports.io/games?date=" + formattedDate, requestOptions)
        .then(response => response.json())
        .then(result => {
          console.log(result)
          this.apiResult = result;
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
    return pic;
},
formatDate(inputDate) {
      const date = new Date(inputDate);
      const day = date.getDate();
      const month = date.getMonth() + 1; // Months are zero-based, so add 1
      const year = date.getFullYear();

      // Ensure that day and month have leading zeros if necessary
      const formattedDay = day < 10 ? `0${day}` : day;
      const formattedMonth = month < 10 ? `0${month}` : month;

      // Combine the formatted parts into the final date string
      return `${formattedDay}/${formattedMonth}/${year}`;
    },
}


}
</script>