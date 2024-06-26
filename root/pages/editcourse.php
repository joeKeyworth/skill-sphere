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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>

    <a href="#main" class="skip-link" id="skip-link" tabindex="0"> Skip to main content </a>

    <header id = "desktop-header"> <!-- Header for sizes over : 950px-->

        <div>

            <a href = "../index.php"><h1> Skill Sphere </h1></a>

            <a href = "#"> <button class = "secondary-button" tabindex="-1"> Browse Categories </button> </a>

            <input type = "text" class = "search-bar" placeholder="Search for courses...">

        </div>

        <div> 

            <?php
                if (isset($_COOKIE['id'])) {
                    echo '<a href = "../pages/editcourse.php"><button class = "secondary-button" tabindex="-1"> Create Course </button></a>';
                    echo '<a href = "../pages/profile.php"><button class = "primary-button" tabindex="-1"> Profile </button></a>';
                } else {
                    echo '<a href = "../pages/login.php"><button class = "secondary-button" tabindex="-1"> Log in </button></a>';
                    echo '<a href = "../pages/register.php"><button class = "primary-button" tabindex="-1"> Register </button></a>';
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

                        <li> <a href = "#"> Browse Categories </a> </li>

                    </ul>

                </nav>

            </div>

            <nav>

                <ul>

                <li> 
                    <?php

                   if (isset($_COOKIE['id'])) {
                       echo '<a href = "../pages/editcourse.php"> Create Course </a>';
                   } else {
                       echo '<a href = "../pages/login.php"> Log In </a>';
                   }

                   ?> 
                   </li>
                    <li> 
                    <?php

                   if (isset($_COOKIE['id'])) {
                       echo '<a href = "../pages/profile.php"> View Profile </a>';
                   } else {
                       echo '<a href = "../pages/register.php"> Register </a>';
                   }

                   ?>                        
                    </li>

                </ul>

            </nav>

        </div>
    
    </div>

    <div class = "dark-overlay" id = "overlay"></div>

    <main id = "main" style = "padding: 2rem;">

    
        <form id = "create-course"  class = "course-creator">

            <section id="course-details">

                <input type="text" name="course-name" id="course-name" placeholder="Course Name">

                <input type="text" name="course-desc" id="course-desc" placeholder = "Describe your course here...">

                <!-- TAGS -->

            </section>


            <div class="new-module" id = "module-0">

                <!-- MODULE NAME -->

                <input type = "text" id = "module-0-name" placeholder="Module Name">

                <!-- MODULE TYPE SELECTOR (radio buttons) -->

                <div id = "type">

                    <label for = "module-type"> Text </label>
                    <input type="radio" name="module-type-0" value = "text" onclick = "setType('text', 0)" checked = "true" class = "type-radio">
                    <label for = "module-type"> Video </label>
                    <input type = "radio" name = "module-type-0" value = "video" onclick = "setType('video', 0)" class = "type-radio">
                    <label for = "module-type"> Quiz </label>
                    <input type="radio" name="module-type-0" value="quiz" onclick = "setType('quiz', 0)" class = "type-radio">

                </div>

                <textarea class = "content" id="module-0-content" placeholder="Course content..."></textarea>
                
                <button class = "secondary-button" onclick = "deleteModule(0)" type = "button"> Remove </button>

                </div>

            <button id = "new-module-button" class="primary-button" onclick="addNewModule()" type = "button"> New Module </button>
            <button class="button" onclick = "submitModule()" type = "button"> Save Course </button>
        </form>

    

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

    <script>

         let moduleCount = 0;
         let form = document.getElementById("create-course");
         let modtype = ["text","text","text","text","text"];

         function submitModule(){
            let modnames = [];
            let modconts = [];
            let date = new Date().toLocaleDateString();
            let courseName = document.getElementById("course-name").value;
            let courseDesc = document.getElementById("course-desc").value;
                for(let i = 0; i < 5; i++){
                            console.log("attempt");
                            try{                                
                            modnames.push(document.getElementById("module-"+i+"-name").value);
                            modconts.push(document.getElementById("module-"+i+"-content").value);                            
                            console.log("success");
                        }catch(error){
                            console.log("fail");
                            break;
                        }
                    }  
                $.ajax({
                    method: "POST",
                    url: "../php/courseControl.php",
                    data:{
                        'nameList' : modnames,
                        'contList' : modconts,
                        'modTypes' : modtype,
                        'date' : date,
                        'courseName' : courseName,
                        'courseDesc' :courseDesc   

                    },
                    success : function( response ) {
                        console.log(response);
                    }
                });
                }
    </script>
    <script> 
            






        function setType(type, moduleNo)
        {

            // Get element before with id "module-content"
            // Remove
            // Add new element of correct type with id "module-content"

            let module = document.getElementById("module-" + moduleNo);
            
            let oldContent = document.getElementById("module-"+moduleNo+"-content");
            oldContent.remove();

            let deleteButton = document.getElementById("delete-module-"+moduleNo);
            deleteButton.remove();

            let newContent;

            switch(type)
            {

                case 'text':

                    newContent = document.createElement("textarea");
                    newContent.setAttribute("placeholder", "Course content...");
                    break;

                case 'video':

                    newContent = document.createElement("input");
                    newContent.setAttribute("type", "file");
                    newContent.setAttribute("accept", "video/*");
                    break;

                case 'quiz':

                    newContent = document.createElement("button");
                    newContent.classList.add("secondary-button");

                    newContent.innerHTML = "QUIZ?";

                    break;

            }

            newContent.id = "module-"+moduleNo+"-content";

            module.append(newContent);

            deleteButton = document.createElement("button");
            deleteButton.id = "delete-module-"+moduleNo;
            deleteButton.classList.add("secondary-button");
            deleteButton.innerHTML = "Remove module";
            deleteButton.setAttribute("onclick", "deleteModule("+moduleNo+")");
            deleteButton.setAttribute("type", "button");

            module.append(deleteButton);

            return false;

        }

        function addNewModule()
        {

            moduleCount++;

            let m = document.createElement("div");
            m.classList.add("new-module");
            m.id = "module-"+moduleCount;

            let name = document.createElement("input");
            name.setAttribute("id", "module-" + moduleCount + "-name");
            name.setAttribute("type", "text");
            name.setAttribute("placeholder", "Module Name");

            let type = document.createElement("div");

            let t = document.createElement("input");
            t.setAttribute("type", "radio");
            t.setAttribute("name", "module-type-"+moduleCount);
            t.setAttribute("value", "text");
            t.setAttribute("onclick", "setType('text', "+moduleCount+")");
            t.setAttribute("checked", "true");

            let tLabel = document.createElement("label");
            tLabel.setAttribute("for", "module-type-"+moduleCount);
            tLabel.innerHTML = "Text";

            let v = document.createElement("input");
            v.setAttribute("type", "radio");
            v.setAttribute("name", "module-type-"+moduleCount);
            v.setAttribute("value", "video");
            v.setAttribute("onclick", "setType('video', "+moduleCount+")");

            let vLabel = document.createElement("label");
            vLabel.setAttribute("for", "module-type-"+moduleCount);
            vLabel.innerHTML = "Video";

            let q = document.createElement("input");
            q.setAttribute("type", "radio");
            q.setAttribute("name", "module-type-"+moduleCount);
            q.setAttribute("value", "quiz");
            q.setAttribute("onclick", "setType('quiz', "+moduleCount+")");

            let qLabel = document.createElement("label");
            qLabel.setAttribute("for", "module-type-"+moduleCount);
            qLabel.innerHTML = "Quiz";
            
            type.append(tLabel);
            type.append(t);
            type.append(vLabel);
            type.append(v);
            type.append(qLabel);
            type.append(q);

            type.id = "type";

            let content = document.createElement("div");
            content.id = "module-"+moduleCount+"-content";

            let deleteButton = document.createElement("button");
            deleteButton.id = "delete-module-"+moduleCount;
            deleteButton.classList.add("secondary-button");
            deleteButton.innerHTML = "Remove module";
            deleteButton.setAttribute("onclick", "deleteModule("+moduleCount+")");
            deleteButton.setAttribute("type", "button");

            m.append(name);
            m.append(type);
            m.append(deleteButton);
            m.append(content);


            document.getElementById("new-module-button").insertAdjacentElement("beforebegin", m);

            setType("text", moduleCount);

            return false;
        }

        function deleteModule(id)
        {
            let module = document.getElementById("module-"+id);
            module.remove();

            return false;
        }



    </script>

</body>
</html>