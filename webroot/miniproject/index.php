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
                    My name is Kinga Garbowska and I am a student at <em>Queen Mary, University of London.</em> Currently, I am in my first year of the computer science undergraduate course.
                    This is my first portfolio website, where you can find out a bit more about me and my interests.

                  </p>
                </section>

                <section>
                  <h3 class="cursorChange" data-toggle="collapse" data-target="#collapseSkills" aria-expanded="true" aria-controls="card-block">Skills</h3>
                  <p id="collapseSkills" class="collapse">
                    From my degree so far, I have acquired numerous technical skills. These include programming in java in procedural and object-oriented styles, creating a webpage using HTML, css, bootstrap, php and javascript, logical thinking and professional research.
                    Alongside these technical skills, I also gained soft skills as a byproduct of participating in my modules. For example: Leadership, organizing planning and teamwork. I make sure to put myself out of my comfort zone with sports such as Taekwondo, which help me gain confidence and discipline. This encourages me to persevere and work hard, and significantly boosts my teamwork and leadership abilities.
                    I am also bilingual; I am fluent in Polish and English.
                    I will write more about these experiences and skills in my blog, which I encourage you to check out <a id="skillsLink" href="viewBlog.php">here</a>.
                  </p>
                </section>

                <section>
                  <h3 class="cursorChange" data-toggle="collapse" data-target="#collapseAchievements, #collapseAchievements2" aria-expanded="true" aria-controls="card-block">Achievements</h3>
                  <p id="collapseAchievements" class="collapse">
                    Here are some of my favorite achievements:
                    <ul id="collapseAchievements2" class="collapse">
                      <li>Achieving AAB in Maths, Biology and Physics A-levels respectively</li>
                      <li>Being selected for a week of work experience at Canary Wharf Barclays</li>
                      <li>Competing in national ITF Taekwondo Tournaments</li>
                      <li>Earning the Haberdashers' Jeston Scholarship 2019</li>
                    </ul>
                  </p>
                </section>

                <section>
                  <h3 class="cursorChange" data-toggle="collapse" data-target="#collapseEducation, #collapseEducation2" aria-expanded="true" aria-controls="card-block">Education</h3>
                  <p id="collapseEducation" class="collapse">
                    My education so far:
                    <ol id="collapseEducation2" class="collapse">
                      <li><b>2017-2019</b> A Levels - Haberdashers' Aske's Hatcham College</li>
                      <li><b>2019-2023</b> UnderGraduate - Queen Mary University of London (Currently in progress)</li>
                    </ol>
                  </p>
                </section>

                <section>
                  <h3 class="cursorChange" data-toggle="collapse" data-target="#collapseExperience" aria-expanded="true" aria-controls="card-block">Experience</h3>
                  <p id="collapseExperience" class="collapse">
                    I try to look out for opportunities to volunteer and gain work experience. Not only is this for career insight, but also to build my qualities as a person.
                    My work experience includes a week at Barclays Canary Wharf and a week at Childeric Primary School.
                    I have volunteered at SMASHFestUK (a local science festival) as an event planner and host, Vietschool as an english and maths teacher, and at Forest Hill Polish school as a Polish teacher.
                    Currently, I am an employee at Chozen Noodle, Excel. I am in a customer service role, where I am able to further improve my public communication skills as well as observe how the business is run logistically.
                    These experiences have helped me build communication and explanation skills, as well as insight on logistics, which was applied in my volunteering at SMASHfestUK.
                  </p>
                </section>

                <section>
                  <h3 class="cursorChange" data-toggle="collapse" data-target="#collapseLinks" aria-expanded="true" aria-controls="card-block">Links</h3>
                  <p id="collapseLinks" class="collapse">
                    <a href="https://www.qmul.ac.uk/">Queen Mary, University of London</a>
                    <a href="www.linkedin.com/in/kinga-garbowska-37a950197">my LinkedIn profile</a>
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
          <a class="footerlink" href="#top">Home</a>
          <a class="footerlink" href="https://www.qmul.ac.uk/">QMUL</a>

          <p><i>Copyright &copy; 2020 Kinga Garbowska</p>
        </footer>





            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

      </body>

</html>
