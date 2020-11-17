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

    <br>

    <div class='container'>
        <div class='row'>
            <div class='col-md-12'>
                <div class='card card-primary'>
                    <div class='card-header' align=center>
                        <h3>系學會留言板</h3>
                    </div>
                    <div class='card-body' align=center>

                        <?php
                        $id = $_GET["id"];
                        if ($id == NULL) {
                            header("Location: reuters.php");
                            exit;
                        }
                        require "includes/dbconfig.php";

                        $sql = "SELECT * FROM students WHERE id='$id' LIMIT 1";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            $row = $result->fetch_assoc();
                            $id = $row["id"];
                            $name = $row["sname"];
                            $class = $row["class"];
                            $job = $row["job"];
                            $pass = $row["password"];
                            $sid = $row["sid"];
                            
                            echo "目前更改的是".$job."<br>";
                            echo "<form method=POST action=students_update.php>";
                            echo "<input type=hidden value=$id name=id>";
                            echo "學號：<input type=text value='$sid' name=sid size=19>";
                            echo "<br>";
                            echo "姓名：<input type=text value='$name' name=name size=19>";
                            echo "<br>";
                            // echo "班級：<input type=text value='$class' name=class size=30>";
                           
                           
                            echo "密碼：<input type=text value='$pass' name=pass size=19>";
                            echo "<br>";
                            echo "班級"."<br>";
                            echo   "<Select name='class' style='size:20' >";
                            echo"<Option>$class</Option>";
                            echo"<Option Value='1'>進四機一甲</Option>";
                            echo"<Option Value='2'>進四機二甲</Option>";
                            echo"<Option Value='3'>進四機三甲</Option>";
                            echo "<Option Value='4'>進四機四甲</Option>";
                            echo"</Select>";
                            echo "<br>";
                            echo "<input type=submit value=修改>";
                            echo "</form>";
                            echo "<a href='students.php'>不修改，直接回去</a>";
                        } else {
                            echo "找不到你要編輯的紀錄<br>";
                            echo "<a href='reuters.php'>回上頁</a>";
                        }
                        $conn->close();
                        ?>

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