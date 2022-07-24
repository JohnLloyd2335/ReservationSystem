<?php 
    require 'app/config/connect.php';
    //login, register handler
    require 'app/controllers/others/rate.php';
    $name ="";
    $ratings="";

    if(isset($_SESSION['login'])){
      $name = $_SESSION['name'];
      $currentuser = $_SESSION['username'];
      if(isset($_SESSION['ratings'])){
        $ratings=$_SESSION['ratings'];
      }else{
        $ratings="";
      }
    }

    $select_settings = $con->query("SELECT * FROM sys_settings WHERE sys_settings_id=1");
    while($row = $select_settings->fetch_assoc()):
      $logo = $row['logo'];
      $background = $row['background'];
      $welcome_text = $row['welcome_text'];
      $quotes = $row['quotes'];
      $welcome_text_ = $row['welcome_text'];
      $quotes = $row['quotes'];
      $slider1 = $row['slider_1'];
      $slider2 = $row['slider_2'];
      $slider3 = $row['slider_3'];
      $slider4 = $row['slider_4'];
      $slider5 = $row['slider_5'];
      $slider6 = $row['slider_6'];
    endwhile;
    
?>
<!doctype html>

<html lang="en">
 
  <head>
    <title>Ha-Boogies Archer Resort</title>
    <a class="navlogo" href="index.php"></a>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Mukta+Mahee:200,300,400|Playfair+Display:400,700" rel="stylesheet">

    <link rel="stylesheet" href="ahhh/css/bootstrap.css">
    <link rel="stylesheet" href="ahhh/css/animate.css">
    <link rel="stylesheet" href="ahhh/css/owl.carousel.min.css">
    <link rel="stylesheet" href="ahhh/css/aos.css">
    <link rel="stylesheet" href="app/css/ratings.css">
    
    <link rel="stylesheet" href="ahhh/fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="ahhh/fonts/fontawesome/css/font-awesome.min.css">

    <!--bootstrap-->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js" rel="stylesheet">
    
    <link rel="stylesheet" href="../app/css/feed.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/3.6.95/css/materialdesignicons.css" rel="stylesheet">
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!-- Theme Style -->
    <link rel="stylesheet" href="ahhh/css/style.css">
  </head>
  <body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark p-md-3">
      <div class="container">
        <a class="navlogo" href="index.php"><img src="ahhh/img/<?php echo $logo; ?>" height="60px" width="auto"></a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <div class="mx-auto"></div>
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link h5 text-white" href="index.php" id="heart">Home</a>
            </li>
            <?php
            if(isset($_SESSION['login'])){

              echo  '
              <li class="nav-item">
              <a class="nav-link h5 text-white" href="reservation/reservationpage.php" id="heart_a">Hotel Rooms</a>
            </li>
            <li class="nav-item">
              <a class="nav-link h5 text-white" href="reservation/cottage.php" id="heart_b">Cottage</a>
            </li>
            <li class="nav-item">
              <a class="nav-link h5 text-white" href="reservation/Transaction.php" id="heart_c">Transaction</a>
            </li>
            <li class="nav-item">
              <a class="nav-link h5 text-white" href="reservation/services.php" id="heart_d">Services</a>
            <li class="nav-item">
              <a class="nav-link h5 text-white" href="user/feedback.php" id="heart_e">Feedback</a>
            </li>
            <li class="nav-item">
              <a class="nav-link h5 text-white" href="user/profile.php" id="heart_f">Profile</a>
            </li>
            <li class="nav-item">
              <a class="nav-link h5 text-white" href="app/controllers/auth/logout.php" id="heart_g">Logout</a>
            </li>';
            }else{
              echo  '
              <li class="nav-item">
              <a class="nav-link h5 text-white" href="reservation/cottage.php" id="heart_h">Hotel Room</a>
            </li>
              <li class="nav-item">
              <a class="nav-link h5 text-white" href="reservation/reservationpage.php" id="heart_i">Cottage</a>
            </li>
            <li class="nav-item">
              <a class="nav-link h5 text-white" href="reservation/services.php" id="heart_j">Services</a>
            </li>
              <li class="nav-item">
              <a class="nav-link h5 text-white" href="login.php" id="heart_k">Login</a></li>';
            }
            ?>
            
          </ul>
        </div>
          </ul>
        </div>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script type="text/javascript">
      var nav = document.querySelector('nav');

      window.addEventListener('scroll', function () {
        if (window.pageYOffset > 100) {
          nav.classList.remove('navbar-dark');
          nav.classList.add('bg-light', 'shadow', 'navbar-light'); 
          $("#heart").removeClass("text-white");
          $("#heart").addClass("text-dark");
        } else {
          nav.classList.remove('bg-light', 'shadow', 'navbar-light');
          nav.classList.add('navbar-dark');     
          $("#heart").removeClass("text-dark");
          $("#heart").addClass("text-white");
        }
      });
    </script>
        <script type="text/javascript">
      var nav = document.querySelector('nav');

      window.addEventListener('scroll', function () {
        if (window.pageYOffset > 100) {
          nav.classList.remove('navbar-dark');
          nav.classList.add('bg-light', 'shadow', 'navbar-light'); 
          $("#heart_a").removeClass("text-white");
          $("#heart_a").addClass("text-dark");
        } else {
          nav.classList.remove('bg-light', 'shadow', 'navbar-light');
          nav.classList.add('navbar-dark');     
          $("#heart_a").removeClass("text-dark");
          $("#heart_a").addClass("text-white");
        }
      });
    </script>
    <script type="text/javascript">
      var nav = document.querySelector('nav');

      window.addEventListener('scroll', function () {
        if (window.pageYOffset > 100) {
          nav.classList.remove('navbar-dark');
          nav.classList.add('bg-light', 'shadow', 'navbar-light'); 
          $("#heart_b").removeClass("text-white");
          $("#heart_b").addClass("text-dark");
        } else {
          nav.classList.remove('bg-light', 'shadow', 'navbar-light');
          nav.classList.add('navbar-dark');     
          $("#heart_b").removeClass("text-dark");
          $("#heart_b").addClass("text-white");
        }
      });
    </script>
    
     <script type="text/javascript">
      var nav = document.querySelector('nav');

      window.addEventListener('scroll', function () {
        if (window.pageYOffset > 100) {
          nav.classList.remove('navbar-dark');
          nav.classList.add('bg-light', 'shadow', 'navbar-light'); 
          $("#heart_c").removeClass("text-white");
          $("#heart_c").addClass("text-dark");
        } else {
          nav.classList.remove('bg-light', 'shadow', 'navbar-light');
          nav.classList.add('navbar-dark');     
          $("#heart_c").removeClass("text-dark");
          $("#heart_c").addClass("text-white");
        }
      });
    </script>
    <script src="js/bootstrap.bundle.min.js"></script>
        <script type="text/javascript">
      var nav = document.querySelector('nav');

      window.addEventListener('scroll', function () {
        if (window.pageYOffset > 100) {
          nav.classList.remove('navbar-dark');
          nav.classList.add('bg-light', 'shadow', 'navbar-light'); 
          $("#heart_d").removeClass("text-white");
          $("#heart_d").addClass("text-dark");
        } else {
          nav.classList.remove('bg-light', 'shadow', 'navbar-light');
          nav.classList.add('navbar-dark');     
          $("#heart_d").removeClass("text-dark");
          $("#heart_d").addClass("text-white");
        }
      });
    </script>
    <script type="text/javascript">
      var nav = document.querySelector('nav');

      window.addEventListener('scroll', function () {
        if (window.pageYOffset > 100) {
          nav.classList.remove('navbar-dark');
          nav.classList.add('bg-light', 'shadow', 'navbar-light'); 
          $("#heart_e").removeClass("text-white");
          $("#heart_e").addClass("text-dark");
        } else {
          nav.classList.remove('bg-light', 'shadow', 'navbar-light');
          nav.classList.add('navbar-dark');     
          $("#heart_e").removeClass("text-dark");
          $("#heart_e").addClass("text-white");
        }
      });
    </script>
     <script type="text/javascript">
      var nav = document.querySelector('nav');

      window.addEventListener('scroll', function () {
        if (window.pageYOffset > 100) {
          nav.classList.remove('navbar-dark');
          nav.classList.add('bg-light', 'shadow', 'navbar-light'); 
          $("#heart_f").removeClass("text-white");
          $("#heart_f").addClass("text-dark");
        } else {
          nav.classList.remove('bg-light', 'shadow', 'navbar-light');
          nav.classList.add('navbar-dark');     
          $("#heart_f").removeClass("text-dark");
          $("#heart_f").addClass("text-white");
        }
      });
    </script>
     <script type="text/javascript">
      var nav = document.querySelector('nav');

      window.addEventListener('scroll', function () {
        if (window.pageYOffset > 100) {
          nav.classList.remove('navbar-dark');
          nav.classList.add('bg-light', 'shadow', 'navbar-light'); 
          $("#heart_g").removeClass("text-white");
          $("#heart_g").addClass("text-dark");
        } else {
          nav.classList.remove('bg-light', 'shadow', 'navbar-light');
          nav.classList.add('navbar-dark');     
          $("#heart_g").removeClass("text-dark");
          $("#heart_g").addClass("text-white");
        }
      });
    </script>
    <script type="text/javascript">
      var nav = document.querySelector('nav');

      window.addEventListener('scroll', function () {
        if (window.pageYOffset > 100) {
          nav.classList.remove('navbar-dark');
          nav.classList.add('bg-light', 'shadow', 'navbar-light'); 
          $("#heart_h").removeClass("text-white");
          $("#heart_h").addClass("text-dark");
        } else {
          nav.classList.remove('bg-light', 'shadow', 'navbar-light');
          nav.classList.add('navbar-dark');     
          $("#heart_h").removeClass("text-dark");
          $("#heart_h").addClass("text-white");
        }
      });
    </script>
   <script type="text/javascript">
      var nav = document.querySelector('nav');

      window.addEventListener('scroll', function () {
        if (window.pageYOffset > 100) {
          nav.classList.remove('navbar-dark');
          nav.classList.add('bg-light', 'shadow', 'navbar-light'); 
          $("#heart_i").removeClass("text-white");
          $("#heart_i").addClass("text-dark");
        } else {
          nav.classList.remove('bg-light', 'shadow', 'navbar-light');
          nav.classList.add('navbar-dark');     
          $("#heart_i").removeClass("text-dark");
          $("#heart_i").addClass("text-white");
        }
      });
    </script>
      <script type="text/javascript">
      var nav = document.querySelector('nav');

      window.addEventListener('scroll', function () {
        if (window.pageYOffset > 100) {
          nav.classList.remove('navbar-dark');
          nav.classList.add('bg-light', 'shadow', 'navbar-light'); 
          $("#heart_j").removeClass("text-white");
          $("#heart_j").addClass("text-dark");
        } else {
          nav.classList.remove('bg-light', 'shadow', 'navbar-light');
          nav.classList.add('navbar-dark');     
          $("#heart_j").removeClass("text-dark");
          $("#heart_j").addClass("text-white");
        }
      });
    </script>
    <script type="text/javascript">
      var nav = document.querySelector('nav');

      window.addEventListener('scroll', function () {
        if (window.pageYOffset > 100) {
          nav.classList.remove('navbar-dark');
          nav.classList.add('bg-light', 'shadow', 'navbar-light'); 
          $("#heart_k").removeClass("text-white");
          $("#heart_k").addClass("text-dark");
        } else {
          nav.classList.remove('bg-light', 'shadow', 'navbar-light');
          nav.classList.add('navbar-dark');     
          $("#heart_k").removeClass("text-dark");
          $("#heart_k").addClass("text-white");
        }
      });
    </script>
      </div>

    </nav>
    
    <!-- END head -->
    <!-- index bg -->
    <section class="site-hero overlay" style="background-image: url(ahhh/img/<?php echo $background; ?>)">
      <div class="container">
        <div class="row site-hero-inner justify-content-center align-items-center">
          <div class="col-md-10 text-center">
            <h1 class="heading"><?php echo $welcome_text; ?></h1>
            <p class="sub-heading mb-5"><?php echo $quotes; ?></p>
            
          </div>
        </div>
        <!-- <a href="#" class="scroll-down">Scroll Down</a> -->
      </div>
    </section>
    <!-- END section -->

    <section class="section slider-section">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-8">
          <h2 class="heading"><?php echo $welcome_text; ?></h2>
          <p class="sub-heading mb-5"><?php echo $quotes; ?></p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="home-slider major-caousel owl-carousel mb-5" data-aos="fade-up" data-aos-delay="200">
              <div class="slider-item">
                <img src="ahhh/img/<?php echo $slider1; ?>"  class="img-fluid">
              </div>
              <div class="slider-item">
                <img src="ahhh/img/<?php echo $slider2; ?>"  class="img-fluid">
              </div>
              <div class="slider-item">
                <img src="ahhh/img/<?php echo $slider3; ?>"  class="img-fluid">
              </div>
              <div class="slider-item">
                <img src="ahhh/img/<?php echo $slider4; ?>"  class="img-fluid">
              </div>
              <div class="slider-item">
                <img src="ahhh/img/<?php echo $slider5; ?>"  class="img-fluid">
              </div>
              <div class="slider-item">
                <img src="ahhh/img/<?php echo $slider6; ?>"  class="img-fluid">
              </div>
            </div>
            <!-- END slider -->
          </div>


        
        </div>
      </div>
    </section>
    <!-- END section -->
    
    <section class="section blog-post-entry">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-8">
            <h2 class="heading" data-aos="fade-up">Occasions</h2>
            <p class="lead" data-aos="fade-up">All seasons have something to offer. Resort is a good venue in different occassions.
        <div class="row">
          <div class="col-lg-4 col-md-6 col-sm-6 col-12 post" data-aos="fade-up" data-aos-delay="100">

            <div class="media media-custom d-block mb-4">
              <a href="#" class="mb-4 d-block"><img src="ahhh/img/img_3.jpg" alt="Image placeholder" class="img-fluid"></a>
              <div class="media-body">
                <h2 class="mt-0 mb-3" align="center"><a href="#">Family Outings</a></h2>
              </div>
            </div>

          </div>
          <div class="col-lg-4 col-md-6 col-sm-6 col-12 post" data-aos="fade-up" data-aos-delay="200">
            <div class="media media-custom d-block mb-4">
              <a href="#" class="mb-4 d-block"><img src="ahhh/img/img_10.jpg" alt="Image placeholder" class="img-fluid"></a>
              <div class="media-body">
                <h2 class="mt-0 mb-3" align="center"><a href="#">Birthday Celebration</a></h2>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6 col-12 post" data-aos="fade-up" data-aos-delay="300">
            <div class="media media-custom d-block mb-4">
              <a href="#" class="mb-4 d-block"><img src="ahhh/img/img_11.jpg" alt="Image placeholder" class="img-fluid"></a>
              <div class="media-body">
                  
                <h2 class="mt-0 mb-3" align="center"><a href="#">Special Occasions</a></h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->
    <section class="section testimonial-section">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-8">
            <h2 class="heading" data-aos="fade-up">Testimonial</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
            <div class="testimonial text-center">
              <div class="author-image mb-3">
                <img src="ahhh/img/person_1.jpg" alt="Image placeholder" class="rounded-circle">
              </div>
              <blockquote>

                <p>&ldquo;Really friendly and helpful staff, walk out the door straight into a nice pool area, very quiet at night, walking distance to the beach and some nice bars and restaurants.&rdquo;</p>
              </blockquote>
              <p><em>&mdash; Haji</em></p>
              
            </div>
          </div>
          <!-- END col -->
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
            <div class="testimonial text-center">
              <div class="author-image mb-3">
                <img src="ahhh/img/person_2.jpg" alt="Image placeholder" class="rounded-circle">
              </div>
              <blockquote>
                <p>&ldquo;Loved our stay!The size was fantastic, location was amazing and facilities were great. We loved it, would come back again!&rdquo;</p>
              </blockquote>
              <p><em>&mdash; Boogie</em></p>
            </div>
          </div>
          <!-- END col -->

          <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
            <div class="testimonial text-center">
              <div class="author-image mb-3">
                <img src="ahhh/img/person_3.jpg" alt="Image placeholder" class="rounded-circle">
              </div>
              <blockquote>

                <p>&ldquo;Will be returning. We had a nice stay at this resort. definitely booking to come back&rdquo;</p>
              </blockquote>
              <p><em>&mdash;Archer</em></p>
            </div>
          </div>
          <!-- END col -->
        </div>
      </div>

    </section>
    <footer class="section footer-section">
      <div class="container">
        <div class="row mb-4">
          <div class="col-md-3 mb-5 pr-md-5 contact-info">
            <p><span class="d-block">Address:</span> <span> 0069 Sitio Uno Barangay Patimabao Santa Cruz, Laguna</span></p>
            <p><span class="d-block">Phone:</span> <span> +639262449281</span></p>
            <p><span class="d-block">Email:</span> <span> haboogiesarcher@gmail.com</span></p>
          </div>
          
        </div>
        <div class="row bordertop pt-5">
          <p class="col-md-6 text-left"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This Website is for School Purpose Only
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
            
          
        </div>
      </div>
    </footer>
    <script>
      function openPostModal(i) {
            $('#modalPost' + i).modal('show');
        }

        function defaultval() {
          event.preventDefault();
        }

        function openModalRate(i) {
            $('#modalRate' + i).modal('show');
        }
    </script>
    
    <script src="ahhh/js/jquery-3.2.1.min.js"></script>
    <script src="ahhh/js/popper.min.js"></script>
    <script src="ahhh/js/bootstrap.min.js"></script>
    <script src="ahhh/js/owl.carousel.min.js"></script>
    <!-- <script src="js/jquery.waypoints.min.js"></script> -->
    <script src="ahhh/js/aos.js"></script>
    <script src="ahhh/js/main.js"></script>
  </body>
</html>