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
                <a class="nav-link " href="teachercart.php">Teachers</a>
              </li>
               
              <li class="nav-item">
                <a class="nav-link active" href="studentrow.php">Students</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="disptechr.php">View Teacher Feedback</a>
              </li>
               
              <li class="nav-item">
                <a class="nav-link" href="dispstur.php">View Student Feedback</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="logout.php">Logout</a>
              </li>

            </ul>
          </div>
        </div>
      </nav>
      

<table class="table table-striped">
  <thead>
    <tr>
      <th class="table-dark" scope="col">index</th>
      <th  class="table-dark" scope="col">Name</th>
      <th  class="table-dark" scope="col">Number</th>
      <th  class="table-dark" scope="col">email</th>
      <th  class="table-dark" scope="col">parents number</th>
      <th  class="table-dark" scope="col">gender</th>
      <th  class="table-dark" scope="col">class</th>
      <th  class="table-dark" scope="col">address</th>
      <th  class="table-dark" scope="col">city</th>
      <th  class="table-dark" scope="col">Action</th>
      <th  class="table-dark" scope="col">Action</th>
    </tr>
  </thead>



  <tbody>

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
      <th scope="row"><?php $num++; echo $num; ?></th>
      <td> <?php echo $row["name"]; ?> </td>
      <td> <?php echo $row["number"]; ?> </td>
      <td> <?php  echo $row["email"]; ?></td>
      <td> <?php echo $row["parents"]; ?> </td>
      <td> <?php echo $row["gender"]; ?> </td>
      <td> <?php echo $row["class"]; ?> </td>
      <td> <?php echo $row["address"]; ?> </td>
      <td> <?php echo $row["city"]; ?> </td>
      <td> <button class="btn btn-block btn-primary" onclick="window.location.href = 'studentupdate.php?email=<?php echo $row['email']; ?>'; ">Update</button></td>
      <td> <button class="btn btn-block btn-danger" onclick="window.location.href = 'sdelete.php?email=<?php echo $row['email']; ?>'; " >Delete</button></td>
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
    
</body>
</html>