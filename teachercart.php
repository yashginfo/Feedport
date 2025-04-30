<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Teacher Details</title>
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
                <a class="nav-link active" href="teachercart.php">Teachers</a>
              </li>
               
              <li class="nav-item">
                <a class="nav-link" href="studentrow.php">Students</a>
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
      <br><br>




    <div class="card-container">
      <?php
      include("connect.php");

      $sql = "SELECT name,number,qualification,email,gender,image FROM teacher";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
      ?>
      
      <div class="card">
        <img src="<?php echo $row["image"]; ?>" alt="Card Image" class="card-img">
        <div class="card-details">
          <h2 class="card-title"><?php echo $row["name"]; ?></h2>
          <p class="card-info">Phone Number : <?php echo $row["number"]; ?></p>
          <p class="card-info">Qualification : <?php echo $row["qualification"]; ?></p>
          <p class="card-info">Email : <?php echo $row["email"]; ?></p>
          <p class="card-info">Gender : <?php echo $row["gender"]; ?></p>
          <td> <button class="btn btn-block btn-primary" onclick="window.location.href = 'teacherupdate.php?email=<?php echo $row['email']; ?>'; ">Update</button></td>
          <td> <button class="btn btn-block btn-danger" onclick="window.location.href = 'tdelete.php?email=<?php echo $row['email']; ?>'; " >Delete</button></td>
        </div>
      </div>

      <?php
        }
      } else {
        echo "0 results";
      }
      $conn->close();
      ?>
    </div>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
  </body>
</html>