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

<?php 

 $email = $_GET['email'];
 //echo $email;

include("connect.php");

$sql = " SELECT * FROM teacher WHERE email = '$email'";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
           $name = $row['name'];
            $email = $row['email'];
            $number = $row['number'];
            $qualification = $row['qualification'];
            $gender = $row['gender'];
            $image = $row['image'];
       }
    }
?>


<form class="row g-3 py-4" action="uteacher.php" method="post">
        <div class="col-md-7">
          <label for="inputName" class="form-label">Teacher Name</label>
          <input type="text" class="form-control" value="<?php echo $name ?>" id="inputName" name="name"required="Student Name is required" autofocus="" placeholder="Enter Teacher Name">
        </div>
        <div class="col-md-4">
          <label for="inputNumber" class="form-label">Teacher Contact Number</label>
          <input type="number" class="form-control" id="inputNumber"  value="<?php echo $number ?>" name="number" required="Contact Number is required" autofocus="" placeholder="Enter Teacher Contact Number">  
          </div>
        <div class="col-md-9">
          <label for="inputEmail" class="form-label">Email Address </label>
          <input type="email" class="form-control" id="inputEmail"  value="<?php echo $email ?>" name="email"  required="Email Address is required" autofocus="" placeholder="Enter Email Address" readonly>
        </div>
        <div class="col-md-3">
          <label for="checkGender" class="form-label">Gender</label>
          <select class="form-select" id="checkGender"  value="<?php echo $gender ?>"  name="gender" required="Please select Gender" autofocus="" placeholder="Enter Gender">     
           <option value="Male">Male</option>
           <option value="Female">Female</option>
           <option value="Other">Other</option>
          </select>
        </div>
        <div class="col-md-6">
          <label for="inputQualification" class="form-label">Enter Qualification</label>
          <input type="text" class="form-control" id="inputQualification"  value="<?php echo $qualification ?>"  name="qualification" required="Field is required" autofocus="" placeholder="Enter Teacher Qualification">
        </div>
        <div class="mb-3">
          <label for="AddressForm" class="form-label">Enter Address</label>
          <textarea class="form-control" id="AddressForm" rows="4"  value="<?php echo $address ?>"  name="address" placeholder="Enter Teacher Address..." required="Address is required" autofocus=""></textarea>
        </div>
        <div class="add_picture">
          <h1 style="font-family: 'Times New Roman', Times, serif; color:rgb(0, 0, 0);">Upload Teacher Picture</h1>
          <div id="pick"><br>
          <label for="photo">Teacher Image URL</label>
            <input type="text" class="form-control" id="photo" value="<?php echo $image ?>" name="image" required="Field is required" autofocus="" placeholder="Enter URL">
          </div><br>
          <center><button class="btn btn-lg btn-primary btn-block my-2" style="background-color:rgb(8, 199, 148);" type="submit">Submit Data</button></center>
         </div>
</form>
    
</body>
</html>





