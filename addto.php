<?php
    

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "criczat";
    $conn = new mysqli($servername, $username, $password, $dbname);
    session_start();

    $title = $_POST['title'];
    $news = $_POST['news_body'];
    $image = $_FILES['image']['name'];
    $temp = $_FILES['image']['tmp_name'];
    $folder = "image/".$image;
    
    

    $s = "insert into news (title, text, image) values ('$title', '$news', '$image')";
    
    move_uploaded_file($temp, $folder);
    $result = $conn->query($s);
    header('location: editorial.php');

    
    
    

    

?>