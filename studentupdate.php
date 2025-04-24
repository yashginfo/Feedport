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

$sql = " SELECT * FROM students WHERE email = '$email'";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
           $name = $row['name'];
            $email = $row['email'];
            $number = $row['number'];
            $parents = $row['parents'];
            $gender = $row['gender'];
            $class = $row['class'];
            $city = $row['city'];
            $state = $row['state'];
            $address = $row['address'];
            $image = $row['image'];
       }
    }
?>

<form class="row g-3 py-4"  action="ustudent.php" method="post">
        <div class="col-md-7">
          <label for="inputName" class="form-label">Student Name</label>
          <input type="text" class="form-control" id="inputName" value="<?php echo $name ?>" name="name" required="Student Name is required" autofocus="" placeholder="Enter Student Name">
        </div>
        <div class="col-md-4">
          <label for="inputNumber" class="form-label">Contact Number</label>
          <input type="number" class="form-control" id="inputNumber" value="<?php echo $number ?>" name="number" required="Contact Number is required" autofocus="" placeholder="Enter Student Contact Number">  
          </div>
        <div class="col-md-8">
          <label for="inputEmail" class="form-label">Email Address </label>
          <input type="email" class="form-control" id="inputEmail" value="<?php echo $email ?>" name="email" required="Email Address is required" autofocus="" placeholder="Student Email Address" readonly>
          
        </div>
        <div class="col-md-4">
          <label for="inputParNum" class="form-label">Parents Contact Number</label>
          <input type="number" class="form-control" id="inputParNum" value="<?php echo $parents ?>" name="parents" required="Parents Contact Number is required" autofocus="" placeholder="Student Parents Number">
        </div>
        <div class="col-md-3">
          <label for="ClassYear" class="form-label">BCA (Year)</label>
          <select class="form-select" id="ClassYear" value="<?php echo $class ?>" name="class" required="Please select Year" autofocus="" placeholder="Choose Class">
           <option value="1st Year">1st Year</option>
           <option value="2nd Year">2nd Year</option>
           <option value="3rd Year">3rd Year</option>
          </select>
        </div>
        <div class="col-md-3">
          <label for="checkGender" class="form-label">Gender</label>
          <select class="form-select" id="checkGender" value="<?php echo $gender ?>" name="gender" required="Please select Gender" autofocus="" placeholder="Select Gender">
           <option value="Male">Male</option>
           <option value="Female">Female</option>
           <option value="Other">Other</option>
          </select>
        </div>
        <div class="col-md-3">
          <label for="checkCity" class="form-label">City</label>
          <input type="text" class="form-control" id="checkCity" value="<?php echo $city ?>" name="city" required="Field is required" autofocus="" placeholder="Ente City">
        </div>
        <div class="col-md-3">
          <label for="checkState" class="form-label">State</label>
          <input type="text" class="form-control" id="checkState" value="<?php echo $state ?>" name="state" required="Field is required" autofocus="" placeholder="Ente State">
        </div>
        <div class="mb-3">
          <label for="AddressForm" class="form-label">Student Address</label>
          <textarea class="form-control" id="AddressForm" value="<?php echo $address ?>" name="address" rows="6" placeholder="Enter Student Address..." required="Address is required" autofocus=""></textarea>
        </div>
        <div class="add_picture">
          <h1 style="font-family: 'Times New Roman', Times, serif; color:rgb(255, 147, 6);">Upload Student Picture</h1>
          <div id="pick"><br>
            <label for="photo">Student Image URL</label>
            <input type="text" class="form-control" id="photo" value="<?php echo $image ?>" name="image" required="Field is required" autofocus="" placeholder="Enter URL">
          </div><br>
         <center><button class="btn btn-lg btn-primary btn-block my-2" style="background-color:rgb(135, 8, 185);" type="submit">Submit Data</button></center>
         </div>
      </form>
    
</body>
</html>





