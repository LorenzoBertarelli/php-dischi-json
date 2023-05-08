const {createApp} = Vue;

createApp({
    data() {
        return {
            dischi: [],
        };
    },
    mounted() {
        axios.get("http://localhost/BooleanEsercizi/php-dischi-json/server.php")
        .then((resp) => {
            this.dischi = resp.data.results;
            console.log(resp);
        });
    },
}).mount("#app");