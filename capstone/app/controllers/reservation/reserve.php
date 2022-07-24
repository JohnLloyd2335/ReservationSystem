<?php
//-- Declaring variables to prevent errors --//
$date = "";
$name = "";
$checkin = "";
$checkout = "";
$roomtype = "";
$adultnum = "";
$childrennum = "";
$expenses = 0;
$roomnumber = 0;
$sampleint = 0;
$error_array = array();


if (isset($_POST['reservebutton'])) {       
    if("" == trim($_POST['name'])){
        $_SESSION['inputroom'] = $_POST['room'];
        $_SESSION['inputCheckin'] = $_POST['checkin'];
        $_SESSION['inputCheckout'] = $_POST['checkout'];
        $_SESSION['inputAdultnum'] = $_POST['adultnum'];
        $_SESSION['inputChildrennum'] = $_POST['childrennum'];
        $_SESSION['reserve'] = true;
        header("Location: ../login.php");
        exit();
    } 
    else {
        //-- Registration form values --//
        //roomtype
        $name = strip_tags($_POST['name']); //Remove html tags
    
        //roomtype
        $roomtype = strip_tags($_POST['room']); //Remove html tags
    
        //$looplength = $_POST['loopservice'];
    
        //$service = $_POST['service0'];
    
        //check in 
        $checkindatewhole = $_POST['checkin'];
        $checkin = strtotime($_POST['checkin']); //Remove html tags
        $checkindate=date('d',$checkin);
        $checkinmonth=date('m',$checkin);
        $checkinyear=date('Y',$checkin);
    
        //check out 
        $checkoutdatewhole = $_POST['checkout'];
        $checkout = strtotime($_POST['checkout']); //Remove html tags
        $checkoutdate=date('d',$checkout);
        $checkoutmonth=date('m',$checkout);
        $checkoutyear=date('Y',$checkout);
    
        $date1 = new DateTime($checkindatewhole);
        $date2 = new DateTime($checkoutdatewhole);
        $checkdifference = date_diff($date1, $date2);
        $diffDays = intval($checkdifference->format("%d"));
    
        //Number of Adults
        $adultnum = strip_tags($_POST['adultnum']); //Remove html tags
    
        //Numer of Children
        $childrennum = strip_tags($_POST['childrennum']); //Remove html tags

        $sql2="SELECT * FROM rooms WHERE room_name='$roomtype'";
        $result2 = $con->query($sql2);
        if ($result2->num_rows > 0) {
            while ($row2 = $result2->fetch_assoc()) {
                $expenses = ($diffDays * $row2['price']) + ($adultnum * 200) + ($childrennum * 150); 
            }
        }
    
        $checkindatesample=date('Y-m-d', strtotime($checkindatewhole));
        $checkoutdatesample=date('Y-m-d', strtotime($checkoutdatewhole));
    
        $sqlquery1 = "SELECT * FROM roomreservation WHERE roomtype='$roomtype'";
        $result1 = $con->query($sqlquery1);
        if ($result1->num_rows > 0) {
            while ($row = $result1->fetch_assoc()) {
                
                //echo $paymentDate; // echos today! 
                $checkindateindatabase = date('Y-m-d', strtotime($row['checkin']));
                $checkoutdateindatabase = date('Y-m-d', strtotime($row['checkout']));
                    
                if (($checkindatesample >= $checkindateindatabase) && ($checkindatesample <= $checkoutdateindatabase)){
                    array_push($error_array, "Room and Date Occupied!<br>");
                }
                else if (($checkoutdatesample >= $checkindateindatabase) && ($checkoutdatesample <= $checkoutdateindatabase)){
                    array_push($error_array, "Room and Date Occupied!<br>");
                }
                else{
    
                }
            }
        }

    //-- Start of Error Validation --//
    if (empty($error_array)) { //If No Error Statement

        //Insert Data to database
        $query1 = mysqli_query($con, "INSERT INTO `roomreservation` (roomtype, checkin, checkout, adult, children, approvalstatus, expenses, name, balance) 
        VALUES ('$roomtype', '$checkindatewhole', '$checkoutdatewhole', '$adultnum', '$childrennum', 'Pending', '$expenses', '$name', '$expenses')");

        header("Location: ../reservation/Transaction.php");
        exit();
    } 
}
}
//-- Start Register Button --//
