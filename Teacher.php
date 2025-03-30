<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Add Student</title>

    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
    crossorigin="anonymous"
  />
  <style>
    body{
    
      background-image: url('images/full.jpg');
      background-size: cover;
      height: 134vh;
      display: flex;
            flex-direction: column;
    }

    .container{
      position: absolute;
            top: 75px; 
            left: 2%;
      height: 30pc;
      width: 70pc;
      border-radius: 25px;
      color: rgb(255, 128, 0);
      font-family: 'Times New Roman', Times, serif;
      font-weight: bolder;
            max-width: 90%;
            margin: 0 auto;
            text-align: left;
  
          position: absolute;
          left: 2%;
          top: 15%;
          border-radius: 10px;

        }

        @media (max-width: 576px) {
            .container {
                bottom: 5%;
        }
      }

      @media(min-width:550px) {
        .stud{
          font-size: 54px;
          color: aliceblue;
          position: absolute; 
          left: 13%;
        
        }
      }
      @media(max-width:550px) {
        .stud{
          font-size: 40px;
          color: aliceblue;
          position: absolute;
          top: 3%;
           left: 5%;
        }
      }
      .add_picture{
width: 1200px;
height: 200px;
backdrop-filter: blur(2px);
justify-content: space-evenly;
}


  </style>
  </head>
  <body>
   <p class="stud text-center" style="font-family: 'Times New Roman', Times, serif; color: rgb(254, 119, 9); "><b>Fill Details To Add Teacher&#128195</b></p>
    <div class="container">
      <form class="row g-3 py-4" action="teacherdata.php" method="post">
        <div class="col-md-7">
          <label for="inputName" class="form-label">Teacher Name</label>
          <input type="text" class="form-control" id="inputName" name="name" required="Student Name is required" autofocus="" placeholder="Enter Teacher Name">
        </div>
        <div class="col-md-4">
          <label for="inputNumber" class="form-label">Teacher Contact Number</label>
          <input type="number" class="form-control" id="inputNumber" name="number" required="Contact Number is required" autofocus="" placeholder="Enter Teacher Contact Number">  
          </div>
        <div class="col-md-9">
          <label for="inputEmail" class="form-label">Email Address </label>
          <input type="email" class="form-control" id="inputEmail" name="email" required="Email Address is required" autofocus="" placeholder="Enter Email Address">
        </div>
        <div class="col-md-3">
          <label for="checkGender" class="form-label">Gender</label>
          <select class="form-select" id="checkGender" name="gender" required="Please select Gender" autofocus="" placeholder="Enter Gender">     
           <option value="Male">Male</option>
           <option value="Female">Female</option>
           <option value="Other">Other</option>
          </select>
        </div>
        <div class="col-md-6">
          <label for="inputQualification" class="form-label">Enter Qualification</label>
          <input type="text" class="form-control" id="inputQualification" name="qualification" required="Field is required" autofocus="" placeholder="Enter Teacher Qualification">
        </div>
        <div class="mb-3">
          <label for="AddressForm" class="form-label">Enter Address</label>
          <textarea class="form-control" id="AddressForm" name="address" rows="4" placeholder="Enter Teacher Address..." required="Address is required" autofocus=""></textarea>
        </div>
        <div class="add_picture">
          <h1 style="font-family: 'Times New Roman', Times, serif; color:rgb(255, 87, 2);">Upload Teacher Picture</h1>
          <div id="pick"><br>
            <label for="photo">Select Image</label>
            <input type="file" class="form-control" id="inputGroupFile04" name="image" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
          </div><br>
          <center><button class="btn btn-lg btn-primary btn-block my-2" style="background-color:rgb(8, 199, 148);" type="submit">Submit Data</button></center>
         </div>


    </div>

  </body>
</html>
