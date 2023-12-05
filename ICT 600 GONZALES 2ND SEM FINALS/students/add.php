<!DOCTYPE html>
<html lang="en">
<?php session_start(); ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GONZALES</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <link rel="stylesheet" href="formstyle1.css">
</head>
<body>
    
<a href="index.php">Back</a> <br>
<h3>Students Information</h5>
    <form action="add_exe.php" method="POST" class="lel">

        <div>
            <label for="">Student Number:*</label>
            <input type="text" name="studnum" id="">
            <?php 
            if(isset($_SESSION['error'])) {
                $error = $_SESSION['error'];
                echo $error ['errstudnum'];
            }
            ?>
        </div>

        <div>
            <label for="">Full Name:*</label>
            <input type="text" name="fullname" id="">
            <?php 
            if(isset($_SESSION['error'])) {
                $error = $_SESSION['error'];
                echo $error ['errfullname'];
            }
            ?>
        </div>

        <div>
            <label for="">Midterm Grade:*</label>
            <input type="text" name="midtermgrade" id="">
            <?php 
            if(isset($_SESSION['error'])) {
                $error = $_SESSION['error'];
                echo $error ['errmidtermgrade'];
            }
            ?>
        </div>

        <div>
            <label for="">Final Grade:*</label>
            <input type="text" name="finalgrade" id="">
            <?php 
            if(isset($_SESSION['error'])) {
                $error = $_SESSION['error'];
                echo $error ['errfinalgrade'];
            }
            ?>
        </div>

        <input type="submit" value="Register">

    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>