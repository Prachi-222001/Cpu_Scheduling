<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <title>Operating System</title>
</head>

<body>
    <section class="sub-header">
        <nav>
            <a href="./index.html">Operating System</a>
            <div class="nav-links" id="navLinks">
                <i class="fas fa-window-close" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="index1.php">HOME</a></li>
                    <li><a href="docs1.phP">DESCRIPTION</a></li>
                    
                    <li><a href="./backend/ganttcharts.php">CALCULATOR</a></li>
                    <li><a href="about1.php">ABOUT</a></li>
                    <li><a href="logout.php">LOGOUT</a></li>

                </ul>
            </div>
            <i class="fas fa-bars" onclick="showMenu()"></i>
        </nav>

        <h1>About us</h1>
    </section>

    <div class="container_1">
        <div class="header_1">
            <h1>Our Team</h1>
        </div>

        <div class="sub_container" data-aos="zoom-in-up">
            <div class="teams">
                <img src="./eduford_img/about2.jpeg" alt="">
                <div class="name">Atharva Shejul</div>
                <div class="desig">MCA-226325</div>
                <div class="about">Student At Fergusson College </div>
               
            </div>

            
            <div class="teams">
                <img src="./eduford_img/about3.jpeg"  alt="">
                <div class="name">Prathamesh Hajare</div>
                <div class="desig">MCA-226339</div>
                <div class="about">Student At Fergusson College</div>
                
            </div>

            <div class="teams">
                <img src="./eduford_img/about1.jpeg"  alt="">
                <div class="name">Amol Gayake</div>
                <div class="desig">MCA-226334</div>
                <div class="about">Student At Fergusson College</div>
               
            </div>
        </div>

       
            
        </div>


    </div>

    
   
    

    <script>
        var navLinks = document.getElementById("navLinks");
        function showMenu() {
            navLinks.style.right = "0";
        }

        function hideMenu() {
            navLinks.style.right = "-200px";
        }
    </script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init({
        offset: 200, // offset (in px) from the original trigger point
        duration: 600
      });
    </script>
</body>

</html>