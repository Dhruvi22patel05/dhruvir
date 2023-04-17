
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Portal</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>
  <link href="./style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <link href="/dist/output.css" rel="stylesheet">

</head>

<body style="background-color:#f5f5f5">
  <div class="d-flex flex-row">

    <div>
      <button class="btn mt-2 border m-2 animateoff" type="button" data-bs-toggle="offcanvas"
        data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions" id=""><img
          src="../img/icons8-menu-rounded-50.png" alt="Offcanvas" class="img-fluid w-50 h-50"></button>

      <div class="offcanvas offcanvas-start" style="background-color:#3d434f" data-bs-scroll="true"
        data-bs-backdrop="false" tabindex="-1" id="offcanvasWithBothOptions"
        aria-labelledby="offcanvasWithBothOptionsLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel"></h5>
          <button type="button" class="btn-close text-bg-light animateoffcancle" data-bs-dismiss="offcanvas"
            aria-label="Close"></button>
        </div>

        <div class="offcanvas-body animatebody">

          <div>
            <img src="./img/MicrosoftTeams-image.png" class="img-fluid w-25 h-50 mx-auto d-block rounded-circle">
            <p class="text-center text-light mt-1">Dhruvi Patel</p>
            <p class="text-center text-light mt-1">OPS</p>
            <p class="text-center text-light">dhruvir.patel@radixweb.com</p>
          </div>
          <div class="text-center mt-5">

            <a href="./index.php" class=" text-decoration-none text-dark mt-2"><button
                class="btn btn-light border border-primary-subtle w-50"> <span><img src="./img/icons8-home-16.png"
                    class="img-fluid me-2"></span>Home</button></a>

            <a href="./js/index.php" class="  text-decoration-none text-dark "><button
                class="btn btn-light border border-primary-subtle w-50 mt-3"> <span><img
                    src="./img/icons8-javascript-20.png" class="img-fluid me-2"></span>Javascript</button></a>

            <a href="./jquery/index.php" class="text-decoration-none text-dark "><button
                class="btn btn-light border border-primary-subtle w-50 mt-3 "> <span><img
                    src="./img/icons8-jquery-is-a-javascript-library-designed-to-simplify-html-24.png"
                    class="img-fluid me-2"></span>Jquery</button></a>

            <a href="#" class="text-decoration-none text-dark"><button
                class="btn btn-light border border-primary-subtle w-50  mt-3"> <span><img src="./img/icons8-php-20.png"
                    class="img-fluid me-2"></span>PHP</button></a>

            <a href="#" class="text-decoration-none text-dark"><button
                class="btn btn-light border border-primary-subtle w-50 mt-3 ms-0"><img
                  src="./img/Screenshot from 2023-04-13 16-43-06.png" class="img-fluid me-2">OPS</button></a>
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
              <a class="nav-link text-light hclass" aria-current="page"
                href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" href="./js/index.php">Javascript</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" href="./jquery/index.php">JQuery</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" href="./php/index.php">PHP</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" href="#">OPS</a>
            </li>



          </ul>
        </div>


      </nav>
    </div>
  </div>