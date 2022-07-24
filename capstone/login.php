<?php 
require('PHPMailer/Exception.php');
require('PHPMailer/SMTP.php');
require('PHPMailer/PHPMailer.php');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
    require 'app/config/connect.php';
    //login, register handler
    require 'app/controllers/auth/register.php';
    require 'app/controllers/auth/login.php';

       
        

    function send_OTP($receiver,$message){
        


        




        //Create an instance; passing `true` enables exceptions
        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->SMTPDebug = 0;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'ralpharcher24@gmail.com';                     //SMTP username
            $mail->Password   = 'fyeugjizrormrivu';                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $mail->setFrom($receiver);
            $mail->addAddress($receiver);     //Add a recipient

            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Body    = $message;

            $mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }   

    if(isset($_POST['find_email'])){
        $email = $_POST['email'];

       


        $findEmail = $con->query("SELECT * FROM user WHERE email='$email'");

        if($findEmail->num_rows > 0){
            $verificationGenerated = strval(rand(1000,9999));
            $_SESSION['otp_receiver'] = $email;
            $_SESSION['verification'] = $verificationGenerated;
            send_OTP($email,$_SESSION['verification']);
            header("Location: verify.php");
        }
        else{
            echo '<script>alert("User cant be found")</script>';    
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
        <center><br><br><br>
        <div class="container-fluid" id="page-content">
            <div class="card text-center w-25 shadow-lg">
                <div class="card-header p-4">
                    <div class="card-body">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<li class="nav-item" role="presentation">
                                <a class="nav-link active" href="#login" data-toggle="tab" id="first-tab">LOGIN</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" href="#register" data-toggle="tab" id="second-tab">REGISTER</a>
                            </li>
                        </ul>
                    </div>
            
                    <div class="tab-content" id="myTabContent">
                        <!-- Login Tab-->   
                        <div class="tab-pane fade active show" id="login" role="tabpanel" aria-labelledby="login-tab">
                            <h1 class="card-title">LOGIN</h1><br>
                            <form action="login.php" method="POST">
                            <div class="input-group mb-3">
                                <input class="form-control auth-input w-100 p-2" type="email" id="emaillogin" name="emaillogin" placeholder="Email.." value="">
                            </div>
                            <div class="input-group mb-3">
                                <input class="form-control auth-input w-100 p-2" type="password" id="passwordlogin" name="passwordlogin" placeholder="Password.." value="">
                            </div>
                            <div class="input-group mb-3">
                                <a href=""  data-toggle="modal" data-target="#forgotPassword">Forgot Password?</a>
                            </div>
                            <div class="input-group mb-3">
                                <?php if (in_array("Email or password was incorrect<br>", $error_array)) echo "Email or password was incorrect<br>";?>
                            </div>
                            <div class="input-group mb-3">
                                <input type="submit" name="loginbutton" class="button-18 w-100" value="Login">
                            </div>
                            </form>
                        </div>

                        <!-- Register Tab--> 
                        <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab">
                            <h1 class="card-title">REGISTER</h1><br>
                            <form action="login.php" method="POST">
                            <div class="input-group mb-3">
                                <input class="form-control auth-input w-100 p-2" type="text" name="fnamereg" placeholder="First Name.." value="" required>
                            </div>
                            <div class="input-group mb-3">
                                <input class="form-control auth-input w-100 p-2" type="text" name="lnamereg" placeholder="Last Name.." value="" required>
                            </div>
                            <div class="input-group mb-3">
                                <input class="form-control auth-input w-100 p-2" type="number" name="mobnumreg" placeholder="Mobile Number.." value="" required>
                            </div>
                            <div class="input-group mb-3">
                                <input class="form-control auth-input w-100 p-2" type="email" name="emailreg" placeholder="Email.." value="" required>
                            </div>
                            <div class="input-group mb-3">
                                <input class="form-control auth-input w-100 p-2" type="password" name="passwordreg" placeholder="Password.." value="" required>
                            </div>
                            <div class="input-group mb-3">
                                <?php if (in_array("Email or password was incorrect<br>", $error_array)) echo "Email or password was incorrect<br>";?>
                            </div>
                            <div class="input-group mb-3">
                                <input type="submit" name="registerbutton" class="button-18 w-100" value="Register">
                            </div>
                            <div>

                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>    
        </div>
        <br><br>
        
        <!-- Modal -->
        <div class="modal " id="forgotPassword" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Forgot Password</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="login.php" method="post">
                <div class="continer-fluid px- m-2">
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="">
                                    Enter Email
                                </label>
                                <input type="email" name="email" class="form-control" placeholder="example@gmail.com" required>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" name="find_email" class="btn btn-primary">Proceed</button>
                </form>
            </div>
            </div>
        </div>
        </div>
        <!-- Modal -->
    </body>
</html>