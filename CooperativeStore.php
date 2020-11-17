<?php
session_start();
$user_type = $_SESSION["user_type"];
$mid=$_SESSION["mid"];
if ($user_type == NULL) {
  header("Location: login.php?redir=CooperativeStore.php");;
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

  <br>

  <div class='container'>
    <div class='row'>
      <div class='col-md-12'>
        <div class='card card-primary'>
          <div class='card-header' align=center>
            <h3>系學會合作商店</h3>
          </div>
          <div class='card-body' align=center>
            <table class='table table-striped table-hover'>

              <?php
              require "includes/dbconfig.php";

              $sql = "SELECT * FROM cooperativestore order by id desc";
              $result = $conn->query($sql);
            
              ?>

              <thead class='thead-dark'>
                <tr>
                  <?php
              
                    echo "<th>合作商家</th>";
                    echo "<th>地址</th>";
                  
              
              
                  ?>
                </tr>
              </thead>

              <tbody>
                <?php
                
                
                
                if ($result->num_rows > 0) {
                  

                 while ($row = $result->fetch_assoc()) {
                    $id = $row["id"];
                     echo "<td>" . $row["storename"] . "</td>" . "<td>" . $row["link"] . "</td>";
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