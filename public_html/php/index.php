<?php include('./php_header.php') ?>

<div class="container mx-auto mt-5" id="jscarousel">
  <div id="carouselExampleControls" class="carousel slide carousel_custom" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="../img/php.jpg" class="d-block w-100" alt="...">
      </div>
    </div>
  </div>

</div>


     
<div class="container mt-5 w-50 mx-auto">
  <!-- Assignment1 -->
  <div id="form" class="d-none">
    <h1 class="text-primary text-center">JS_Calculator</h1>
    <div class="mb-3 mt-3">
      <label for="" class="form-label">Please enter first number : </label>
      <input type="text" class="form-control" name="fnum" step="0.01" onchange="change(this.value)" id="num1" required>
    </div>

    <div class="mb-3">
      <label for="" class="form-label">Please enter second number : </label>
      <input type="text" class="form-control" name="snum" step="0.01" onchange="change(this.value)" id="num2" required>
    </div>

    <label for="" class="form-label">Please select operation you want to perform : </label>
    <div class="form-check">

      <input class="form-check-input" type="radio" name="radio" value="r1">
      <label class="form-check-label" for="">
        Addition
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="radio" value="r2">
      <label class="form-check-label" for="">
        Subtraction
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="radio" value="r3">
      <label class="form-check-label" for="">
        Multiplication
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="radio" value="r4">
      <label class="form-check-label" for="">
        Division
      </label>
    </div>
    <div class="mt-3 mb-3">
      <button type="submit" class="btn btn-primary" onclick="calculate(num1,num2)">Calculate</button>
      <button type="reset" class="btn btn-primary" onclick="reset1()">Reset</button>
    </div>


    <div class="mb-3 result">
      <label for="" class="form-label">Result : </label>
      <input type="number" class="form-control" step="0.01" name="result" id="result">
    </div>

  </div>

  <!-- Assignment2 -->

  <div class="d-none" id="Assignment2">
    <h1 class="text-center text-primary">Date Validation</h1>
    <div class="mb-3">
      <label for="" class="form-label">Enter the Date in MM-DD-YYYY Format:</label>
      <input type="text" class="form-control" name="date" id="date1" placeholder="MM-DD-YYYY" required>

    </div>
    <button type="submit" class="btn btn-primary" id="validatedate">Validate</button>
  </div>

  <!-- Assignment3 -->

  <div class="d-none" id="Assignment3">
    <h1 class="text-center text-primary">Employee Form Validation</h1>
    <form action="" id="myForm">
      <div class="mb-3">
        <label for="" class="form-label">Employee Id: <span id="eid1"></span></label>
        <input type="text" class="form-control field" name="eid" id="eid" placeholder=""
          onfocus="document.getElementById('eid1').style.display='none';" onchange="formIdValidate(this.value)"
          required="">
      </div>

      <div class="mb-3">
        <label for="" class="form-label">Employee Name:</label>
        <input type="text" class="form-control field" name="ename" id="ename" placeholder="" required="">
      </div>

      <div class="mb-3">
        <label for="" class="form-label">Age: <span id="age1"></span></label>
        <input type="text" class="form-control field" name="age" id="age" placeholder=""
          onfocus="document.getElementById('age1').style.display='none';" onchange="formAgeValidate(this.value)"
          required="">
      </div>
      <label for="" class="form-label">Gender: <span id="g1"></span></label>
      <div onformchange="">
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="gender" id="male" value="male" required="">
          <label class="form-check-label" for="">Male</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="gender" id="female" value="female" required="">
          <label class="form-check-label" for="">Female</label>
        </div>
      </div>
      <div class="mb-3">
        <label for="" class="form-label">Designation:</label>
        <input type="text" class="form-control field" name="designation" id="designation" placeholder="" required="">
      </div>
      <div class="mb-3">
        <label for="" class="form-label">Salary:</label>
        <input type="number" class="form-control field" name="salary" id="salary" placeholder="" required="">
      </div>
      <div class="mb-3">
        <label for="" class="form-label">Location:</label>
        <select class="form-select form-select-lg" name="loc" id="loc" required>
          <option>Select one</option>
          <option value="ahmedabad">Ahmedabad</option>
          <option value="bharuch">Bharuch</option>
          <option value="surat">Surat</option>
        </select>
      </div>
      <div class="mb-3">
        <label for="" class="form-label">Email id:</label>
        <input type="email" class="form-control field" name="email" id="email" placeholder="" required="">
      </div>
      <div class="mb-3">
        <label for="" class="form-label">Date Of Joining:</label>
        <input type="date" class="form-control field" name="doj" id="doj" placeholder="" required="">
      </div>
      <div class="mb-3">
        <label for="" class="form-label">Contact Number: <span id="cno1"></span></label>
        <input type="number" class="form-control field" name="cno" id="cno" placeholder=""
          onfocus="document.getElementById('cno1').style.display='none';" onchange="validateContact(this.value)">
      </div>

      <button class="btn btn-success" type="button">Submit</button>
      <p id="welcomeMessage"></p>

    </form>

  </div>

  <!-- Assignment4 -->

  <div class="d-none" id="Assignment4">
    <h1 class="text-center text-primary">JS_Timer</h1>
    <p class="timerp" id="days"></p>
    <p class="timerp" id="hours"></p>
    <p class="timerp" id="mins"></p>
    <p class="timerp" id="secs"></p>
    <h2 id="end"></h2>

    <button type="button" class="btn btn-secondary mt-5" onclick="startTimer()">Start Exam</button>
  </div>


</div>


<script src="./php_main.js"></script>
<script src="../main.js"></script>
<script src="./A1Js/main.js"></script>

</body>

</html>