var app = new Vue({
    el: '#app',
    data: {
        dischi: [],
  },

  mounted() {
    axios.get('./api/index.php')
    .then((res) => {
        this.dischi = res.data
        console.log(this.dischi);
    }
        
    )}
})