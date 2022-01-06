<template>
  <div class="div">
    <h3 class="text-center">3</h3>
    <label for="exampleInputEmail1">Other Documents</label>
    <div class="form-group">
      <div class="row">
        <div class="col-6 appendChild">
          <input
            type="file"
            class="form-control"
            id="name"
            aria-describedby="name"
            placeholder="Name"
          />
          <small id="name" class="form-text text-muted">(Opsional)</small>
        </div>
        <div class="col-3">
          <button class="btn-primary" @click="add()">Add</button>
           <button class="btn-danger" @click="trash()">Delete</button>
        </div>
      </div>
    </div>
    <div id="#myList1"></div>
  </div>
</template>
<script>
export default {
  methods: {
    add(){
    
    },
    trash(){
         let elements = document.getElementsByClassName('appendChild');
         elements.remove();
    }
  }
}
</script>