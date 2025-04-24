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
</head>

<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">TES</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="admin.php">Home</a>
              </li>

              
              <li class="nav-item">
                <a class="nav-link" href="teachercart.php">Teachers</a>
              </li>
               
              <li class="nav-item">
                <a class="nav-link" href="studentrow.php">Students</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="tfeedback.php">Teacher Feedback</a>
              </li>
               
              <li class="nav-item">
                <a class="nav-link" href="sfeedback.php">Student Feedback</a>
              </li>

            </ul>
          </div>
        </div>
      </nav>
      <br><br>

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">index</th>
      <th scope="col">Name</th>
      <th scope="col">email</th>
    </tr>
  </thead>



  <tbody>

  <?php
   $num=0;
include("connect.php");

$sql = "SELECT name, email FROM user";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    ?>
    <tr>
      <th scope="row"><?php $num++; echo $num; ?></th>
      <td> <?php echo $row["name"]; ?> </td>
      <td> <?php  echo $row["email"]; ?></td>
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