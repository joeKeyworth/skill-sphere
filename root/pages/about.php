<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../css/style.css"> <!-- Main style sheet -->

    <!-- Poppins Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <title> Earn as you learn with Skill Sphere </title>
</head>
<body>

    <a href="#main" class="skip-link" id="skip-link" tabindex="1"> Skip to main content </a>

    <header id = "desktop-header"> <!-- Header for sizes over : 950px-->

        <div>

            <a href = "../index.php"><h1> Skill Sphere </h1></a>

            <!-- Button underneath link is not in tab order, so keyboard users aren't focusing same element twice -->
            <a href = "browse.php"> <button class = "secondary-button" tabindex="-1"> Browse Categories </button> </a> 

            <input type = "text" class = "search-bar" placeholder="Search for courses...">

        </div>

        <div> 

            <?php
                if(isset($_COOKIE['id'])){
                    echo ('<a href = "../pages/editcourse.php"><button class = "secondary-button" tabindex="-1"> Create Course </button></a>');
                    echo ('<a href = "../pages/profile.php"><button class = "primary-button" tabindex="-1"> Profile </button></a>');
                }else{
                    echo ('<a href = "../pages/login.php"><button class = "secondary-button" tabindex="-1"> Log in </button></a>');
                    echo ('<a href = "../pages/register.php"><button class = "primary-button" tabindex="-1"> Register </button></a>');
                }
            ?>

        </div>

    </header>

    <header id = "mobile-header"> <!-- Header for sizes under : 950px-->

        <a href = "../index.php"><h1> Skill Sphere </h1> </a>

        <button class = "invisible-button" onclick = "showSideNav()">
            <i class="fa-solid fa-bars"></i>
        </button>
    
    </header>

    <div class = "side-nav" id = "mobile-nav">

        <button class="invisible-button" onclick = "hideSideNav()">

            <i class = "fa-solid fa-xmark"></i>

        </button>

        <div class = "side-nav-content">

            <div>

                <input type = "text" placeholder="Search for courses...">
            
                <nav>

                    <ul>

                        <li> <a href = "browse.php"> Browse Categories </a> </li>

                    </ul>

                </nav>

            </div>

            <nav>

                <ul>

                <li> 
                    <?php 
                   
                   if(isset($_COOKIE['id'])){
                       echo ('<a href = "../pages/editcourse.php"> Create Course </a>');
                   }else{
                       echo ('<a href = "../pages/login.php"> Log In </a>');
                   }
                   
                   ?> 
                   </li>
                    <li> 
                    <?php 
                   
                   if(isset($_COOKIE['id'])){
                       echo ('<a href = "../pages/profile.php"> View Profile </a>');
                   }else{
                       echo ('<a href = "../pages/register.php"> Register </a>');
                   }
                   
                   ?>                        
                    </li>

                </ul>

            </nav>

        </div>
    
    </div>

    <div class = "dark-overlay" id = "overlay"></div>


    <main id = "main"  class = "centre-self centre-content">

        <section id = "product">
            <h2> What is Skill Sphere? </h2>

                <p class = "limit-chars"> Skill Sphere is a platform to help you be the best you can be. The busy-ness of everyday life can often get in the way of our hobbies and passions -
                but with Skill Sphere you can earn money while learning new, valuable skills, helping ease the stress of "wasting time" while learning something new.

                <br>

                For just £5/month you can enrol on unlimited courses packed to the brim with informational videos and quizzes to test your understanding </p>
        
        </section>

        <section id="team">

            <h2> Who is Skill Sphere? </h2>

            <p class = "limit-chars"> This platform was developed as a second year university project, at the University of Huddersfield, by the following students: </p> <br>

            <div class = "team-carousel"> 

                <div>

                    <p><strong> Mohammed Rahman </strong></p>
                    <p><i> Team Leader, Head of Design </i></p>

                </div>

                <div>

                    <p><strong> Millie Moorby-Davies </strong></p>
                    <p><i> Front-end Developer </i></p>

                </div>

                <div>

                    <p><strong> Muhammed Shakir </strong></p>
                    <p><i> Front-end Developer</i></p>

                </div>

                <div>

                    <p><strong> Joseph Keyworth </strong></p>
                    <p><i> Back-end Developer </i></p>

                </div>

                <div>

                    <p><strong> Usmaan Nadeem </strong></p>
                    <p><i> Back-end Developer, Testing </i></p>

                </div>


            </div>

        </section>

    </main>

    <footer>

        <a href = "index.php"><h3> Skill Sphere </h3></a>

        <nav>

            <ul>

                <li><a href = "about.php"> <p> About </p> </a> </li>
                <li><a href = "contact"> <p> Contact Us </p> </a> </li>
                <li><a> Copyright </a> </li>
                <li><a> Privacy Policy </a> </li>
                <li><a> Sitemap </a> </li>

            </ul>

        </nav>

    </footer>

    <!-- Required for the star icons -->
    <script src = "https://kit.fontawesome.com/d90c26d2f3.js" crossorigin="anonymous"></script>
    <!-- Reveals side nav on mobile -->
    <script src = "../js/mobileHeader.js"></script>
    
</body>
</html>