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

    <title> Skill Sphere - Log In </title>
    <link href = "../img/logo-small-light.svg" rel = "icon" media = "prefers-color-scheme: light">
    <link href = "../img/logo-small-dark.svg" rel = "icon" media = "prefers-color-scheme: dark">
    <link href = "../img/logo-small-light.svg" rel = "icon" media = "prefers-color-scheme: light">
    <link href = "../img/logo-small-dark.svg" rel = "icon" media = "prefers-color-scheme: dark">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="../js/cookieControl.js"></script>
    <script type="text/javascript" src="../js/Encryption.js"></script>
</head>
<body>

    <a href="#main" class="skip-link" id="skip-link" tabindex="0"> Skip to main content </a>

    <header id = "desktop-header"> <!-- Header for sizes over : 950px-->

        <div>

            <a href = "../index.php"><h1> Skill Sphere </h1></a>

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

    <main id = "main">

        <section id="login">

            <form class = "flex-col card centre-content centre-self">

                <h1> Log In</h1>

                <label for = "username"> <p> Username: </p> </label>
                <input type = text name = "username"  class = "text-input" id = "username" placeholder="Username">

                <label for = "pass"> <p> Password: </p> </label>
                <input type="password" name="pass" class = "text-input" id = "pass" placeholder = "Password">

                <p id = "warning" class = "warning"></p>

                <button type = "button" onclick = "loginChecks()" class = "primary-button"> Log In </button>
                <!-- loginChecks() is located injs/ clientSideAccountValidation.js -->

                <p> Forgot your password? <a href = "forgot-password.php">Reset here</a></p>

            </form>

        </section>

    </main>

    <footer>

        <h3> Skill Sphere </h3>

        <nav>

            <ul>

                <li><a href = "about.php"> <p> About </p> </a> </li>
                <li><a href = "contact"> <p> Contact Us </p> </a> </li>
                <a><li> Copyright </li></a>
                <a><li> Privacy Policy </li></a>
                <a><li> Sitemap </li></a>

            </ul>

        </nav>

    </footer>
    
    <!-- Basic Client Side Validation -->
    <script src = "../js/clientSideAccountValidation.js"></script>
    <script src = "https://kit.fontawesome.com/d90c26d2f3.js" crossorigin="anonymous"></script>
    <!-- Reveals side nav on mobile -->
    <script src = "../js/mobileHeader.js"></script>

</body>
</html>