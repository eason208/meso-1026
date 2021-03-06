<?php
// session_start();
// $user_type = $_SESSION["user_type"];
// if ($user_type == NULL) {
//   header("Location: login.php");;
// }
?>

<!DOCTYPE html>
<html>

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
                <a class="navbar-brand" href="member.php">系所成員</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item ">
                            <a class="nav-link" href="member.php"">教授</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="cadre.php">系學會幹部</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="classmember.php">級任成員<span class="sr-only">(current)</span></a>
                        </li>
                    </ul>
                   
                </div>
            </nav>
            <div class='container'>
    <div class='row'>
      <div class='col-md-12'>
        <div class='card card-primary'>
          <div class='card-header' align=center>
            <h3>各年級導師&班代</h3>
          </div>
          <div class='card-body' align=center>
            <table class='table table-striped table-hover'>
              <thead class='thead-dark'>
              <tr>
                  <th>班級</th>
                  <th>導師</th>
                  <th>班代</th>
                </tr>
              </thead>
              <tbody>
              <tr>
                  <td>
                    進四機一甲
                  </td>
                  <td>
                    蔡明章
                  </td>
                  <td>
                    金珊
                  </td>
                </tr>

                <tr>
                  <td>
                    進四機二甲
                  </td>
                  <td>
                    鄭宗杰
                  </td>
                  <td>
                    吳旻晉
                  </td>
                </tr>

                <tr>
                  <td>
                    進四機三甲
                  </td>
                  <td>
                    陳昭先
                  </td>
                  <td>
                    莊釋閔
                  </td>
                </tr>

                <tr>
                  <td>
                    進四機四甲
                  </td>
                  <td>
                    ???
                  </td>
                  <td>
                    ???
                  </td>
                </tr>

              </tbody>
            </table>
              <!-- <nav aria-label="...">
              <ul class="pagination pagination-lg">
              <li class="page-item disabled">
              <a class="page-link" href="#" tabindex="-1">1</a>
              </li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              </ul>
              </nav> -->
</nav>
            <p style="text-align:left;"><?php require "footer.php"; ?></p>
          </div>
          <div class='card-footer' align=center>
            <em>Contact: nkustmeso@nkust.edu.tw</em>
          </div>
        </div>
      </div>
    </div>
    <hr>
    <em>Copyright 2016 <a href='http://nkust-meso.com'>http://mkust-meso.com</a>. All rights reserved.</em>

  </div>

</body>

</html>