<?php
    session_start();
    $passchk=$_POST["password"];
    $userid=$_POST["username"];    
    $redir = $_POST["redir"]; 
    
    require "includes/dbconfig.php";
 // 以下建立SQL查詢指令
 // $sql = "SELECT * FROM news order by id desc";
 //使用 insert into  
    if($userid==NULL || $passchk==NULL  ){
        header("Location: login.php");
    }
    else{
        $sql = "SELECT * FROM students WHERE sid='$userid'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        $name = $row["sname"];
        $passok = $row["password"];
        $id = $row["sid"];
        $bid=$row["mid"];
        if ($passok==$passchk && $redir!=NULL ){
            $_SESSION["user_type"]=1;  
            $_SESSION["mid"]=$bid; 

            header("Location: $redir");        
        } elseif($passok==$passchk && $redir==NULL){
            $_SESSION["user_type"]=1;  
            $_SESSION["mid"]=$bid; 
            header("Location: homepage.php");
        }
        else{
            header("Location: login.php");
        }
         
    }
    $conn->close();
?>