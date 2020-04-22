<?php
session_start();
?>

<html>
      <head lang="en">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


        <title>My Homepage - Kinga Garbowska</title>
        <link rel="stylesheet" href="./css/bootstrap.min.css" type="text/css">


        <link rel="stylesheet" href="./css/reset.css" type="text/css">
        <link rel="stylesheet" href="./css/index.css" type="text/css">
      </head>

      <body>

        <header class="mainColour">
          <h2>Kinga Garbowska</h2>
        </header>

        <nav id="headNav">
          <div>
            <a href="CV.docx" download="Kinga Garbowska">
              <img src="https://denisnowak.com/temp/kinga/icons/CV_icon.png">
            </a>
            <br>
            CV
          </div>
          <div>
            <a href="viewBlog.php">
              <img src="https://denisnowak.com/temp/kinga/icons/blog_icon.png">
            </a>
            <br>
            Blog
          </div>
          <div>
            <a href="#mainText">
              <img src="https://denisnowak.com/temp/kinga/icons/about_icon.png">
            </a>
            <br>
            About
          </div>
        </nav>

        <div id="mainContainer" class="container">
          <div class="row">
            <div class="col-sm-8">
              <article id="mainText" class="secondaryColour overflow-auto">
                <section>
                  <h3 class="cursorChange" data-toggle="collapse" data-target="#collapseAbout" aria-expanded="true" aria-controls="card-block">About me</h3>
                  <p id="collapseAbout" class="collapse">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vel porta nibh. Quisque iaculis dui sit amet lorem porttitor ullamcorper. Suspendisse et tellus nulla. Vestibulum vehicula auctor aliquet. Nunc tincidunt massa nunc, a pulvinar nibh imperdiet eu. Vivamus risus ipsum, luctus a vestibulum a, convallis sed lectus. Praesent eu orci mollis, mattis justo sit amet, elementum metus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut at tristique velit.
                  </p>
                </section>

                <section>
                  <h3 class="cursorChange" data-toggle="collapse" data-target="#collapseSkills" aria-expanded="true" aria-controls="card-block">Skills</h3>
                  <p id="collapseSkills" class="collapse">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vel porta nibh. Quisque iaculis dui sit amet lorem porttitor ullamcorper. Suspendisse et tellus nulla. Vestibulum vehicula auctor aliquet. Nunc tincidunt massa nunc, a pulvinar nibh imperdiet eu. Vivamus risus ipsum, luctus a vestibulum a, convallis sed lectus. Praesent eu orci mollis, mattis justo sit amet, elementum metus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut at tristique velit.
                  </p>
                </section>

                <section>
                  <h3 class="cursorChange" data-toggle="collapse" data-target="#collapseAchievements" aria-expanded="true" aria-controls="card-block">Achievements</h3>
                  <p id="collapseAchievements" class="collapse">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vel porta nibh. Quisque iaculis dui sit amet lorem porttitor ullamcorper. Suspendisse et tellus nulla. Vestibulum vehicula auctor aliquet. Nunc tincidunt massa nunc, a pulvinar nibh imperdiet eu. Vivamus risus ipsum, luctus a vestibulum a, convallis sed lectus. Praesent eu orci mollis, mattis justo sit amet, elementum metus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut at tristique velit.
                  </p>
                </section>

                <section>
                  <h3 class="cursorChange" data-toggle="collapse" data-target="#collapseEducation" aria-expanded="true" aria-controls="card-block">Education</h3>
                  <p id="collapseEducation" class="collapse">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vel porta nibh. Quisque iaculis dui sit amet lorem porttitor ullamcorper. Suspendisse et tellus nulla. Vestibulum vehicula auctor aliquet. Nunc tincidunt massa nunc, a pulvinar nibh imperdiet eu. Vivamus risus ipsum, luctus a vestibulum a, convallis sed lectus. Praesent eu orci mollis, mattis justo sit amet, elementum metus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut at tristique velit.
                  </p>
                </section>

                <section>
                  <h3 class="cursorChange" data-toggle="collapse" data-target="#collapseExperience" aria-expanded="true" aria-controls="card-block">Experience</h3>
                  <p id="collapseExperience" class="collapse">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vel porta nibh. Quisque iaculis dui sit amet lorem porttitor ullamcorper. Suspendisse et tellus nulla. Vestibulum vehicula auctor aliquet. Nunc tincidunt massa nunc, a pulvinar nibh imperdiet eu. Vivamus risus ipsum, luctus a vestibulum a, convallis sed lectus. Praesent eu orci mollis, mattis justo sit amet, elementum metus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut at tristique velit.
                  </p>
                </section>

                <section>
                  <h3 class="cursorChange" data-toggle="collapse" data-target="#collapseLinks" aria-expanded="true" aria-controls="card-block">Links</h3>
                  <p id="collapseLinks" class="collapse">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vel porta nibh. Quisque iaculis dui sit amet lorem porttitor ullamcorper. Suspendisse et tellus nulla. Vestibulum vehicula auctor aliquet. Nunc tincidunt massa nunc, a pulvinar nibh imperdiet eu. Vivamus risus ipsum, luctus a vestibulum a, convallis sed lectus. Praesent eu orci mollis, mattis justo sit amet, elementum metus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut at tristique velit.
                  </p>
                </section>

              </article>
            </div>


            <div id = "login" class="col-sm-3">
              <?php
                if (!isset($_SESSION["loggedin"]) || empty($_SESSION['email'])){  ?>


              <form method="POST" action="login.php">
                <div id="loginHeader">
                  <h3>LOGIN</h3>
                </div>

                <br>

                <fieldset>
                  <div>
                    <label>Email address:</label>
                    <br>
                    <input type="email" name="email" class="form-control" required/>
                  </div>

                  <br>

                  <div>
                    <label>Password:</label>
                    <br>
                    <input type="password" id="pass" class="form-control" required name="password" minlength="5" required>
                  </div>

                  <div>
                    <button type="submit" class="btn">Log in</button>
                  </div>

                </fieldset>
              </form>

            <?php }
            else {  ?>

              <a href="logout.php"> <button id="logoutbtn" class="btn">Log out</button></a>

              <?php
              }
              ?>

            </div>

          </div>
        </div>

        <footer class="mainColour">
          email
          phone
          linkedin
        </footer>





            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

      </body>

</html>
