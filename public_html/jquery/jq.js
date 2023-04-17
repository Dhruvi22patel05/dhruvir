let data1;
let index;
let data;
$(document).ready(function () {

    // assignment1
    let selectedtxt
    $('label').click(function () {
      $('span').css('display','none')
      $(this).children().prop("checked", "true");
      selectedtxt = $(".tech:checked").val()
      $(this).next('span').css('display','inline').text("You have selected : " + selectedtxt);
    
  
    });

    // assignment2
    var values = ["Please Select", "India", "USA", "United Kingdom", "South-Korea", "China"];

    var select = $('<select>').prop('id', 'country')
      .prop('name', 'country').css({ "margin-left": "10px", "width": "250px" });
  
    $(values).each(function () {
      select.append($("<option>")
        .prop('value', this)
        .text(this));
    });
  
    var label = $("<label>").prop('for', 'country')
      .text("Choose your Country: ");
  
    var br = $("<br>");
  
    $('#container1').append(label).append(select).append(br);
  
  
  
  
    var list = $('<ul>').prop('id', 'country-list').css("list-style", "none");
  
    $(values).each(function () {
      list.append($("<li>")
        .text(this));
    });
  
    var label1 = $("<span>")
      .text("You have selected: ");
  
  
    $('#container2').append(label1).append(list);
  
    $('#country').click(function () {
      var selectedcountry = $(this).val();
      if (selectedcountry === "Please Select") {
        $("#country-list li").show();
        $("#country-list li:contains(" + selectedcountry + ")").hide();
  
  
      }
      else {
        $("#country-list li").hide();
        $("#country-list li:contains(" + selectedcountry + ")").show();
      }
    });

    // assignment3
  
    $("#get").on("click", () => {
  
        var settings = {
          "url": "https://gorest.co.in/public/v2/users/",
          "method": "GET",
          "timeout": 0,
          "headers": {
            "Authorization": "Bearer 547e559ba024a0c2142b011209e6d31c118817988d3b4470c482c052b5edb638"
          },
        };
    
        $.getJSON(settings).done(function (response) {
          createTable(response);
        });
    
    
      });
    
      function createTable(data) {
        data1 = data;
        var table = `<table class="table">
          <thead class ="table-dark">
            <tr>
              <th scope="col">Id</th>
              <th scope="col">Name</th>
              <th scope="col">Email</th>
              <th scope="col">Gender</th>
              <th scope="col">Status</th>
              <th scope="col"></th>
              <th scope="col"></th>
              
            </tr>
          </thead>
          <tbody>`;
    
        for (let i of data1) {
          table += ` <tr>
            <th scope="row">${i.id}</th>
            <td>${i.name}</td>
            <td>${i.email}</td>
            <td>${i.gender}</td>
            <td>${i.status}</td>
            <td><button  type="button" class = "btn btn-success update1" data-id = "${i.id}">Update</button></td>
            <td><button class = "btn btn-success delete1" data-id = "${i.id}" >Delete</button></td>
          </tr>`
        }
        `</tbody >
        </table >`
    
        $("#data").html(table);
    
        $(".update1").click(function () {
          var id = $(this).data("id");
          for (let j of data1) {
            if (j.id == id) {
              index = j;
            }
          }
          var value = index.gender;
          var val1 = index.status;
          $("#name").val(index.name);
          $("#email").val(index.email);
          $("#email").prop("disabled", true);
          $("input[name=gender][value=" + value + "]").prop("checked", true);
          $("input[name=status][value=" + val1 + "]").prop("checked", true);
          $("#update2").css("display", "inline");
        });
    
        $(".delete1").click(function (){
          var id1 = $(this).data("id");
          var settings = {
            "url": "https://gorest.co.in/public/v2/users/" + id1,
            "method": "DELETE",
            "timeout": 0,
            "headers": {
              "Authorization": "Bearer 547e559ba024a0c2142b011209e6d31c118817988d3b4470c482c052b5edb638"
            },
          };
          
          $.ajax(settings).done(function (response) {
            $("#get").trigger("click");
          });
    
        });
      }
    
      $("#add").click(function () {
    
        var name = $("#name").val();
        var email = $("#email").val();
        var gender = $("input[name=gender]:checked").val();
        var status = $("input[name=status]:checked").val();
    
    
        var settings = {
          "url": "https://gorest.co.in/public/v2/users/",
          "method": "POST",
          "timeout": 0,
          "headers": {
            "Authorization": "Bearer 547e559ba024a0c2142b011209e6d31c118817988d3b4470c482c052b5edb638",
            "Content-Type": "application/json"
          },
          "data": JSON.stringify({
            "name": name,
            "email": email,
            "gender": gender,
            "status": status
          }),
        };
        $.post(settings).done(function (response) {
          $("#get").trigger("click");
        });
    
      });
    
    
      $("#update2").on("click", () => {
    
        var name = $("#name").val();
        var email = $("#email").val();
        var gender = $("input[name=gender]:checked").val();
        var status = $("input[name=status]:checked").val();
    
        var settings = {
          "url": "https://gorest.co.in/public/v2/users/" + index.id,
          "method": "PATCH",
          "timeout": 0,
          "headers": {
            "Authorization": "Bearer 547e559ba024a0c2142b011209e6d31c118817988d3b4470c482c052b5edb638",
            "Content-Type": "application/json"
          },
          "data": JSON.stringify({
            "name": name,
            "email": email,
            "gender": gender,
            "status": status
    
          }),
        };
    
        $.ajax(settings).done(function (response) {
          $("#get").trigger("click");
        });
    
      });
  
  });