<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>portfolio</title>

    <?php include 'links.php' ?>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/media-query.css">



</head>

<body> 
    <!------------------Bootstrap JS-------------------->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <!------------------Bootstrap JS end-------------------->

    <!-----------------navbar start--------------------->


    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg  fixed-top ">
            <a class="navbar-brand mr-auto " href="index.php">Amaan'Portfolio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas  offcanvas-end" tabindex="-6" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu Bar</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link  mx-lg-2 active" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-lg-2" href="#">About</a>
                        </li>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-lg-2" href="#">Services</a>
                        </li>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-lg-2" href="project.php">Project</a>
                        </li>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-lg-2" href="#">Contact</a>
                        </li>

                    </ul>

                </div>
            </div>
    </div>
    </nav>
    <!-----------------navbar end--------------------->







    <br>               
   
    <div id="firstsection">
        <div class="contanier">
            <div class="row ">
                <div class="col-lg-6 col-6 col-sm-6">
                    <!-- <div class="firstsection" data-aos="zoom-out">
      <div class="leftsection "> -->
                    <h1>Hi, my name is <span class="purple">Amaan</span>
                        iam a Passionate
                        <span id="element"></span>
                    </h1>


                    <div class="buttons">
                        <a href="files/AmaanResume.pdf" download> <i class="fa-solid fa-download"></i>Resume </a>
                        <a href="https://github.com/Mohdamaan9026/Amaanportfoilio?tab=readme-ov-file"> Github </a>
                        <!-- <button class="btn">/button> -->
                    </div>

                </div>

                <div class="col-lg-6 col-6 col-sm-6">
                    <div class="rightsection ">
                        <img src="images/profile.png" data-aos="slide-left">
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!------------------------------------------------------------------------->




    <!------------------------------------------------------------------------->



    </main><br><br>





    <!--------------------------------About me----------------------------------------->

    <div id="about">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 ">
                    <div class="about_1">
                        <img src="images/amaan.png" data-aos="zoom-out">

                    </div>
                </div><br>

                <div class="col-lg-6 col-md-6 col-sm-6 ">
                    <div class="about_2">
                        <h3 class="sub-title ">About me</h3>
                        <p>Hello welcome to our protfolio. My name is <span class="purple">Amaan</span>
                            and iam a php backend developer i create a web applications
                            and ecommerce website i have done my mca from integral university</p>

                        <div class="tab-titles">
                            <p class="tab-links active-link" onclick="opentab('skills')">Skills</p>
                            <p class="tab-links" onclick="opentab('experience')">Experience</p>
                            <p class="tab-links" onclick="opentab('education')">Education</p>

                        </div>
                        <div class="tab-contents active-tab" id="skills">
                            <ul>
                                <li><span>PHP</span><br>
                                    <p>Designing a database using Php myAdmmin</p>
                                </li>
                                <li><span>Web Development</span><br>
                                    <p>Web App Development</p>
                                </li>
                                <li><span>App Developement</span><br>
                                    <p>Building Android/IOS apps</p>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-contents" id="experience">
                            <ul>
                                <li><span>Full stack Developer</span><br>
                                    <p>EazyByts Web IT comapany</p>
                                </li>
                                <li><span>javascript</span><br>
                                    <p> Web app Development</p>
                                </li>
                                <li><span>Spring Boots</span><br>
                                    <p>Building Android/IOS apps</p>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-contents" id="education">
                            <ul>
                                <li><span>Master of Computer Application</span><br>
                                    <p>Integral University,Luckonow</p>
                                </li>
                                <li><span>Bachelor Of Computer Application</span><br>
                                    <p>ITM College of Management, Gida,Gorakhpur</p>
                                </li>
                                <li><span>12th Intermediate</span><br>
                                    <p>Gov't Jubliee Inter College, Gorakhpur</p>
                                </li>
                            </ul>
                        </div>

                    </div>

                </div>

            </div>
        </div>
    </div>
    <!-------------------------------About section end------------------------------------------>



    <!-------------------------------skill section Start--------------------------------------->



    <div id="services">
        <div class="container-fluid">

            <h1 class="sub-title">Skills</h1>
            <div class="services-list ">

                <div data-aos="slide-down">
                    <i class="fa-solid fa-code col-md-4"></i>
                    <h2>PHP BACKEND </h2>
                    <p> i have done some CRUD operation in php PHP can generate dynamic page content.
                        php can create, open, read, write, delete, and close files on the server.
                        php can collect form data. php can send and receive cookies.
                        php can add, delete, modify data in your database.
                        php can be used to control user-access.
                        php can encrypt data.</p>
                    <a href="#">learn more</a>
                </div>
                <div data-aos="zoom-in">
                    <i class="fa-brands fa-php col-md-4"></i>
                    <h2>php Myadmin </h2>
                    <p>Intended to handle the administration of MySQL over the Web.
                        phpMyAdmin supports a wide range of operations .</p>
                    <a href="#">learn more</a>
                </div>
                <div data-aos="slide-down">
                    <i class="fa-solid fa-database col-md-4"></i>
                    <h2>MYSQL </h2>
                    <p>phpMyAdmin is a free tool that allows to administer MySQL or MariaDB database servers.
                        I use phpMyAdmin to: Create databases, Run queries, and Add user accounts. </p>
                    <a href="#">learn more</a>
                </div>
                <div data-aos="zoom-in">
                    <i class="fa-brands fa-bootstrap col-md-4"></i>
                    <h2>BOOTSTRAP </h2>
                    <p>Get started with Bootstrap, the world’s most popular framework for building responsive,
                        mobile-first sites, with jsDelivr and a template starter page. </p>
                    <a href="#">learn more</a>
                </div>
            </div>
        </div>
    </div><br><br><br>
    <!-------------------------------Skill section end------------------------------------------>


    <!----------------------------------------protfolio------------------------------------->


    <div id="protfolio">
        <div class="container">

            <h1>My Work</h1>
            <div class="work-list">
                <div class="work">
                    <img src="images/sallushoes.png">
                    <div class="layer">
                        <h3>E-commerce Website</h3>
                        <p>Basically This website connects you the our online shopping Platform people around the world.
                            tap the
                            link below.</p>
                        <a href="#"><i class="fa-solid fa-up-right-from-square"></i></a><br><br><br>


                        <p1>launch Soon</p1>
                        <span>80% project done</span>

                    </div>
                </div>
                <div class="work">
                    <img src="images/onlywow.png">
                    <div class="layer">
                        <h3>Web App e-commerce </h3>
                        <p>Only WOW is an Indian product and service base company which focuses on human empowerment on
                            e-commerce,
                            digital marketing, affiliates program....</p>
                        <a href="https://onlywow.in/index.php"><i class="fa-solid fa-up-right-from-square"></i></a>

                    </div>
                </div>
                <div class="work">
                    <img src="images/tution.png">
                    <div class="layer">
                        <h3>Tution Management System</h3>
                        <p>"The Tuition Management System is a web-based solution aimed at automating and simplifying
                            the management
                            of tuition centers. The system covers student enrollment, fee management, batch scheduling,
                            attendance
                            tracking, and performance monitoring, ensuring a seamless and efficient operation of the
                            institution.</p>
                        <a href="#"><i class="fa-solid fa-up-right-from-square"></i></a>

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!----------------------------------------protfolio End------------------------------------>

    <!----------------------------------------certification part ------------------------------------>
   
    <div id="certificate">
        <div class="container">
            <div class="row">
                <h1>Certificates</h1>
                
                <div class="w-list">
                    
                    <div class="works" data-aos="slide-right">
                        <img src="images/certificate2.jpg">

                    </div>
                    <div class="works"data-aos="slide-left">
                        <img src="images/certificate3.jpg">

                    </div>
                 
                    <div class="works"data-aos="zoom-out">
                   
                        <img src="images/certificate.jpg">

                    </div>
                    <div class="works"data-aos="zoom-out">
                        <img src="images/certificate1.jpg">

                    </div>
                    </div>
                </div>
            
        </div>
    </div>
    </div></div>
    <!----------------------------------------certification part end------------------------------------>




    <!-----------------------------------our page start-------------------------------------------->
    <div id="our_page">
        <div class="container-fluid ">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 ">
                    <div class="about_us"data-aos="slide-right">

                        <h2>About us</h2>
                        <p> As a skilled PHP backend and web developer,
                            I bring a strong foundation in web technologies,
                            creating efficient, scalable,
                            and secure applications that power seamless online experiences.
                            My expertise in PHP enables me to handle complex server-side logic,
                            manage databases, and integrate APIs,
                            all of which form the backbone of dynamic and interactive web applications.
                            I also keep my skills up-to-date with the latest frameworks and libraries,
                            such as Laravel and Symfony, which allow me to enhance performance, security,
                            and maintainability in my projects. </p>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>

                    </div>
                    <h6>Connect With Us on Social Media Platform</h6> <br>
                    <br>
                    <div class="social"data-aos="zoom-in">
                        <a href="#" class="fa fa-facebook"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="#" class="fa fa-instagram"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="#" class="fa fa-twitter"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="https://www.linkedin.com/in/mohd-amaan-09621b221?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app "
                            class="fa fa-linkedin"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="#" class="fa fa-whatsapp"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    </div>
                    <hr>
                </div><br>

                <div class="col-lg-6 col-md-6 col-sm-6 ">
                    <div class="contact_us"data-aos="slide-left">
                        <h2>Contact us</h2>



                        <form action="" method="POST" class=" was-validated">
                            <div class="form-group">
                                <label for="name">Name:</label>
                                <input type="name" class="form-control" placeholder="Enter name" id="name" name="name"
                                    required>
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                            <div class="form-group">
                                <label for="number">Mobile</label>
                                <input type="number" class="form-control" placeholder="Enter mobile num" id="pwd"
                                    name="mobile" required>
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                            <div class="form-group">
                                <label for="varchar">Date:</label>
                                <input type="date" class="form-control" placeholder="Enter Date" id="date" name="date"
                                    required>
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                            <div class="form-group">
                                <label for="name">Address:</label>
                                <input type="Address" class="form-control" placeholder="Enter Address" id="Address"
                                    name="address" required>
                            </div>
                            <!---  <div class="form-group form-check"><label class="form-check-label">
      <input class="form-check-input" type="checkbox"> Remember me </label>
  </div>-->
                            <div class="submit_button">
                                <button type="submit" name="save"
                                    class="btn btn-success">Submit</button><br><br><br><br>
                            </div>
                        </form>

                    </div>

                </div>
            </div>
        </div>
    </div>



    <!---------------------------------------------form end ----------------------------------------------------------->

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <!-----------------------------------our page end -------------------------------------------->

    <!---------------------------------footer start-------------------------------------->


    <!-- Footer -->
    <footer class="footer py-5 bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4">
                    <h5 class="text-uppercase">About Me</h5>
                    <p>I bring a strong foundation in web technologies, creating efficient, scalable,
                        and secure applications that power seamless online experiences.
                        My expertise in PHP enables me to handle complex server-side logic,
                        manage databases.</p>
                </div>
                <div class="col-md-4 mb-4">
                    <h5 class="text-uppercase">Quick Links</h5>
                    <ul class="list-unstyled  ">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="#">Projects</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">Blog</a></li>
                    </ul>
                </div>
                <div class="col-md-4 mb-4">
                    <h5 class="text-uppercase">Contact</h5>
                    <p>Email: <a href="mailto:amaansidd125@gmail.com" class="text-white">amaansidd125@gmail.com</a></p>
                    <p>Phone: <a href="tel:8948477276" class="text-white">+918948477276</a></p>
                </div>
            </div>
            <div class="text-center mt-4">
                <p>&copy; 2024 Mohd Amaan. All Rights Reserved.</p>
            </div>
        </div>
    </footer>







    <!------------------------- footer end-------------------------->

    <!--------------------------Aos animation start-------------------------->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
    AOS.init({
        duration: 700,
        offset: 200,
    });
    </script>

    <!--------------------------Aos animation end-------------------------->

    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>


    <!-- Setup and start animation! -->
    <script>
    var typed = new Typed('#element', {
        strings: ['PHP Developer', 'Back-end Developer', 'Front-end Developer',
            'Full Stack Web Developer at EazyByts IT Company'
        ],
        typeSpeed: 50,
    });

    //about on click function start//

    var tablinks = document.getElementsByClassName("tab-links");
    var tabcontents = document.getElementsByClassName("tab-contents");

    function opentab(tabname) {
        for (tablink of tablinks) {
            tablink.classList.remove("active-link");
        }
        for (tabcontent of tabcontents) {
            tabcontent.classList.remove("active-tab");
        }
        event.currentTarget.classList.add("active-link");
        document.getElementById(tabname).classList.add("active-tab");
    }



    //about on click function end//
    </script>

    </body>

</html>

<?php
include 'conn.php'; 

if (isset($_POST['save'])) {
  $Name = $_POST['name'];
  $Mobile = $_POST['mobile'];
  $Date = $_POST['date'];
  $Address = $_POST['address'];

  $insertquery = "insert into form(name,mobile,date,address) values('$Name','$Mobile','$Date','$Address')";


  $rest=mysqli_query($conn, $insertquery);

  if ($rest) {


    ?>
<script>
// Display an alert to the user
alert("Data inserted properly");

// Redirect the user to index.php after the alert is closed
window.location.href = "index.php";
</script>
<?php
  } else {
    ?>
<script>
alert("data not inserted ");
</script>
<?php


  }
}


?>