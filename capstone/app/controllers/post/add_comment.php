<?php

$error_array = array();

//-- Start Register Button --//
if (isset($_POST['addComment'])) {

    //-- Registration form values --//
    //First name
    $user_comment = strip_tags($_POST['commentComment']); //Remove html tags
    $user = strip_tags($_POST['name']); //Remove html tags
    $post_id = strip_tags($_POST['postid']); //Remove html tags

    //First name
    $datetime = new DateTime();
    $date = $datetime->format('Y-m-d H:i:s');

    $description = strip_tags($_POST['postdescription']); //Remove html tags


    // Insert into Database
    $query1 = mysqli_query($con, "INSERT INTO `comments` (post_id, name, comment, date, approval_status) 
    VALUES ('$post_id', '$user','$user_comment', '$date', 'Pending')");
    header('Location: ' . $_SERVER['HTTP_REFERER']);

}