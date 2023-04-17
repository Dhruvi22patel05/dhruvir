
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Portal</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <link href="../style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

</head>

<body style="background-color:#f5f5f5">
  <div class="d-flex flex-row">

    <div>
      <button class="btn mt-2 border m-2 animateoff" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions"><img src="../img/icons8-menu-rounded-50.png" alt="Offcanvas" class="img-fluid w-50 h-50"></button>

      <div class="offcanvas offcanvas-start tw-bg-slate-200" style="background-color:#3d434f" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title text-light" id="offcanvasWithBothOptionsLabel">Dhruvi Patel</h5>
          <button type="button" class="btn-close text-bg-light animateoffcancle" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body animatebody">

          <form class="d-flex mb-5">
            <input class="form-control h-75 mt-2" type="text" id="searchbar1" placeholder="Search" aria-label="Search">
            <button class="btn rounded-circle" id="btnclick" type="button"><span><img src="../img/icons8-search-40.png" class="bg-light img-fluid " alt="searchicon"></span></button>
          </form>
          <p class="text-light my-3" id="content"></p>
          <div class="accordion" id="accordionExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button text-dark fs-5" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"><span><img src="../img/icons8-assignment-50.png" class="img-fluid me-2" alt="Assignmenticon"></span>
                  Assignments
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse searchcollapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <ul class="list-group">
                    <li class="list-group-item" id="jqa1">JQuery_Radio</li>
                    <li class="list-group-item" id="jqa2">JQuery_Dropdown</li>
                    <li class="list-group-item" id="jqa3">CRUD_API</li>

                  </ul>
                </div>
              </div>
            </div>
          </div>

        </div>


      </div>
    </div>

    <div class="flex-grow-1">
      <nav class="navbar navbar-expand-lg navbar-custom">

        <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
          aria-label="Toggle navigation">
          <span class="text-light">Menu</span>
        </button>
        <div class="collapse navbar-collapse hoverable" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0 me-4">
            <li class="nav-item">
              <a class="nav-link text-light" aria-current="page"
                href="../index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" href="../js/index.php">Javascript</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" href="index.php">JQuery</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" href="../php/index.php">PHP</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" href="#">OPS</a>
            </li>



          </ul>
        </div>


      </nav>
    </div>
  </div>