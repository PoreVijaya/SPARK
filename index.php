<?php

if(isset($_POST['name'])){
    $username = "root";
    $password ="";
    $database = "bank";

    $con = mysqli_connect("localhost", $username, $password, $database) or die("Unable to connect");

    // echo "Great Work!!!";

    $Name = $_POST['Name'];
    $email = $_POST['E-mail'];
    $sql = "INSERT INTO `bank`.`bank` (`Name`, `E-mail`, `Bank Balance`) VALUES ('$Name', '$E-mail', '$Bank Balance');";
      // echo $sql;
    
    if($con->query($sql) == true){
      //echo "Successfully inserted";
    }
    else{
      echo "ERROR: $sql <br> $con->error";
    }
    $con->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Banking System</title>
    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">

    <!-- Fonts -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@500&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">

    <!-- AOS  -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css"/>

</head>
<body onload="loader()">

  <!-- loader for splash screen -->
  <div id="loading"></div>

    <!-- navbar starts here  -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="./index.html">World Bank</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="./index.html">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./customers.html">Customers</a>
            </li>
          </ul>
        </div>
    </nav>
    <!-- navbar ends here  -->

    <!-- here content starts here -->
    <div class="container-fluid hero-content">
      <div class="row align-items-center">
        <div class="col-md-6 col-sm-12 text-center" data-aos="fade-up">
          <h1>Money transaction</h1>
          <p class="lead muted">Easy way to transfer money from any where</p>
          <p>Welcome</p>
          <br>
          <br>
          <a class="get-started" href="./customers.html">Get Started</a>
        </div>
        <div class="col-md-6 col-sm-12 text-center" data-aos="fade-left">
          <div class="hero-img-div">
            <img class="hero-img" src="assets/media/hero-img.svg" alt="img-showing-money-transfer">
          </div>
        </div>
      </div>
    </div>
    <!-- here content ends here -->




    <!-- footer starts here -->
    <footer>
      <hr>
        <div class="col-md-6 text-center">
            <ul class="social-icons">
              Contact Me:
              <li><a target="_blank" class="github" href="https://github.com/PoreVijaya"><i class="fab fa-github fa-2x"></i></a></li>
              
              <li><a target="_blank" class="linkedin" href="linkedin.com/in/vijaya-pore-555a3a226"><i class="fab fa-linkedin fa-2x"></i></a></li>   
            </ul>
        </div>
      </div>
    </footer>
    <!-- footer ends here -->

    <!-- spalsh screen js -->
    <script>
      var preloader = document.getElementById("loading");
      function loader(){
        preloader.style.display = 'none';
      }
    </script>

    <script src="assets/js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js"></script>
    <script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js"></script>

    <!-- aos data  -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init({
        duration: 700,
      });
    </script>
    
</body>
</html>
