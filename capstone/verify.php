<?php 


    require 'app/config/connect.php';
    //login, register handler
    require 'app/controllers/auth/register.php';
    require 'app/controllers/auth/login.php';
    if(isset($_POST['confirm_otp'])){
        $input_otp = $_POST['input_otp'];
        if($input_otp == $_SESSION['verification']){
            header("Location: recovery.php");
        }
        else{
            echo '<script>alert("Incorrect verification code")</script>';  
        }
    }

       
        

    
?>
<html>
    <head>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="icon" href="ahhh/img/tablogo.png">

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="app/css/login.css" />
    <title>USER</title>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    <style>
/* Chrome, Safari, Edge, Opera */
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/* Firefox */
input[type=number] {
  -moz-appearance: textfield;
}
</style>

    </head>

    <body style="background-image: url(ahhh/img/bg1.jpg);">
    <center> <br> <br> <br> <br><br> <br> 
    <div class="row align-items-center p-5 w-50">
                <div class="col-50 mx-auto">
                    <div class="card shadow border">
                    <br> <br> 
        <form action="verify.php" method="post">
            <h6><?php echo "Verification code was sent to ".$_SESSION['otp_receiver']; ?></h6>
            <br> 
            <input type="number" name="input_otp" id="" required>
            <input type="submit" value="Confirm" name="confirm_otp">
            <br> <br> <br>
        </form> 
</div>

    </body>
</html>