<template>
    <div class="dahsboard">
        <div class="dashboard__content">
            <div class="infos">
                    Infos on game
            </div>
        </div>
    </div>
</template>

<script>
export default{
name: 'Game',
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
    var myHeaders = new Headers();
    myHeaders.append("x-rapidapi-key", "71d95ba09f4094fa6f5f291f089cb27b");
    myHeaders.append("x-rapidapi-host", "v1.basketball.api-sports.io/games?date=2019-09-17");

    var requestOptions = {
        method: 'GET',
        headers: myHeaders,
        redirect: 'follow'
    };

    fetch("https://v1.basketball.api-sports.io/games?date=2019-09-17", requestOptions)
        .then(response => response.json()) // Use response.json() to parse JSON data
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