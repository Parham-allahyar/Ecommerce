<template  >
  <div class="card">
    <div class=" row d-flex justify-content-center align-items-center ">
      <div class="col-md-6  col-12">
        <img
          src="../../assets/Images/Mobile-login.jpg"
          class="img-fluid"
        />
      </div>
      <div class="col-lg-6 col-12">
        <form class="d-flex justify-content-center align-items-center"  >
          <div class="group">
            <input type="text" required />
            <span class="highlight"></span>
            <span class="bar"></span>
            <label>شماره تلفن همراه خود را وارد کنید</label>
          </div>
        </form>
      </div>
    </div>
  </div>
</template>

<script>

export default {
  beforeCreate: function() {
    document.body.className = "home";
  },
};
</script>

<style  scoped   src="./../../styles/auth.css"> </style>
