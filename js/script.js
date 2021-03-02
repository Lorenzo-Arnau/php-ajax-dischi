new Vue({
    el: '#root',
    data: {
        listDisks:[],
        filterValue:'',  
    },
    mounted() {
      const self = this;
        axios.get("http://localhost/php-ajax-dischi/app/server.php")
        .then(function(response) {
            self.listDisks = response.data;
            console.log(self.listDisks);
        });
    },
    methods:{
      changeList:function(){
        const self = this;
        console.log(self.filterValue);
        axios.get("http://localhost/php-ajax-dischi/app/server.php?genere="+ self.filterValue)
        .then(function(response) {
            self.listDisks = response.data;
            console.log(self.listDisks);
        });
      }
    },
  });
  Vue.config.devtools = true
  