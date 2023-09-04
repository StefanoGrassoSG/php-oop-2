const { createApp } = Vue

createApp({
  data() {
    return {
      showCat: false,
      foods: []
    }
  },
  methods: {
    getData() {
        axios.get('http://localhost/php-oop-2/database/db.php')
        .then(res => {
            console.log(res.data)
            this.foods = res.data
            console.log(this.foods)
        })
    },
    show() {
        this.showCat = true;
    },
    hidden() {
        this.showCat = false;
    }
  }
}).mount('#app')