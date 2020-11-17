<?php
    $message = $_POST["message"];
    require "includes/dbconfig.php";

    $sql = "INSERT INTO news (message) values ('$message')";
    $result = $conn->query($sql);
    $conn->close();
    header("Location: reuters.php");
    exit;
    ?>