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
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
  <!------------------Bootstrap JS end-------------------->

  <!-----------------navbar start--------------------->


    <div class="container-fluid">
    <nav class="navbar navbar-expand-lg  fixed-top ">
      <a class="navbar-brand mr-auto " href="index.php">Amaan'Portfolio</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
        aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas  offcanvas-end" tabindex="-6" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu Bar</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
              <a class="nav-link  mx-lg-2 " href="index.php">Home</a>
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
              <a class="nav-link mx-lg-2 active" href="project.php">Project</a>
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
            <a href=""> Github </a>
            <!-- <button class="btn">/button> -->
          </div>

        </div>

        <div class="col-lg-6 col-6 col-sm-6">
          <div class="rightsection ">
            <img src="images/profile.png">
          </div>
        </div>
      </div>
    </div>
  </div>



  <!------------------------------------------------------------------------->




  <!------------------------------------------------------------------------->



  </main><br><br>




  <!----------------------------------------protfolio------------------------------------->


  <div id="protfolio">
    <div class="container">
      <div class="sub-title">
        <h1>My Work</h1>
      <div class="work-list">
        <div class="work">
          <img src="images/sallushoes.png">
          <div class="layer">
            <h3>E-commerce Website</h3>
            <p>Basically This website connects you the our online shopping Platform people around the world. tap the
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
            <p>Only WOW is an Indian product and service base company which focuses on human empowerment on e-commerce,
              digital marketing, affiliates program....</p>
            <a href="https://onlywow.in/index.php"><i class="fa-solid fa-up-right-from-square"></i></a>

          </div>
        </div>
        <div class="work">
          <img src="images/tution.png">
          <div class="layer">
            <h3>Tution Management System</h3>
            <p>"The Tuition Management System is a web-based solution aimed at automating and simplifying the management
              of tuition centers. The system covers student enrollment, fee management, batch scheduling, attendance
              tracking, and performance monitoring, ensuring a seamless and efficient operation of the institution.</p>
            <a href="#"><i class="fa-solid fa-up-right-from-square"></i></a>

          </div>
        </div>
      </div>
    </div>
    </div>
  </div>
  <!----------------------------------------protfolio End------------------------------------>


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
                        <li><a href="#" >Projects</a></li>
                        <li><a href="#" >Contact</a></li>
                        <li><a href="#" >Blog</a></li>
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
        duration: 800,
        offset: 200,
      });
    </script>

    <!--------------------------Aos animation end-------------------------->

    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>


    <!-- Setup and start animation! -->
    <script>
      var typed = new Typed('#element', {
        strings: ['PHP Developer', 'Back-end Developer', 'Front-end Developer', 'Full Stack Web Developer at EazyByts IT Company'],
        typeSpeed: 50,
      });


    </script>

</body>

</html>

