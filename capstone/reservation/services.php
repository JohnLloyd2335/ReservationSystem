<?php 
    require '../app/config/connect.php';
    //login, register handler
    require '../app/controllers/reservation/reserve.php';
?>

<html>
    <head>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   <link rel="icon" href="../ahhh/img/tablogo.png">
    <link rel="stylesheet" href="../app/css/services.css" />
    <link rel="stylesheet" href="../ahhh/fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="../ahhh/fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Services</title>
    </head>
    <style></style>
    <body>
    <?php
        include "../navbar.php";
    ?>
    <div class="jumbotron" style="background-image: linear-gradient(to bottom, rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url(../ahhh/img/bg1.jpg); border-radius: 0px; background-position: center; background-size: cover; height: 100vh; min-height: 700px;">
        <div class="container p-5">
            <br><br><br><br><br>
        <center>
        <h1 class="heading center p-2">Enjoy the Beach and Sand!</h1>
        <h3 class="sub-heading center">Reserve Now!</h3>
        </center>
        </div>
    </div>
    <div class="container p-5 justify-content-center">
        <div class="row w-100">
            <div class="col">
                <center> <h2 class="sched">Services</h2><hr class="w-100"></center>
            </div>
        </div>
        <div class="row p-3">
            <div class="col">
                <button class="button-18" onclick="printIt();passService()">Go to Reservation</button>
            </div>
        </div>
        <div class="row w-100">
            <?php
                $sql = "SELECT * FROM services";
                $result = $con->query($sql);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
            ?>
            <div class="col-6 p-3">
                <div class="card text-center w-100 h-100" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $row['service_name']." / ".$row['price'] ?></h5>
                        <img class="w-50 h-50" src = "uploads/<?php echo $row['image']?>" class ="mx-auto d-block w-100 h-100 border">
                        <p class="card-text"><?php echo $row['description']?></p>
                        <button class="button-18" onclick="addToArray('<?php echo $row['service_name']?>')">Add</button>
                    </div>
                </div>
            </div>
            <?php 
                    }
                }
            ?>
        </div>
    </div>
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
    
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header p-3 mb-2 bg-dark text-white">
        <h5 class="modal-title" id="exampleModalLabel">Reservation</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="modalform"action="calendar.php" method="POST">
        <div class="input-group mb-3" id="modaldate">

        </div>
        <div class="input-group mb-3">
            <select class="form-select w-100 p-2" name="timeswimming" aria-label="Default select example" placeholder="aaa">
                <option disabled selected hidden>Day Swimming</option>
                <option value="1">Day Swimming</option>
                <option value="2">Night Swimming</option>
            </select>
        </div>
        <div class="input-group mb-3">
            <select class="form-select w-100 p-2" name="cottagenum" aria-label="Default select example">
                <option disabled selected hidden>Cottage No.</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="1">3</option>
                <option value="2">4</option>
            </select>
        </div>
        <div class="input-group mb-3">
            <select class="form-select w-100 p-2" name="adultnum" aria-label="Default select example">
                <option disabled selected hidden>Number of Adults</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="1">3</option>
                <option value="2">4</option>
            </select>
        </div>
        <div class="input-group mb-3">
            <select class="form-select w-100 p-2" name="childrennum" aria-label="Default select example">
                <option disabled selected hidden>Number of Children</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="1">3</option>
                <option value="2">4</option>
            </select>
        </div>
            <input type="submit" name="reservebutton" class="btn-primary btn w-100" value="Reserve">
        </div>
        </form>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="reservationModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header p-3 mb-2 bg-dark text-white">
        <h5 class="modal-title" id="headerModal"> </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="modalBody">
        <?php
            $sql = "SELECT * FROM reservation";
            $result = $con->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
        ?>
            <div class="row">
                <div class="col">
                    <?php echo $row['id']?>
                </div>
            </div>
        <?php 
                }
            }
        ?>
        <br>
        <button type="button" id="toReservation" class="button-18 w-100 h-100" onclick="inputDate()">Add Reservation</button>
      </div>
    </div>
  </div>
</div>

    <script>

    function openModal() {
        $('#confirmModal').modal('show');
    }

    var numArray = [];
    a = "";

    function addToArray(i) {
        i = i.replace(/\s+/g,''); 
        numArray.push(i);
        event.target.disabled = true;
    }

    function printArray() {
        console.log(numArray);
    }

    function printIt() {
        for(var i=0; i<numArray.length; i++){
            a += ("id" + i + "=" + numArray[i] + "&");
        }
        console.log(a);
    }

    function passService() {
        window.open("../reservation/reservationpage.php?" + a +"loop=" + numArray.length, "_self");
    }
    //delete.php?id=1&
    
    </script>
</body>
</html>