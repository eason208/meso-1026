<?php
session_start();
$user_type = $_SESSION["user_type"];
$mid = $_SESSION["mid"];
if ($mid != 1  || $mid==NULL) {
    header("Location: stuchk.php");
}
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
  <div class='container'>
        <div class='card-body' align=center>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="students.php">系會名單</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item ">
                            <a class="nav-link" href="students.php">系學會幹部</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="students2.php">會員<span class="sr-only">(current)</span></a>
                        </li>
                        
                    </ul>
                    
                </div>
            </nav>

  <br>

  <div class='container'>
    <div class='row'>
      <div class='col-md-12'>
        <div class='card card-primary'>
          <div class='card-header' align=center>
            <h3>系學會名單管理-會員</h3>
          </div>
          <?php
          echo "<a class='btn btn-info btn-xs' href='students_add.php'>Add</a>";
            ?>   
          <div class='card-body' align=center>
            <table class='table table-striped table-hover'>

              <?php
              require "includes/dbconfig.php";

              $sql = "SELECT * FROM students WHERE mid=2";
              $result = $conn->query($sql);
              ?>

              <thead class='thead-dark'>
                <tr>
                    <!-- <th>職稱</th> -->
                   <th>班級</th>
                   <th>姓名</th>
                   <th>編輯</th>
                </tr>
               
              </thead>

              <tbody>
                <?php
                if ($result->num_rows > 0) {
                  

                  while ($row = $result->fetch_assoc()) {
                    $sid = $row["sid"];
                    $id = $row["id"];
                    echo  "<td>".$row["sname"] . "</td>" . "<td>" . $row["class"] . "</td>";
                    if ($mid==1) {
                      echo "<td>";
                      echo "<a class='btn btn-info btn-xs' href='students2_edit.php?id=$id'>Edit</a>";
                      echo " ";
                      echo "<a class='btn btn-secondary btn-xs' href='students2_delete.php?id=$id'>Delete</a>";
                      echo "</td>";
                    }
                    echo "</tr>";
                  }
                } else {
                  echo "0 results";
                }
                $conn->close();
                ?>

              </tbody>
            </table>
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