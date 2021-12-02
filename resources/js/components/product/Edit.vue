<template>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">Edit Product</div>
          <form @submit.prevent="submitPost(id)">
            <div class="card-body">
              <div class="mb-3">
                <label for="productName" class="form-label">Product Name</label>
                <input
                  type="text"
                  class="form-control"
                  id="productName"
                  placeholder="Product Name"
                  v-model="menu.product_name"
                />
              </div>
              <div class="mb-3">
                <label for="seller" class="form-label">Seller</label>
                <input
                  type="text"
                  class="form-control"
                  id="seller"
                  placeholder="Seller"
                  v-model="menu.seller"
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
                  v-model="menu.addres_seller"
                />
              </div>
              <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input
                  type="text"
                  class="form-control"
                  id="price"
                  placeholder="Price"
                  v-model="menu.price"
                />
              </div>
              <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea
                  class="form-control"
                  id="description"
                  placeholder="Description"
                  rows="3"
                  v-model="menu.desc"
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
export default {
    data(){
        return{
            id : '',
            menu: {},
        }
    },
     mounted: async function() {
        this.id = this.$route.params.id;
        await this.productEdit(this.$route.params.id)
    },
    methods:{
         async productEdit(id)
        {
            const data = await axios.get( `/api/product/edit/${id}`)
            this.menu = data.data
            // this.seller = data.data.product_name
            // this.product.product_name = data.data.product_name
            // this.product.product_name = data.data.product_name
            // this.product.product_name = data.data.product_name
        },
          async submitPost(id) {
            const data = await axios.patch(`/api/product/update/${id}`, this.menu)
            console.log(data);
            if (data.status) {
                this.$router.push({path:'/product'})
                this.product = data.data
            }
        },
    }


};
</script>
