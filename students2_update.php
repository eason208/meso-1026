<?php
    $id = $_POST["id"];
    $name = $_POST["name"];
    $class = $_POST["class"];
    $pass = $_POST["pass"];
    $sid = $_POST["sid"];
    if ($id==NULL) {
        header("Location: students.php");
        exit;
    }
    if($class==1){
        $class="進四機一甲";
    }
    else if($class==2){
        $class="進四機二甲";
    }
    else if($class==3){
        $class="進四機三甲";
    }
    else{
        $class="進四機四甲";
    }
    require "includes/dbconfig.php";

    $sql = "UPDATE students SET sname='$name', class='$class', password='$pass', sid='$sid' WHERE id='$id' LIMIT 1";
    $result = $conn->query($sql);
    $conn->close();
    header("Location: students2.php");
    exit;
?>