<?php
session_start();
?>
<html>
<head>
	<title>Registration Page</title>
  <link rel="stylesheet" type="text/css" href="style.css">
	<?php 
	include 'link.php';
	?>
	</head>
	<body>
<?php 
	include 'header.php';
	?>
	<?php

include 'connection.php';

if(isset($_POST['submit'])){

$name = mysqli_real_escape_string( $con,$_POST['name']);
$email = mysqli_real_escape_string( $con,$_POST['email']);
$password = mysqli_real_escape_string( $con,$_POST['password']);
$department = mysqli_real_escape_string( $con,$_POST['department']);
$sem = mysqli_real_escape_string( $con,$_POST['sem']);
$event = mysqli_real_escape_string( $con,$_POST['event']);
$message = mysqli_real_escape_string( $con,$_POST['message']);
 $pass = password_hash($password ,PASSWORD_BCRYPT);
  $emailquery = "select * from registration where email='$email' ";
  $query = mysqli_query($con,$emailquery);

  $emailcount = mysqli_num_rows($query);

  if($emailcount>0){
      ?>
        <script >
        alert(' email Already Exists');
        </script>
<?php

  }

  else{
      $insertquery = "insert into registration(name, email, password,department, sem, event,message)
          values ('$name','$email','$pass','$department','$sem','$event','$message')";
          $res = mysqli_query($con,$insertquery);
          if($res){
          ?>
          <script >
            alert('inserted succesfully');
            location.replace('index.php');
          </script>
                  <?php
              }

            else{
                ?>
                <script >
                  alert(' not inserted succesfully');
                  </script>
                  <?php
                }
              }
                 
            }
              
            


?>
<div class="col-lg col-md-12">
<form accept="" method="POST">
	<div class="form-row">
    <div class="form-group  col-lg col-md-12">
    <label for="inputEmail4">Name</label>
    <input type="text" class="form-control" id="inputEmail4" name="name" placeholder="Enter you Full Name">
    </div></div>
    <div class="form-row">
    <div class=" form-group  col-lg col-md-12">
    <label for="inputPassword4">Email</label>
    <input type="email" class="form-control" id="inputPassword4" name="email" placeholder="Enter your email">
    </div></div>
    <div class="form-row">
  <div class="form-group col-lg col-md-12">
    <label for="inputAddress">Password</label>
    <input type="password" class="form-control" id="inputAddress" placeholder="Enter Your Password" name="password">
  </div></div>
  <div class="form-row">
  <div class="form-group col-lg col-md-12">
    <label for="department">Department</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Enter your Department " name="department">
  </div></div>
  <div class="form-row">
    <div class="form-group col-lg col-md-12">
    <label for="inputCity">Semester(Year)</label>
    <input type="text" class="form-control" id="inputCity"  placeholder="Enter your Semester(year) " name="sem" >
    </div></div>
    <div class="form-row">
    <div class=" form-row form-group col-lg col-md-12">
    <label for="inputState">Event</label>
    <select id="inputState" class="form-control" placeholder ="Type the event in which you want to participate" name="event">
        <option selected>Choose...</option>
        <option>Utsav</option>
         <option>Annual Function</option>
        <option>Debate Competition(Hindi</option>
         <option>Debate Competition(English)</option>
        <option>Poster Making</option>
         <option>Singing</option>
        <option>Dancing</option>
         <option>Poem Recitation</option>
        <option> Program Management</option>
      </select>
    </div></div>
    <div class="form-row">
    <div class="form-group col-lg col-md-12">
    <label for="comment">Message</label>
    <input type="text" class="form-control" id="inputZip" placeholder="Tell me if you won't find your Event." name="message" style="width: 1000px; height: 200px;">
    </div></div>
  <div class=" form-group col-lg col-md-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        I agree to the terms and conditions .
      </label>
    </div>
  </div>
  <button type="submit"  name="submit" class="btn btn-primary">Sign in</button>
</form>
</div>

	<?php 
	include 'footer.php';
	?>

	</body>
</html>