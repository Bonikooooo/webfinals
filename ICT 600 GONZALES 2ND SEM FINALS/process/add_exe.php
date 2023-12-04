<?php
session_start();
include_once '../config/database.php';

$errlname           = ""; 
$errfname           = "";
$erruser_lvl        = "";
$errcontact         = "";
$errusername        = "";
if($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $lname    = $_POST['lname'];
    if (empty($lname)) {
        $errlname = "Last Name cannot be blanked!";
    }

    $fname    = $_POST['fname']; 
    if (empty($fname)) {
        $errfname = "First Name cannot be blanked!";
    } 

    $mname    = $_POST['mname'];

    $user_lvl = $_POST['user_lvl'];
    if (empty($user_lvl)) {
        $erruser_lvl = "User Level cannot be blanked!";
    }

    $contact  = $_POST['contact'];
    if (empty($contact)) {
        $errcontact = "Contact cannot be blanked!";
    }

    $username = $_POST['username'];
    if (empty($username)) {
        $errusername = "Username cannot be blanked!";
    }
    $pword = md5("qweqwe123");
    $date_created = date ('Y-m-d');

if( $errlname           == "" and
    $errfname           == "" and
    $erruser_lvl        == "" and
    $errcontact         == "" and
    $errusername        == "") {
    unset($_SESSION['error']);
} else {
    $_SESSION['error'] = array (
    'errlname'      => $errlname,
    'errfname'      => $errfname,
    'erruser_lvl'   => $erruser_lvl,
    'errcontact'    => $errcontact,
    'errusername'   => $errusername
    );
}

if(!isset($_SESSION['error'])) {

    $query = "INSERT INTO users (lname,
                                fname,
                                mname,
                                user_lvl,
                                contact,
                                username,
                                pword,
                                date_created) 
             VALUES('$lname',
                    '$mname',
                    '$fname',
                    '$user_lvl',
                    '$contact',
                    '$username',
                    '$pword',
                    '$date_created')";

    if (mysqli_query( $conn, $query )) {
        header('location:../user/index.php');
    } else {
        echo "Error".$query."".mysqli_error($conn);
    }
    mysqli_close($conn);
} else {
    header('location:../user/add.php');
}
}