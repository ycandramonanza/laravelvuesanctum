<template>
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <Sidebar />
        <div class="card">
          <div class="card-header">Data Product</div>
          <div class="card-body">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Product Name</th>
                  <th scope="col">Seller</th>
                  <th scope="col">Seller Addres</th>
                  <th scope="col">Price</th>
                  <th scope="col">Description</th>
                  <th scope="col" colspan="2" class="text-center">Action</th>
                </tr>
              </thead>
              <tbody>
                <tr v-for="product in products" :key="product.message">
                  <th scope="row">1</th>
                  <td>{{product.product_name}}</td>
                  <td>{{product.seller}}</td>
                  <td>{{product.addres_seller}}</td>
                  <td>{{product.price}}</td>
                  <td>{{product.desc}}</td>
                  <td class="text-center">
                    <router-link :to="{ path : '/edit/' + product.id}"   class="btn btn-secondary">Edit</router-link>
                  </td>
                  <td class="text-center">
                    <button class="btn btn-danger" v-on:click="clickDelete(product.id, index)">Delete</button>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import Sidebar from '../sidebar/Sidebar.vue';
export default {
  components: {
     Sidebar
  },
    data(){
      return{
          products : {},
          loggedIn: localStorage.getItem('loggedIn'),
          token: localStorage.getItem('token'),
      }
    },
     mounted(){
       if (!this.loggedIn) {
          return this.$router.push({name: 'login'})
       }
      this.getDataProducts();
    },
    methods: {
        getDataProducts() {
            axios
              .get('http://127.0.0.1:8000/api/product').then(({data}) => (this.products = data));
        },

         async clickDelete(id, index) {
          const data = await axios.delete(`/api/product/delete/${id}`)
          if (data.status) {
            this.products.splice(index, 1)
          }
          this.getDataProducts();
       }
    }
   
};
</script>
