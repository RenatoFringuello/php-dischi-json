const { createApp } = Vue;

createApp({
    data() {
      return {
        apiAddr : './server.php',
        apiKey : 'hk234dbh894yh523456trf564ckjs',
        discList : [],
        activeCard : -1,
      }
    },
    methods: {
        getData(){
            axios.get(this.apiAddr, {
                    params: { api_key: this.apiKey },
                })
                .then((response) => {
                    console.log(response.data);
                    this.discList = response.data;
                })
                .catch((error) => {
                    console.error(error);
                })
        },
        setActiveCard(i){
            this.activeCard = i;
        }
    },
    created() {
        this.getData();
    },
}).mount('#app');