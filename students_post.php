<?php
$sid = $_POST["sid"];
$sname = $_POST["sname"];
$class = $_POST["class"];
$pass = $_POST["pass"];
$job = $_POST["job"];

if ($job!=7){
    $mid=1;
}
else{
    $mid=2;
}


if($job==1){
    $job="會長";
}
else if($job==2){
    $job="副會長";
}
else if($job==3){
    $job="財務長";
}
else if($job==4){
    $job="公關長";
}
else if($job==5){
    $job="文書長";
}
else if($job==6){
    $job="活動長";
    
}
else {
    $job="會員";
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

    $sql = "INSERT INTO students (sid,mid,sname,password,class,job) values ('$sid','$mid','$sname','$pass','$class','$job')";
    $result = $conn->query($sql);
    $conn->close();
    if($mid==1){
    header("Location:students.php");
    }
    else{
    header("Location:students2.php");  
    }
    exit;
?>