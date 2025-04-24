<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Student Feedback</title>
    <link rel="stylesheet" href="teachercart.css">
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
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
                <a class="nav-link active" href="sfeedback.php">Give Feedback</a>
              </li>              
            </ul>
          </div>
        </div>
      </nav>
      
   
      <table class="table table-striped">
  <thead>
    <tr>
      <th class="table-dark" scope="col"> Index</th>
      <th class="table-dark" scope="col"> Name</th>
      <th class="table-dark" scope="col"> Number</th>
      <th  class="table-dark" scope="col"> Email</th>
      <th  class="table-dark" scope="col"> Parents number</th>
      <th  class="table-dark" scope="col"> Gender</th>
      <th class="table-dark" scope="col"> Class</th>
      <th class="table-dark" scope="col"> Address</th>
      <th class="table-dark" scope="col"> City</th>
      <th class="table-dark" scope="col"> Action</th>
    </tr>
  </thead>



  <tbody class="table-group-divider">

  <?php
   $num=0;
include("connect.php");

$sql = "SELECT name,number,email,parents,gender,class,address,city FROM students";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    ?>
    <tr>
      <th  scope="row"><?php $num++; echo $num; ?></th>
      <td> <?php echo $row["name"]; ?> </td>
      <td> <?php echo $row["number"]; ?> </td>
      <td> <?php  echo $row["email"]; ?></td>
      <td> <?php echo $row["parents"]; ?> </td>
      <td> <?php echo $row["gender"]; ?> </td>
      <td> <?php echo $row["class"]; ?> </td>
      <td> <?php echo $row["address"]; ?> </td>
      <td> <?php echo $row["city"]; ?> </td>
      <td> <button class="btn btn-block btn-info" onclick="window.location.href = 'stufeedback.php?email=<?php echo $row['email']; ?>';">Give Feedback</button></td>
    </tr>

    <?php
     }
    } else {
      echo "0 results";
    }
    $conn->close();
    ?>
  </tbody>
</table>
    
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
  </body>
</html>