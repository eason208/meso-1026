<?php
    $id = $_GET["id"];
    if ($id==NULL) {
        header("Location: students2.php");
        exit;
    }
    require "includes/dbconfig.php";

    $sql = "DELETE FROM students WHERE id='$id' LIMIT 1";
    $result = $conn->query($sql);
    $conn->close();
    header("Location: students2.php");
    exit;
?>