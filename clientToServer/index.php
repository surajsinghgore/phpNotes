<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Send</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <!-- favicon -->
  <link rel="shortcut icon" href="favicon.png" type="image/x-icon">

  <!-- css -->
  <style>
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
      -webkit-appearance: none;
      margin: 0;
    }

    /* Firefox */
    input[type=number] {
      -moz-appearance: textfield;
    }
  </style>
</head>

<body>
  <div class="container mt-4">

    <form role="form" method="post" action="send.php">
      <!-- Roll No -->
      <div class="form-group row">
        <label for="inputEmail" class="col-sm-2 col-form-label">Roll No</label>
        <div class="col-sm-10">
          <input type="Number" class="form-control" id="Number" name="rollno" placeholder="Roll No" required>
        </div>
      </div>

      <!-- Email ID -->

      <div class="form-group row">
        <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
          <input type="email" class="form-control" id="inputEmail" name="email" placeholder="Email" required>
        </div>
      </div>
      <!-- student Name -->
      <div class="form-group row">
        <label for="inputUser" class="col-sm-2 col-form-label">Student Name</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="Student Name" name="name" placeholder="Student Name" required>
        </div>
      </div>

      <!-- Age -->

      <div class="form-group row">
        <label for="inputEmail" class="col-sm-2 col-form-label">Age</label>
        <div class="col-sm-10">
          <input type="Number" class="form-control" id="Number" name="age" placeholder="Age" required>
        </div>
      </div>
      <!-- class -->
      <div class="form-group row">
        <label for="inputUser" class="col-sm-2 col-form-label">Class</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="student Class" name="class" placeholder="Class Of Student" required>
        </div>
      </div>

      <!-- mobile -->

      <div class="form-group row">
        <label for="inputEmail" class="col-sm-2 col-form-label">Mobile</label>
        <div class="col-sm-10">
          <input type="Number" class="form-control" id="Number" name="Mobile" placeholder="Mobile" required>
        </div>
      </div>


      <!-- address -->
      <div class="form-group row">
        <label for="inputUser" class="col-sm-2 col-form-label">Address</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="address of student" name="address" placeholder="Address Of Student" required>
        </div>
      </div>



      <div class="form-group row">
        <div class="offset-sm-2 col-sm-10 mt-2">
          <input type="submit" value="Submit" name="submit" class="btn btn-primary" />
        </div>
      </div>
    </form>
  </div>


  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>