const { createApp } = Vue;

createApp({
    data() {
      return {
        apiAddr : './server.php',
        discList : [],
        activeCard : 0
      }
    },
    methods: {
        getData(){
            axios.get(this.apiAddr)
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