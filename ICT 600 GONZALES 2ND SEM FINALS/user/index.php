<?php 
include_once '../process/user_select_exe.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GONZALES</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body class="p-3 text-primary-emphasis bg-primary-subtle border border-primary-subtle rounded-3">

<section class="header">
<div class="containter-fluid">
    <div class="row p-5">
        <div class="col-12-8 display-4 fw-bolder" style="margin-left:-50px">
        Immaculate Conception Polytechnic
    </div>
    </div>
</div>
</section>
<section class="menu">
<nav class="navbar navbar-expand-lg" style="background-color: #e3f2fd;">
  <div class="container-fluid">
    <a class="navbar-brand" href="../index.php">ICP</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link btn btn-outline-danger me-2" aria-current="page" href="../index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link btn btn-outline-success me-2" aria-current="page" href="index.php">Users</a>
        </li>
        <li class="nav-item">
          <a class="nav-link btn btn-outline-primary me-2" aria-current="page" href="../students/index.php">Students</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
</section>





<section id="content">

<div class="containter-fluid">
    <div class="containter p-5">
    <div>
    <h1>List of Users</h1>
    <a href="add.php">Add new users</a>
    </div>

    <div>
        <table class="table table-info table table-bordered border-primary">
        <thead>
            <tr>
                <th>Last Name</th>
                <th>First Name</th>
                <th>Username</th>
                <th>Contact</th>
                <th>Option</th>
            </tr>
        </thead>

        <tbody>
            <?php 
            if (mysqli_num_rows($result) > 0){
                while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <tr>
                <td>
                <?php echo $row["lname"];?>
                </td>
                <td>
                <?php echo $row["fname"];?>
                </td>
                <td>
                <?php echo $row["username"];?>
                </td>
                <td>
                <?php echo $row["contact"];?>
                </td>
                <td>
                Edit | Delete 
                </td>
            </tr>
            <?php 
                }
            } else {
                 echo 'NO DATA TO SHOW';
            }
            ?>
        </tbody>
        </table>
    </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>