<link rel="stylesheet" href="css/bootstrap.min.css" />

<!-- Navbar  -->
<nav class="navbar fixed-top navbar-expand-lg navbar-dark p-md-3">
      <div class="container">
        <a class="navlogo" href="index.php"><img src="../ahhh/img/tablogo.png" height="60px" width="auto"></a>
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
              <a class="nav-link h5 text-white" href="../index.php" id="heart">Home</a>
            </li>
            <?php
              if(isset($_SESSION['login'])){
                echo  '
                <li class="nav-item">
                <a class="nav-link h5 text-white" href="../reservation/reservationpage.php" id="heart_a">Hotel Rooms</a>
              </li>
              <li class="nav-item">
              <a class="nav-link h5 text-white" href="../reservation/cottage.php" id="heart_b">Cottage</a>
              <li class="nav-item">
                <a class="nav-link h5 text-white" href="../reservation/Transaction.php" id="heart_c">Transaction</a>
              </li>
              <li class="nav-item">
                <a class="nav-link h5 text-white" href="../reservation/services.php" id="heart_d">Services</a>
              <li class="nav-item">
                <a class="nav-link h5 text-white" href="../user/feedback.php" id="heart_e">Feedback</a>
              </li>
              <li class="nav-item">
                <a class="nav-link h5 text-white" href="../user/profile.php" id="heart_f">Profile</a>
              </li>
              <li class="nav-item">
                <a class="nav-link h5 text-white" href="../app/controllers/auth/logout.php" id="heart_g">Logout</a>
              </li>';
              }else{
                echo  '
                <li class="nav-item">
                <a class="nav-link h5 text-white" href="../reservation/reservationpage.php" id="heart_h">Hotel Rooms</a>
              </li>
              <li class="nav-item">
              <a class="nav-link h5 text-white" href="../reservation/cottage.php" id="heart_i">Cottage</a>
              </i>
              <li class="nav-item">
                <a class="nav-link h5 text-white" href="../reservation/services.php" id="heart_j">Services</a>
              </li>
                <li class="nav-item">
                <a class="nav-link h5 text-white" href="../login.php" id="heart_k">Login</a></li>';
              }
            ?>
          </ul>
        </div>
      </div>
    </nav>

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
