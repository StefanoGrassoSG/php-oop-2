const { createApp } = Vue

createApp({
  data() {
    return {
      showCat: false,
      foods: [],
      empty : false
    }
  },
  methods: {
    getData() {
        axios.get('http://localhost/php-oop-2/database/db.php')
        .then(res => {
            this.foods = res.data
            console.log(this.foods)
            if(this.foods.length < 1) {
              this.empty = true;
            }
        })
        .catch(error => {
          console.error('porco dio', error)
        })
    },
    show() {
        this.showCat = true;
    },
    hidden() {
        this.showCat = false;
    },
    stringToIcon(i) {
      if (this.foods[i] && this.foods[i].category) {
          if (this.foods[i].category.name == 'dog') {
              return 'fa-solid fa-dog fa-2x';
          } else if (this.foods[i].category.name == 'cat') {
              return 'fa-solid fa-cat';
          }
      }
      return 'error'; 
  },  
    formatPrice(price) {
      if (typeof price === 'number') {
          return price.toFixed(2);
      }
      else {
        return 0.00.toFixed(2)
      }
      return price;
  }
  }
}).mount('#app')