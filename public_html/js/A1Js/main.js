function change(str){
  var reg = /^-?\d*(\.\d+)?$/;

  if(!reg.test(str))
  {
    alert("enter number only");
  }
}
function calculate(num1,num2){
 
  

  var n1 = parseFloat(num1.value);
  var n2 = parseFloat(num2.value);

 



  var r = document.getElementsByName("radio");

  for(i = 0; i < r.length; i++)
  {
    if(r[i].checked)
    {
       var selectedvalue = r[i].value;
    }
  }


  if(selectedvalue == "r1")
  {
    var result = n1 + n2 ;
    document.getElementById("result").value = result;
  }

  if(selectedvalue == "r2")
  {
    var result = n1 - n2 ;
    document.getElementById("result").value = result;
  }

  if(selectedvalue == "r3")
  {
    var result = n1 * n2 ;
    document.getElementById("result").value = result;
  }

  if(selectedvalue == "r4")
  {
    var result = n1 / n2 ;
    document.getElementById("result").value = result;
  }
}

function reset1(){
  document.getElementById("num1").value = "";
  document.getElementById("num2").value = ""; 
  document.getElementById("result").value = "";
  document.querySelector('input[name="radio"]:checked').checked = false;
 
}





