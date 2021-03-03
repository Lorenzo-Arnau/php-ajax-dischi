new Vue({
    el: '#root',
    data: {
        listDisks:[],
        filterValue:'',
        popUpSwitch:0,  
    },
    mounted() {
      const self = this;
        axios.get("app/server.php")
        .then(function(response) {
            self.listDisks = response.data;
            console.log(self.listDisks);
        });
    },
    methods:{
      changeList:function(){
        const self = this;
        console.log(self.filterValue);
        if (self.filterValue === 'All') {
          axios.get('app/server.php')
          .then(function(response) {
              self.listDisks = response.data;
              console.log(self.listDisks);
          });
        }else{
        axios.get('app/server.php?genere='+ self.filterValue)
        .then(function(response) {
            self.listDisks = response.data;
            console.log(self.listDisks);
        }).catch(function(error){
          console.log('popup!');
          self.popUpSwitch = 1;
        });
      }
    },
    closePopUp : function(){
      this.popUpSwitch = 0;
    },
    },
  });
  Vue.config.devtools = true
  