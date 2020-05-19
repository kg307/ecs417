

<?php
require 'dbh.inc.php';
session_start();

if(isSet($_SESSION["loggedin"])){


    //$con = new mysqli("10.129.17.32", "user", "password", "ecs417");

    $title = $_POST["title"];
    $content = $_POST["content"];

    $sql = "INSERT INTO posts (title, content) VALUES ('$title', '$content')";


    //if connection successful, do $sql
    if ($con->query($sql) === TRUE) {
        echo "New post added!";
        header("location: viewBlog.php");
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }

    $con->close();
}
else{
  header("Location: index.php");
  echo "You must be signed in to add a post.";
}

?>
