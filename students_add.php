<?php
session_start();
$user_type = $_SESSION["user_type"];
if ($user_type == NULL) {
  header("Location: login.php");;
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
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  

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
                        <h3>新增會員</h3>
                    </div>
                    <div class='card-body' align=center>

                        
                             <form method=POST action=students_post.php>
                             學號：<input type=text  name=sid size=30>
                            <br>
                             姓名：<input type=text  name=sname size=30>
                            <br>
                             密碼：<input type=text name=pass size=30>
                            <br>    
                        <Select name="class" style="width:120px">
                        <Option>班級</Option>
                        <Option Value="1">進四機一甲</Option>
                        <Option Value="2">進四機二甲</Option>
                        <Option Value="3">進四機三甲</Option>
                        <Option Value="4">進四機四甲</Option>
                        </Select>
                        <br>                   
                        <Select name="job" style="width: 120px">
                        <Option>職稱</Option>
                        <Option Value="1">會長</Option>
                        <Option Value="2">副會長</Option>
                        <Option Value="3">財務長</Option>
                        <Option Value="4">公關長</Option>
                        <Option Value="5">文書長</Option>
                        <Option Value="6">活動長</Option>
                        <Option Value="7">系會員</Option>
                        </Select>
                        <br>
                        <input type=submit value=新增>
                        </form>
                       
                         <a href='students.php'>不新增，直接回去</a>
                        


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