<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Student Feedback</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
      <br>
      

<table class="table table-striped">
  <thead>
    <tr>
      <th class="table-dark" scope="col">index</th>
      <th  class="table-dark" scope="col">Teacher Name</th>
      <th  class="table-dark" scope="col">Email</th>
      <th  class="table-dark" scope="col">Given By</th>
      <th  class="table-dark" scope="col">Review</th>
      <th  class="table-dark" scope="col">Action</th>
    </tr>
  </thead>



<tbody>
  <?php
  $num = 0;
  include("connect.php");
  include 'vendor/autoload.php'; // Include SendGrid library

  $sql = "SELECT * FROM stufeedback";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      $num++;
      $modalId = "feedbackModal".$num;
      $emailModalId = "emailModal".$num;
  ?>
    <tr>
      <th scope="row"><?php echo $num; ?></th>
      <td><?php echo $row["name"]; ?></td>
      <td><?php echo $row["email"]; ?></td>
      <td><?php echo $row["givenby"]; ?></td>
      <td><?php echo substr($row["feedback"], 0, 50).'...'; ?></td>
      <td>
        <!-- View Feedback Button -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#<?php echo $modalId; ?>">
          View
        </button>
        
        <!-- Send Email Button -->
        <button type="button" class="btn btn-success ml-2" data-toggle="modal" data-target="#<?php echo $emailModalId; ?>">
          Send Email
        </button>
        
        <!-- Feedback Modal -->
        <div class="modal fade" id="<?php echo $modalId; ?>" tabindex="-1" role="dialog" aria-labelledby="<?php echo $modalId; ?>Title" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="<?php echo $modalId; ?>Title">Feedback Given By <?php echo $row["givenby"]; ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <h5>Teacher Name: <?php echo $row["name"]; ?></h5>
                <p><?php echo $row["feedback"]; ?></p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
        
        <!-- Email Modal -->
        <div class="modal fade" id="<?php echo $emailModalId; ?>" tabindex="-1" role="dialog" aria-labelledby="<?php echo $emailModalId; ?>Title" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <form method="post" action="send_email.php">
                <div class="modal-header">
                  <h5 class="modal-title" id="<?php echo $emailModalId; ?>Title">Send Email to <?php echo $row["name"]; ?></h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <input type="hidden" name="recipient_email" value="<?php echo $row['email']; ?>">
                  <input type="hidden" name="recipient_name" value="<?php echo $row['name']; ?>">
                  
                  <div class="form-group">
                    <label>Subject</label>
                    <input type="text" class="form-control" name="subject" required>
                  </div>
                  <div class="form-group">
                    <label>Message</label>
                    <textarea class="form-control" name="message" rows="5" required></textarea>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary" name="send_email">Send Email</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </td>
    </tr>
  <?php
    }
  } else {
    echo "<tr><td colspan='6' class='text-center'>0 results</td></tr>";
  }
  $conn->close();
  ?>
</tbody>
</table>
    
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>