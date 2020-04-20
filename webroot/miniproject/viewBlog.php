<?php
session_start();
?>

<!DOCTYPE html>
<html>
      <head lang="en">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


        <title>Blog</title>
        <link rel="stylesheet" href="./css/bootstrap.min.css" type="text/css">


        <link rel="stylesheet" href="./css/reset.css" type="text/css">
        <link rel="stylesheet" href="./css/viewBlog.css" type="text/css">


      </head>

      <header class="mainColour sticky">
        <h2 id="mainHeader">Kinga Garbowska</h2>
        <h2 id="blogHeader"> - Blog</h2>
        <nav>
          <ul>
            <li><a href="index.php">Home</a></li>
            <?php
              if (isset($_SESSION['email'])){
            ?>
            <li id="logout"><a href="logout.php">Logout</a></li>
            <?php
            }
            ?>


          </ul>
        </nav>
      </header>

      <body>
        <article id="mainContainer">

          <?php
            error_reporting(0);
            $con = new mysqli("localhost", "user", "password", "ecs417");

            require_once("nbbc.php");
            $bbcode = new BBCode;

            $s = " SELECT * FROM posts ORDER BY id DESC"; //select all rows in descending order of their id
            $result = mysqli_query($con, $s) or die(mysqli_error());
            $num = mysqli_num_rows($result); //count number of rows (number of posts)


            $post = "";

            if($num > 0){
              while($row = mysqli_fetch_assoc($result)) {
                $id = $row['id'];
                $title = $row['title'];
                $content = $row['content'];
                $date = $row['date'];

                $post .= "<div>
                <h2>$title</h2>
                <h3>$date</h3>
                <p>$content</p>
                </div>";
              }
              echo $post;
            }
            else {
              echo "No posts ";
            }

          ?>


          <a href="addPost.html"> <button class="btn">Add Post</button></a>



        </article>
      </body>

      <footer class="mainColour">
        email
        phone
        linkedin
      </footer>

</html>
