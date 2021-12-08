<template>
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <Sidebar />
        <div class="card">
          <div class="card-header">Create Product</div>
          <form @submit.prevent="addProduct">
            <div class="card-body">
              <div class="mb-3">
                <label for="productName" class="form-label">Product Name</label>
                <input
                  type="text"
                  class="form-control"
                  id="productName"
                  placeholder="Product Name"
                  v-model="product_name"
                />
              </div>
              <div class="mb-3">
                <label for="seller" class="form-label">Seller</label>
                <input
                  type="text"
                  class="form-control"
                  id="seller"
                  placeholder="Seller"
                  v-model="seller"
                />
              </div>
              <div class="mb-3">
                <label for="sellerAddress" class="form-label"
                  >Seller Address</label
                >
                <input
                  type="text"
                  class="form-control"
                  id="sellerAddress"
                  placeholder="Seller Address"
                  v-model="addres_seller"
                />
              </div>
              <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input
                  type="text"
                  class="form-control"
                  id="price"
                  placeholder="Price"
                  v-model="price"
                />
              </div>
              <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea
                  class="form-control"
                  id="description"
                  placeholder="Description"
                  rows="3"
                  v-model="desc"
                ></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Save</button>
            </div>
          </form>
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
            product_name: '',
            seller: '',
            addres_seller: '',
            price: '',
            desc: '',
           loggedIn: localStorage.getItem('loggedIn'),
           token: localStorage.getItem('token'),

      }
  },
  mounted(){
     if (!this.loggedIn) {
          return this.$router.push({name: 'login'})
      }
  },
  methods: { 
    addProduct() {
      let data = { product_name: this.product_name, seller: this.seller, addres_seller: this.addres_seller, price: this.price, desc: this.desc };
      this.axios
        .post("http://127.0.0.1:8000/api/product/create", data)
        .then(
          (response) => this.$router.push({ name: "product" })
        //   // console.log(response.data)
        // )
        .catch((error) => console.log(error, "a"))
        .finally(() => (this.loading = false)));
      // this.products.push(data)
    },
    //   async productEdit(id)
    //     {
    //         const data = await axios.get( `/api/product/edit/${id}`);

    //         console.log(data);
    //         // this.product.title = data.data.title
    //         // this.product.description = data.data.description
    //     }
  },


};
</script>
