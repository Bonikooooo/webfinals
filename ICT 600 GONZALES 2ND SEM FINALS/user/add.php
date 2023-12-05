<!DOCTYPE html>
<html lang="en">
<?php session_start(); ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GONZALES</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <link rel="stylesheet" href="formstyle.css">
</head>
<body>
    
<a href="index.php">Back</a> <br>
<h3>User's Information</h5>
    <form action="../process/add_exe.php" method="POST">
        <div>
            <label for="">User Level:*</label>
            <select name="user_lvl" id="" require>
                <option value="">Select</option>
                <option value="admin">Admin</option>
                <option value="it_Admin">IT Admin</option>
                <option value="user">User</option>
            </select>
            <?php 
            if(isset($_SESSION['error'])) {
                $error = $_SESSION['error'];
                echo $error ['erruser_lvl'];
            }
            ?>
        </div>

        <div>
            <label for="">Last Name:*</label>
            <input type="text" name="lname" id="">
            <?php 
            if(isset($_SESSION['error'])) {
                $error = $_SESSION['error'];
                echo $error ['errlname'];
            }
            ?>
        </div>

        <div>
            <label for="">First Name:*</label>
            <input type="text" name="fname" id="">
            <?php 
            if(isset($_SESSION['error'])) {
                $error = $_SESSION['error'];
                echo $error ['errfname'];
            }
            ?>
        </div>

        <div>
            <label for="">Middle Name (Optional) </label>
            <input type="text" name="mname" id="">
        </div>

        <div>
            <label for="">Mobile Number:*</label>
            <input type="text" name="contact" id="">
            <?php 
            if(isset($_SESSION['error'])) {
                $error = $_SESSION['error'];
                echo $error ['errcontact'];
            }
            ?>
        </div>

        <div>
            <label for="">Username:</label>
            <input type="text" name="username" id="">
            <?php 
            if(isset($_SESSION['error'])) {
                $error = $_SESSION['error'];
                echo $error ['errusername'];
            }
            ?>
        </div>

        <input type="submit" value="Register">

    </form>
    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/popper.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
</body>
</html>