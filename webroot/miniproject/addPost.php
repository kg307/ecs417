

<?php
session_start();

if(isSet($_SESSION["loggedin"])){

    $server = getenv("MYSQL_SERVICE_HOST");
    $con = new mysqli($server, "user", "password", "ecs417");

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
