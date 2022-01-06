<template>
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <Sidebar />
        <div class="card">
          <div class="card-body">
            <div class="container" v-show="formPage == 0">
              <div class="row">
                <div class="col-4">
                  <h3
                    class="text-center"
                    style="background-color: green; width: 120px; color: white"
                  >
                    1
                  </h3>
                </div>
                <div class="col-4">
                  <h3 class="text-center">2</h3>
                </div>
                <div class="col-4">
                  <h3 class="text-center">3</h3>
                </div>
              </div>
              <br />
              <form action=""></form>
              <div class="form-group">
                <label for="exampleInputEmail1">Your Name</label>
                <input
                  type="text"
                  class="form-control"
                  id="name"
                  aria-describedby="name"
                  placeholder="Name"
                  v-model="name"
                />
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Your Phone</label>
                <input
                  type="number"
                  class="form-control"
                  id="name"
                  aria-describedby="name"
                  placeholder="Ex: 0812136868123"
                  v-model="phone"
                />
              </div>
              <div class="text-left" style="float: left">
                <button type="submit" class="btn btn-warning">
                  Previous<i class="icon-arrow-right" @click="formPage = 0"></i>
                </button>
              </div>
              <div class="text-right next-page">
                <button
                  type="submit"
                  class="btn btn-primary next-page"
                  @click="formPage = 1"
                >
                  Next <i class="icon-arrow-right"></i>
                </button>
              </div>
            </div>
            <div class="container" v-show="formPage == 1">
              <div class="row">
                <div class="col-4">
                  <h3
                    class="text-center"
                    style="background-color: green; width: 120px; color: white"
                  >
                    1
                  </h3>
                </div>
                <div class="col-4">
                  <h3
                    class="text-center"
                    style="background-color: green; width: 120px; color: white"
                  >
                    2
                  </h3>
                </div>
                <div class="col-4">
                  <h3 class="text-center">3</h3>
                </div>
              </div>
              <br />
              <div class="div">
                <div class="form-group">
                  <label for="exampleInputEmail1">Upload Your KTP</label>
                  <input
                    type="file"
                    src="img_submit.gif"
                    alt="Submit"
                    width="48"
                    height="48"
                  />
                  <small id="name" class="form-text text-muted"
                    >Upload KTP YA gengs.</small
                  >
                </div>
              </div>
              <div class="text-left" style="float: left">
                <button
                  type="submit"
                  class="btn btn-warning"
                  @click="formPage = 0"
                >
                  Previous<i class="icon-arrow-right"></i>
                </button>
              </div>
              <div class="text-right next-page">
                <button
                  type="submit"
                  class="btn btn-primary next-page"
                  @click="formPage = 2"
                >
                  Next <i class="icon-arrow-right"></i>
                </button>
              </div>
            </div>
            <div class="container" v-show="formPage == 2">
              <div class="row">
                <div class="col-4">
                  <h3
                    class="text-center"
                    style="background-color: green; width: 120px; color: white"
                  >
                    1
                  </h3>
                </div>
                <div class="col-4">
                  <h3
                    class="text-center"
                    style="background-color: green; width: 120px; color: white"
                  >
                    2
                  </h3>
                </div>
                <div class="col-4">
                  <h3 class="text-center" style="background-color: green; width: 120px; color: white">3</h3>
                </div>
              </div>
              <br />
              <div class="div">
                <label for="exampleInputEmail1">Questions</label>
                 <section class="w-full flex justify-center items-center my-10">
    <form class="">
      <div class="form-group">
         <div
          v-for="(input, index) in phoneNumbers"
          :key="`phoneInput-${index}`"
          class="input wrapper flex items-center"
        >
          <textarea
            v-model="input.questions"
            type="text"
            class="h-10 rounded-lg outline-none p-2"
            placeholder="Questions..."
          />
          <!--          Add Svg Icon-->
          <svg
            @click="addField(input, phoneNumbers)"
           
            viewBox="0 0 100 100" 
            width="24"
            height="24"
            class="ml-2 cursor-pointer"
          >
            <path fill="none" d="M0 0h24v24H0z" />
            <path
              fill="red"
              d="M 10,30
                A 20,20 0,0,1 50,30
                A 20,20 0,0,1 90,30
                Q 90,60 50,90
                Q 10,60 10,30 z" />
                      />
          </svg>

          <!--          Remove Svg Icon-->
          <svg  v-show="phoneNumbers.length > 1"
            @click="removeField(index, phoneNumbers)" height="24" id="Layer_1" style="enable-background:new 0 0 512 512;" version="1.1" viewBox="0 0 512 512" width="24" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M443.6,387.1L312.4,255.4l131.5-130c5.4-5.4,5.4-14.2,0-19.6l-37.4-37.6c-2.6-2.6-6.1-4-9.8-4c-3.7,0-7.2,1.5-9.8,4  L256,197.8L124.9,68.3c-2.6-2.6-6.1-4-9.8-4c-3.7,0-7.2,1.5-9.8,4L68,105.9c-5.4,5.4-5.4,14.2,0,19.6l131.5,130L68.4,387.1  c-2.6,2.6-4.1,6.1-4.1,9.8c0,3.7,1.4,7.2,4.1,9.8l37.4,37.6c2.7,2.7,6.2,4.1,9.8,4.1c3.5,0,7.1-1.3,9.8-4.1L256,313.1l130.7,131.1  c2.7,2.7,6.2,4.1,9.8,4.1c3.5,0,7.1-1.3,9.8-4.1l37.4-37.6c2.6-2.6,4.1-6.1,4.1-9.8C447.7,393.2,446.2,389.7,443.6,387.1z"/></svg>
        </div>
      </div>
    </form>
  </section>
              </div>
              <div class="text-left" style="float: left">
                <button
                  type="submit"
                  class="btn btn-warning"
                  @click="formPage = 1"
                >
                  Previous<i class="icon-arrow-right"></i>
                </button>
              </div>
              <div class="text-right next-page">
                <button
                  type="submit"
                  class="btn btn-success next-page"
                  @click="addProduct()"
                >
                  Submit <i class="icon-arrow-right"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import Sidebar from "../sidebar/Sidebar.vue";
import Form1 from "../multi-form/Form1.vue";
import Form2 from "../multi-form/Form2.vue";
import Form3 from "../multi-form/Form3.vue";
export default {
   name: "AddRemove",
  components: {
    Sidebar,
    Form1,
    Form2,
    Form3,
  },
  data() {
    return {
        phoneNumbers: [{ questions: "" }],
      name: "",
      phone: "",
      formPage: 0,
      products: {},
      loggedIn: localStorage.getItem("loggedIn"),
      token: localStorage.getItem("token"),
    };
  },
  mounted() {
    if (!this.loggedIn) {
      return this.$router.push({ name: "login" });
    }
  },
  methods: {
    addProduct() {
      let data = { name: this.name, phone: this.phone };
      console.log(data);
      this.axios
        .post("http://127.0.0.1:8000/api/product/multiple-form", data)
        .then((response) =>
          this.$router
            .push({ name: "product" })
            //   // console.log(response.data)
            // )
            .catch((error) => console.log(error, "a"))
            .finally(() => (this.loading = false))
        );
      // this.products.push(data)
    },
    addField(value, fieldType) {
      fieldType.push({ value: "" });
    },
    removeField(index, fieldType) {
      fieldType.splice(index, 1);
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
