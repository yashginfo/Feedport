<?php
session_start();
$smail = $_SESSION["email"];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
    crossorigin="anonymous"/>
    <style>
      body{
       background-image: linear-gradient(to right, rgba(175, 222, 239, 0.9) , rgb(221, 201, 240))
    }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">JustSAY</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="main.html">Home</a>
              </li>

               
              <li class="nav-item">
                <a class="nav-link" href="sfeedback.php">Give Feedback</a>
              </li>
               
              <a class="nav-link" href="reviewteacher.php">My Reviews</a>
             

              <li class="nav-item">
                <a class="nav-link" href="logout.php">Logout</a>
              </li>

            </ul>
          </div>
        </div>
      </nav>

<br><br><br><br><br><br><br><br>

<h1 class="neon-text" style="text-align:center;font-weight:bold; font-size: 65px; font-family: 'Times New Roman', Times, serif;">User <?php echo $smail; ?></h1>
<br>
  <h1 class="neon-text" style="text-align:center;font-weight:bold; font-size: 85px; font-family: 'Times New Roman', Times, serif;">Welcome To Teacher Feedback Page</h1><br><br>
 
    
</body>
</html>