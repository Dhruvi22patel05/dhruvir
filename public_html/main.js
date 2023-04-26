$(document).ready(function () {

  $('.animationc').addClass('animate__animated animate__backInLeft');

  //  $('.animationc').hover(function(){
  //   $(this).removeClass('animate__animated animate__backInLeft');
  //  })

  $('.carousel_custom').addClass('animate__animated animate__bounceInDown');

  $('.animateoffcancle').click(() => {
    $('.animatebody').removeClass('animate__animated animate__bounceInDown')

  })
  $('.animateoff').click(function () {
    $('.animatebody').addClass('animate__animated animate__bounceInDown')
  })

  $("#searchbar").on("keyup", function () {
    var value = $(this).val().toLowerCase();
    console.log(value);
    
    $(".searchcollapse li").filter(function () {

      if(value.trim() === "")
      {
        $(".searchcollapse").removeClass('show');
      }
      else{

        $(".searchcollapse").addClass('show');
      }

      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);

    });
    if (($(".searchcollapse li").text().toLowerCase().indexOf(value)) <= -1) {
      $(".searchcollapse").removeClass('show');
      $('#content').html(' No Such File');
    }
  });
  
  
  
  
  
  
  

  $("#searchbar1").on("keyup", function () {

    var value = $(this).val().toLowerCase();
    console.log(value);
    
    $(".searchcollapse li").filter(function () {

      if(value.trim() === "")
      {
        $(".searchcollapse").removeClass('show');
      }
      else{

        $(".searchcollapse").addClass('show');
      }

      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);

    });
    if (($(".searchcollapse li").text().toLowerCase().indexOf(value)) <= -1) {
      $(".searchcollapse").removeClass('show');
      $('#content').html(' No Such File');
    }

  });
  
  
  
  
  
  
  
  
  



  $('#a1').click(() => {
    $('#jscarousel').hide();
    $('#form').removeClass('d-none');
    $('#form').addClass('animate__animated animate__zoomIn')
    $('#Assignment2').addClass('d-none');
    $('#Assignment3').addClass('d-none');
    $('#Assignment4').addClass('d-none');

  })

  $('#a2').click(() => {
    $('#jscarousel').hide();
    $('#Assignment2').removeClass('d-none');
    $('#Assignment2').addClass('animate__animated animate__zoomIn')
    $('#form').addClass('d-none');
    $('#Assignment3').addClass('d-none');
    $('#Assignment4').addClass('d-none');

  })

  $('#a3').click(() => {
    $('#jscarousel').hide();
    $('#Assignment3').removeClass('d-none');
    $('#Assignment3').addClass('animate__animated animate__zoomIn')
    $('#Assignment2').addClass('d-none');
    $('#form').addClass('d-none');
    $('#Assignment4').addClass('d-none');

  })

  $('#a4').click(() => {
    $('#jscarousel').hide();
    $('#Assignment4').removeClass('d-none');
    $('#Assignment4').addClass('animate__animated animate__zoomIn')
    $('#Assignment2').addClass('d-none');
    $('#Assignment3').addClass('d-none');
    $('#form').addClass('d-none');

  })

  // Js Assignment2 

  $('#validatedate').click(() => {
    console.log('inside')
    var date = document.getElementById("date1").value;
    var regex = /^\d{2}-\d{2}-\d{4}$/;

    if (!regex.test(date)) {
      alert("Invalid date format. Please enter date in MM-DD-YYYY format.");
    }
    else {

      var components = date.split("-");
      var month = parseInt(components[0]);
      var day = parseInt(components[1]);
      var year = parseInt(components[2]);
      if (month < 1 || month > 12) {
        alert("Invalid month. Month should be within the range 1 to 12.");
      }
      else if (day < 1 || day > 31) {
        alert("Invalid day. Day should be within the range 1 to 31.");
      }
      else {
        const d = new Date(year, month, 0);
        let day1 = d.getDate();

        if (day > day1) {
          alert("Date is invalid");
        }
        else {
          alert("Date is Valid");
        }
      }

    }

  })

  // Jquery assignments
  $('#jqa1').click(() => {
    $('#jscarousel1').hide();
    $('#jqassignment1').removeClass('d-none');
    $('#jqassignment1').addClass('animate__animated animate__zoomIn')
    $('#jqassignment2').addClass('d-none');
    $('#jqassignment3').addClass('d-none');

  })

  $('#jqa2').click(() => {
    $('#jscarousel1').hide();
    $('#jqassignment2').removeClass('d-none');
    $('#jqassignment2').addClass('animate__animated animate__zoomIn')
    $('#jqassignment1').addClass('d-none');
    $('#jqassignment3').addClass('d-none');

  })

  $('#jqa3').click(() => {
    $('#jscarousel1').hide();
    $('#jqassignment3').removeClass('d-none');
    $('#jqassignment3').addClass('animate__animated animate__zoomIn')
    $('#jqassignment1').addClass('d-none');
    $('#jqassignment2').addClass('d-none');

  })




})

// Js Assignment3

var reg = /^\d{5,}$/;
var regage = /^[0-9]{1,}$/;
var phoneno = /^\d{10}$/;
var err = "false";

function doc(str) {
  return document.getElementById(str);
}

function formIdValidate(str) {
  if (!reg.test(str)) {
    doc("eid1").style.display = "inline-block";
    doc("eid1").innerHTML = "Id should be number and atleast have 5 digits"
  }
}

function formAgeValidate(str) {
  if (!regage.test(str)) {
    doc("age1").style.display = "inline-block";
    doc("age1").innerHTML = "please enter valid age"

  }
  else {
    err = "true";
  }
}
function validateContact(str) {


  if (!phoneno.test(str)) {
    doc("cno1").style.display = "inline-block";
    doc("cno1").innerHTML = "contact should have only 10 digits";

  }
  else {
    err = "true";
  }
}

// Js Assignment4

const startTime = new Date();
function startTimer() {
  const examDuration = 3 * 60 * 60 * 1000;
  function displayTimeRemaining() {
    const elapsed = new Date() - startTime;
    const remaining = examDuration - elapsed;
    const hours = Math.floor(remaining / 3600000);
    const minutes = Math.floor(remaining % 3600000 / 60000);
    const seconds = Math.floor(remaining % 60000 / 1000);
    document.getElementById("hours").innerHTML = hours + ":";
    document.getElementById("mins").innerHTML = minutes + ":";

    document.getElementById("secs").innerHTML = seconds;

    if (elapsed >= examDuration) {
      clearInterval(timer);
      alert("Time is up!!");
    }
  }

  const timer = setInterval(displayTimeRemaining, 1000);
}


