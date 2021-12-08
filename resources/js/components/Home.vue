<template>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <Sidebar />
        <div class="card text-center mt-5 p-5">
          <h1>Home</h1>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
import Sidebar from "./sidebar/Sidebar.vue";
export default {
  data() {
    return {
      loggedIn: localStorage.getItem('loggedIn'),
      token: localStorage.getItem('token'),
    }
  },
  components: {
    Sidebar,
  },
  mounted() {
    if (!this.loggedIn) {
      return this.$router.push({name: 'login'})
    }
  }
};
</script>