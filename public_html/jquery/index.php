<?php include('./jq_header.php') ?>

<div class="container mx-auto mt-5" id="jscarousel1">
  <div id="carouselExampleControls" class="carousel slide carousel_custom" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="../img/jquery.jpg" class="d-block w-100" alt="...">
      </div>
    </div>
  </div>

</div>

<div class="container mt-5 w-50 mx-auto">
  <!-- Assignment1 -->
  <div id="jqassignment1" class="w-75 mx-auto d-none">
    <h1 class="text-primary text-center">JQuery_Radio</h1>

    <div class="form-check form-check-inline mt-5">

      <label class="form-check-label" for=""><input class="form-check-input tech" type="radio" name="tech" id=""
          value="PHP">PHP</label><span id="selected-text" class="ms-3"></span>
    </div>
    <div class="form-check form-check-inline">

      <label class="form-check-label" for=""><input class="form-check-input tech" type="radio" name="tech" id=""
          value="ASP.NET">ASP.NET</label><span id="selected-text" class="ms-3"></span>
    </div>
    <div class="form-check form-check-inline">

      <label class="form-check-label" for=""><input class="form-check-input tech" type="radio" name="tech" id=""
          value="ASP">ASP</label><span id="selected-text" class="ms-3"></span>
    </div>
    <div class="form-check form-check-inline">
      <label class="form-check-label" for=""> <input class="form-check-input tech" type="radio" name="tech" id=""
          value="JSP">JSP</label><span id="selected-text" class="ms-3"></span>
    </div>
    <div class="form-check form-check-inline">

      <label class="form-check-label" for=""><input class="form-check-input tech" type="radio" name="tech" id=""
          value="PERL">PERL</label><span id="selected-text" class="ms-3"></span>
    </div>
    <div class="form-check form-check-inline">

      <label class="form-check-label" for=""> <input class="form-check-input tech" type="radio" name="tech" id=""
          value="Cold Fusion">Cold Fusion</label><span id="selected-text" class="ms-3"></span>
    </div>
    <div class="form-check form-check-inline mt-2">

      <label class="form-check-label" for=""> <input class="form-check-input tech" type="radio" name="tech" id=""
          value="Other">Other</label><span id="selected-text" class="ms-3"></span>
    </div>
    <div>


    </div>

  </div>

  <!-- Assignment2 -->

  <div class="d-none" id="jqassignment2">
    <h1 class="text-center text-primary">JQuery_DropDown</h1>
    <div id="container1" class="mt-5">

    </div>
    <div id="container2" style="display: inline-flex;" class="mt-5">

    </div>

  </div>

  <!-- Assignment3 -->

  <div class="d-none" id="jqassignment3">
    <h1 class="text-center text-primary">CRUD_API</h1>
    <form>
      <div class="mb-3">
        <label for="name" class="form-label">Name:</label>
        <input type="text" class="form-control" id="name" required>

      </div>

      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email:</label>
        <input type="email" class="form-control" id="email" required>
      </div>

      <div class="mb-3">
        <label for="gender" class="form-label">Gender:</label>
        <div class="form-check form-check-inline ps-5">
          <input class="form-check-input" type="radio" name="gender" id="" value="male">
          <label class="form-check-label" for="">Male</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="gender" id="" value="female">
          <label class="form-check-label" for="">Female</label>
        </div>
      </div>

      <div class="mb-3">
        <label for="gender" class="form-label">Status:</label>
        <div class="form-check form-check-inline ps-5">
          <input class="form-check-input" type="radio" name="status" id="" value="active">
          <label class="form-check-label" for="">Active</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="status" id="" value="inactive">
          <label class="form-check-label" for="">Inactive</label>
        </div>

      </div>
      <button type="button" class="btn btn-primary px-5" id="add">Add</button>
      <button type="button" class="btn btn-primary px-5 ms-2" id="get">Get</button>
      <button type="button" class="btn btn-primary px-5 ms-2" id="update2" style="display: none;">Update</button>


    </form>

    <div class="mt-3 table1" id="data">
     
    </div>

  </div>



</div>



<script src="./jq.js"></script>
<script src="../main.js"></script>

</body>

</html>