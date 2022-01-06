<template>
  <div class="div">
    <h3 class="text-center">1</h3>
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
  </div>
</template>