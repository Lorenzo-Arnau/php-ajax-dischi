new Vue({
    el: '#root',
    data: {
        listDisks:[],  
    },
    mounted() {
      const self = this;
        axios.get("http://localhost/php-ajax-dischi/app/server.php")
        .then(function(response) {
            response.data.forEach(element => {
                self.listDisks.push(element);
            });
            console.log(self.listDisks);
        });
    },
    methods:{
      
    },
  });
  Vue.config.devtools = true
  