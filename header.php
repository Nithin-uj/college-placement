<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NIE Training and Placement</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./header.css"/>
</head>
<body>   
    <div class="d-flex m-auto" style="display:flex; justify-content:center;">
       <!-- <img src="nie.jpg" class="m-3" alt="logo" width="400px"> -->
       <div class="d-block m-2">
       <img src="nie_logo.png" class="p-1 mb-0" alt="logo" width="80px">
       <div style="text-align: center;font-weight:bold;">ESTD : 1946</div>
       </div>
       <div class="d-block m-2">
        <span class="fs-2 sw-bold m-3 my-auto">The National Institute of Engineering</span>
        <div class="fs-6 sw-bold m-3 my-auto">Autonomous Institution, Affiliated to VTU. Recognized by AICTE., Accredited by NAAC, New Delhi</div>
        <div class="fs-4 sw-bold m-3 my-auto">Training and Placement Department</div>
       </div>
    </div>
	<nav class="navbar navbar-expand navbar-dark bg-dark">
	  <div class="container-fluid">	    
		  <ul class="navbar-nav me-auto order-0">
			<li class="nav-item">
			  <a class="nav-link active" aria-current="page" href="index.php">Home</a>
			</li>
			<!--<li class="nav-item">
			  <a class="nav-link" href="#">Student Login</a>
			</li> -->

            <li class="nav-item">
			 <!-- <a class="nav-link" href="#">Student</a> -->
             <div class="dropdown">
  <button class="btn btn-dark dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
    Student
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="register.php">Register</a></li>
    <li><a class="dropdown-item" href="checkstatus.php">Check Status</a></li>
    <li><a class="dropdown-item" href="studentlogin.php">Login</a></li>
  </ul>
</div>
			</li>

			<li class="nav-item">
			  <a class="nav-link" href="adminlogin.php">Admin Login</a> 
			</li>
            </ul>
		</div>
	</nav>
</body>
</html>