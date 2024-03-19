<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/style.css"> <!-- Main style sheet -->

    <!-- Poppins Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <title> Earn as you learn with Skill Sphere </title>
    <link href = "img/logo-small-dark.svg" rel = "icon" media = "prefers-color-scheme: light">
    <link href = "img/logo-small-light.svg" rel = "icon" media = "prefers-color-scheme: dark">
    <script type="text/javascript" src="../js/Encryption.js"></script>
</head>
<body>

    <a href="#main" class="skip-link" id="skip-link" tabindex="0"> Skip to main content </a>

    <header id = "desktop-header"> <!-- Header for sizes over : 950px-->

        <div>

            <a href = "index.php"><h1> Skill Sphere </h1></a>

            <!-- Button underneath link is not in tab order, so keyboard users aren't focusing same element twice -->
            <a href = "#"> <button class = "secondary-button" tabindex="-1"> Browse Categories </button> </a> 

            <input type = "text" class = "search-bar" placeholder="Search for courses...">

        </div>

        <div> 
            <?php 
                   
                    if(isset($_COOKIE['Username'])){
                        echo ('<a href = "pages/course.html"><button class = "secondary-button" tabindex="-1"> Create Course </button></a>');
                        echo ('<a href = "pages/profile.html"><button class = "primary-button" tabindex="-1"> Profile </button></a>');
                    }else{
                        echo ('<a href = "pages/login.html"><button class = "secondary-button" tabindex="-1"> Log in </button></a>');
                        echo ('<a href = "pages/register.html"><button class = "primary-button" tabindex="-1"> Register </button></a>');
                    }
                    
            ?>

        </div>

    </header>

    <header id = "mobile-header"> <!-- Header for sizes under : 950px-->

        <a href = "index.php"><h1> Skill Sphere </h1> </a>

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

                        <li> <a href = "#"> Browse Categories </a> </li>

                    </ul>

                </nav>

            </div>

            <nav>

                <ul>

                    <li> 
                    <?php 
                   
                   if(isset($_COOKIE['Username'])){
                       echo ('<a href = "pages/course.html"> Create Course </a>');
                   }else{
                       echo ('<a href = "pages/login.html"> Log In </a>');
                   }
                   
                   ?> 
                   </li>
                    <li> 
                    <?php 
                   
                   if(isset($_COOKIE['Username'])){
                       echo ('<a href = "pages/profile.html"> View Profile </a>');
                   }else{
                       echo ('<a href = "pages/register.html"> Register </a>');
                   }
                   
                   ?>                        
                    </li>

                </ul>

            </nav>

        </div>
    
    </div>

    <div class = "dark-overlay" id = "overlay"></div>

    <main id = "main">

        <section class = "hero-image" id = "sign-up-banner">
            <img src="img/desert.png" alt="">
            <!-- desert-dark.png from pexels.com, by Walid Ahmad -->
            <!-- desert-light.png from pexels.com, by  Pixabay -->

            <div class = "image-text-position-wrapper">

                <div class = "image-text-box card centre-content flex-col">
        
                    <h2> Earn money while you learn new skills </h2>
        
                    <?php 
                   
                    if(isset($_COOKIE['Username'])){
                        echo ('<a href = "pages/profile.html"><button class = "primary-button" tabindex="-1"> Profile </button></a>');
                    }else{
                        echo ('<a href = "pages/register.html"><button class = "primary-button" tabindex="-1"> Register </button></a>');
                    }
                    
                    ?>
 
                    <small> 
                    <?php 
                   
                   if(isset($_COOKIE['Username'])){
                       echo ('<a href = "pages/course.html"> Create Course </a>');
                   }else{
                       echo ('<a href = "pages/login.html"> Log In </a>');
                   }
                   
                   ?>
                        
                    
                   </small>
        
                </div>

            </div>
    
        </section>

        <section id="recommended-courses" class = "centre-content">

            <h2> Recommended For You </h2>

            <div  class = "grid" data-direction = "horizontal">

                <div class="course card stacked" hover = "true" id = "course-id">

                    <img src= "img/courses/course-name.jpg">

                    <div id = "course-info" class = "card-info">

                        <h3 id = "course-name"> Course Name </h3>
                        <div id = "course-rating">

                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i> <!-- fa-solid for full stars -->
                            <i class="fa-regular fa-star"></i> 
                            <i class="fa-regular fa-star"></i> <!-- fa-regular for empty stars -->

                        </div>
                    </div>

                </div>

                <div class="course card stacked" hover = "true" id = "course-id">

                    <img src= "img/courses/course-name.jpg">

                    <div id = "course-info" class = "card-info">

                        <h3 id = "course-name"> Course Name </h3>
                        <div id = "course-rating">

                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>

                        </div>
                    </div>

                </div>

                <div class="course card stacked" hover = "true" id = "course-id">

                    <img src= "img/courses/course-name.jpg">

                    <div id = "course-info" class = "card-info">

                        <h3 id = "course-name"> Course Name </h3>
                        <div id = "course-rating">

                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>

                        </div>
                    </div>

                </div>

                <div class="course card stacked" hover = "true" id = "course-id">

                    <img src= "img/courses/course-name.jpg">

                    <div id = "course-info" class = "card-info">

                        <h3 id = "course-name"> Course Name </h3>
                        <div id = "course-rating">
                            
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>

                        </div>
                    </div>

                </div>

            </div>

            <a href = "#"> Browse All Courses </a>

        </section>

        <!-- Hidden if user is not logged in -->
        <section id="your-courses" class = "centre-content">

            <h2> Your Courses </h2>

            <div  class = "grid" data-direction = "horizontal">

                <div class="course card stacked" hover = "true" id = "course-id">

                    <img src= "img/courses/course-name.jpg">

                    <div id = "course-info" class = "card-info">

                        <h3 id = "course-name"> Course Name </h3>
                        <div id = "course-rating">
                                                    
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            
                        </div>
                    </div>

                </div>

                <div class="course card stacked" hover = "true" id = "course-id">

                    <img src= "img/courses/course-name.jpg">

                    <div id = "course-info" class = "card-info">

                        <h3 id = "course-name"> Course Name </h3>
                        <div id = "course-rating">
                                                    
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            
                        </div>
                    </div>

                </div>

                <div class="course card stacked" hover = "true" id = "course-id">

                    <img src= "img/courses/course-name.jpg">

                    <div id = "course-info" class = "card-info">

                        <h3 id = "course-name"> Course Name </h3>
                        <div id = "course-rating">
                                                    
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            
                        </div>
                    </div>

                </div>

                <div class="course card stacked" hover = "true" id = "course-id">

                    <img src= "img/courses/course-name.jpg">

                    <div id = "course-info" class = "card-info">

                        <h3 id = "course-name"> Course Name </h3>
                        <div id = "course-rating">
                
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            
                        </div>
                    </div>

                </div>

            </div>

            <a href = "#"> View Profile</a>
            <!-- Takes user to their own profile - link to be added using php -->


        </section>

        <section id="link-directory" class = "link-directory">

            <h3> Not sure where to start? </h3>

            <div class = "grid" data-direction = "horizontal">

            <nav>

                <h4> Tech Courses </h4>

                <ul>

                    <li> <a href = "#"> <p> Python </p> </a> </li>
                    <li> <a href = "#"> <p>  Java </p> </a> </li>
                    <li> <a href = "#"> <p> C# </p> </a> </li>

                </ul>

            </nav>

            <nav>

                <h4> Business Courses </h4>

                <ul>

                    <li> <a href = "#"> <p> Finance </p> </a> </li>
                    <li> <a href = "#"> <p>  Management </p> </a> </li>

                </ul>

            </nav>

            <nav>

                <h4> Creative Courses </h4>

                <ul>

                    <li> <a href = "#"> <p>  Watercolour Painting </p> </a> </li>
                    <li> <a href = "#"> <p>  Still life Drawing </p> </a> </li>
                    <li> <a href = "#"> <p>  Oil Painting </p> </a> </li>
                    <li> <a href = "#"> <p>  Art History </p> </a> </li>
                    <li> <a href = "#"> <p>  Creative Writing </p> </a> </li>

                </ul>

            </nav>

            <nav>

                <h4> Skill Paths </h4>

                <ul>

                    <li> <a href = "#"> <p>  Graphic Artist </p> </a> </li>
                    <li> <a href = "#"> <p>  Front-End Developer </p> </a> </li>
                    <li> <a href = "#"> <p>  Games Programming </p> </a> </li>

                </ul>

            </nav>

        </div>


        </section>

    </main>

    <footer>

        <a href = "index.php"><h3> Skill Sphere </h3></a>

        <nav>

            <ul>

                <li><a href = "pages/about.html"> <p> About </p> </a> </li>
                <li><a href = "pages/contact"> <p> Contact Us </p> </a> </li>
                <li><a> Copyright </a> </li>
                <li><a> Privacy Policy </a> </li>
                <li><a> Sitemap </a> </li>

            </ul>

        </nav>

    </footer>

    <script src = "https://kit.fontawesome.com/d90c26d2f3.js" crossorigin="anonymous"></script>
    <!-- Reveals side nav on mobile -->
    <script src = "js/mobileHeader.js"></script>
    
</body>
</html>