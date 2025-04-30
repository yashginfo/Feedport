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
  <?php include("teachercount.php"); ?>
  <?php include("Studentcount.php"); ?>
  <?php include("logincount.php"); ?>

</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="admin.php">JustSAY</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="main.html">Home</a>
              </li>

              
              <li class="nav-item">
                <a class="nav-link" href="teachercart.php">Teachers</a>
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
      <br>
      <div class="card">
        <div class="card-header">
          Teachers Records
        </div>
         <div class="card-body">
         <p class="card-text">We have total Number of Teachers is :</p>
          <h1 class="card-title"> <?php echo "$tcount"; ?> </h1>
          <br>
          <a href="teacher.html" class="btn btn-primary">Add Teacher</a>
          <a href="teachercart.php" class="btn btn-danger">Show Teachers</a>
        </div>
      </div>
      <br>
      <div class="card">
        <div class="card-header">
           Students Records
        </div>
         <div class="card-body">
         <p class="card-text">We have total Number of Students is :</p>
          <h1 class="card-title"> <?php echo "$rcount"; ?> </h1>
          <br>
          <a href="Student.html" class="btn btn-primary">Add Students</a>
          <a href="studentrow.php" class="btn btn-danger">Show Students</a>
        </div></div>
        <br>
      <div class="card">
        <div class="card-header">
        Login Records
        </div>
         <div class="card-body">
         <p class="card-text">We have total Number of Log In is :</p>
          <h1 class="card-title"> <?php echo "$lcount"; ?> </h1>
          <br>
          <a href="usershow.php" class="btn btn-success">Show User Login</a>
        </div>
      </div>    
      <br><br>
     
</body>
</html>