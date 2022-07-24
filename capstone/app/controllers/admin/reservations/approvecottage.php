<?php

//Import PHPMailer classes into the global namespace
    //These must be at the top of your script, not inside a function
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\OAuth;
    use League\OAuth2\Client\Provider\Google;
    $error_array = array();
 
    //Load Composer's autoloader
    require_once 'vendor/autoload.php';
    require_once 'class-db.php';
    require_once '../../../config/connect.php';

if (isset($_GET['id'])) {
    $emailget = $_GET['email'];
    $id = $_GET['id'];
    $query = mysqli_query($con, "UPDATE cottagereservation SET approvalstatus='Approved' WHERE id='$id'");

    if($query){
        // echo '<script>
        //     alert("Approved");
        //     window.location="../../login.php";
        //     </script>';
            header("Location: ../../../../admin/reservations.php");
         
    }
    else{
        // echo '<script>
        // alert("Fail to Approved");
        // window.location="login.php";
        // </script>';

        header("Location: ../../../../admin/reservations.php");
    }

    
}
?>