<?php
// session_start();
// $user_type = $_SESSION["user_type"];
// if ($user_type == NULL) {
//     header("Location: login.php");;
// }
?>

<!doctype html>

<head>
    <meta charset='utf-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NKUSTMESO</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <style>
        h1,
        h2,
        h3,
        h4,
        h5,
        p,
        div {
            font-family: 微軟正黑體;
        }
    </style>
</head>

<body>
    <?php require "includes/menu.php"; ?>

    <br>
    <div class='container'>
        <div class='card-body' align=center>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="acphoto.php">活動剪影</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item ">
                            <a class="nav-link" href="acphoto.php">109學年度新生始業輔導</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="acphoto2.php">109學年度迎新活動<span class="sr-only">(current)</span></a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link" href="classmember.php">級任成員</a>
                        </li> -->
                    </ul>
                   
                </div>
            </nav>

    <div class="bd-example">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
      
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="imags/activity/109-2-1.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <!-- <h5>機械系工作人員合影</h5> -->
        </div>
      </div>
      <div class="carousel-item">
        <img src="imags/activity/109-2-2.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <!-- <h5>會長宣布注意事項</h5> -->
       
        </div>
      </div>
      <!-- <div class="carousel-item">
        <img src="imags/activity/109-1-3.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>會長宣布注意事項</h5>
        </div>
      </div> -->
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <div class='card-footer' align=center>
            <em>Contact: nkustmeso@nkust.edu.tw</em>
        </div>
        
        <hr>
        <em>Copyright 2016 <a href='http://nkust-meso.com'>http://mkust-meso.com</a>. All rights reserved.</em>
</div>

</body>

</html>