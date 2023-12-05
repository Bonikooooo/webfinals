<?php
session_start();
include_once '../config/database.php';

$errstudnum           = ""; 
$errfullname          = "";
$errmidtermgrade      = "";
$errfinalgrade        = "";
if($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $studnum    = $_POST['studnum'];
    if (empty($studnum)) {
        $errstudnum = "Last Name cannot be blanked!";
    }

    $fullname    = $_POST['fullname']; 
    if (empty($fullname)) {
        $errfullname = "First Name cannot be blanked!";
    } 

    $midtermgrade  = $_POST['midtermgrade'];
    if (empty($midtermgrade)) {
        $errmidtermgrade = "midtermgrade cannot be blanked!";
    }

    $finalgrade = $_POST['finalgrade'];
    if (empty($finalgrade)) {
        $errfinalgrade = "finalgrade cannot be blanked!";
    }
    $date_created = date ('Y-m-d');

if( $errstudnum               == "" and
    $errfullname              == "" and
    $errmidtermgrade          == "" and
    $errfinalgrade            == "") {
    unset($_SESSION['error']);
} else {
    $_SESSION['error'] = array (
    'errstudnum'        => $errstudnum,
    'errfullname'       => $errfullname,
    'errmidtermgrade'   => $errmidtermgrade,
    'errfinalgrade'     => $errfinalgrade
    );
}

if(!isset($_SESSION['error'])) {

    $query = "INSERT INTO students (studnum,
                                fullname,
                                midtermgrade,
                                finalgrade,
                                date_created) 
             VALUES('$studnum',
                    '$fullname',
                    '$midtermgrade',
                    '$finalgrade',
                    '$date_created')";

    if (mysqli_query( $conn, $query )) {
        header('location:index.php');
    } else {
        echo "Error".$query."".mysqli_error($conn);
    }
    mysqli_close($conn);
} else {
    header('location:add.php');
}
}