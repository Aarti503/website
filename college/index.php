<?php
session_start();

?>
<html>
	<head>
<title>Ambedkar Institute of Technology</title>
<?php
include 'link.php';
?>
</head>
<body>
	<?php
		include 'header.php';

	?>

<div class="container">
	<h2>About Us</h2>
	<hr style="width: 15%; margin-left:0px; border-bottom: 2px solid black; ">
<div id="myslider" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#myslider" data-slide-to="0" class="active"></li>
    <li data-target="#myslider" data-slide-to="1"></li>
    <li data-target="#myslider" data-slide-to="2"></li>
     <li data-target="#myslider" data-slide-to="3"></li>
    <li data-target="#myslider" data-slide-to="4"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="1.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        
      </div>
    </div>
    <div class="carousel-item">
      <img src="2.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
       
      </div>
    </div>
    <div class="carousel-item">
      <img src="3.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        
      </div>
    </div>
    <div class="carousel-item">
      <img src="4.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
       
      </div>
    </div>
    <div class="carousel-item">
      <img src="5.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#myslider" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#myslider" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>

<!--------------------history--------------->
<section id="history">
<div class="container">
	<div>
		<p>
			<h2>Histroy of Ambedkar</h2>
	<hr style="width: 30%; margin-left:0px; border-bottom: 2px solid black; ">

Ambedkar Institute Of Technology was Established in 1986 by the Department of Training & Technical Education (D.T.T.E.), Govt. of N.C.T. of Delhi. Initially it shared its campus with the Pusa Institute Of Technology and on 6th Dec. 1996, it was shifted at its present location in Shakarpur, Delhi. Till 2005 Mechanical Engineering was also a part of the courses studied at Ambedkar Institute Of Technology. At present, the different departments are Computer Engg., Electronics Engg., I & C Engg. and I.T.E.S.M.and new initiatives of IP university BCA & B.Voc.(SD) and B.voc.(MC).</p>
	</div>
	</div>
</section>
	<!------------campus area----------------------------------->
	<section id="campus">
<div class="container">
	<div>
		<p>
			<h2>Campus Area</h2>
	<hr style="width: 20%; margin-left:0px; border-bottom: 2px solid black; ">
					3.14 Hect. Plot Area<br>
					Building Area of 9822 sq. mts<br>
					Building Consists of 6 Blocks - A, B, C, D, E & F.<br>
					College Building as per A.I.C.T.E. norms with appropriate Classrooms,<br>
					Canteen & 2 inbuilt Lecture Theatres( LT-1 & LT-2)<br>
					Basket Ball and Volley Ball Playground alongwith a Badminton Court.</p><br>
</div>
	</div>

</section>

	<!-----------------------cantact us------------------------>
<?php

include 'connection.php';

if(isset($_POST['submit'])){

$name = mysqli_real_escape_string( $con,$_POST['name']);
$email = mysqli_real_escape_string( $con,$_POST['email']);
$password = mysqli_real_escape_string( $con,$_POST['password']);
$message = mysqli_real_escape_string( $con,$_POST['message']);
 $pass = password_hash($password ,PASSWORD_BCRYPT);
  $emailquery = "select * from contact where email='$email' ";
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
      $insertquery = "insert into contact(name, email, password,message)
          values ('$name','$email','$pass','$message')";
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

	<section id="contact">
	<div class="container-fluid">
		<div class="row">
	<div class="col-lg-4 col-md-12">
		<p>
			<h2>Contact Us</h2>
	<hr style="width: 50%; margin-left:0px; border-bottom: 2px solid black; ">
				You may contact us at the following:<br>
			Ambedkar Institute of Technology,<br>
			ISO 9001:2015 Certified Institute<br>
			Shakarpur[Extn.],<br>
			Delhi-110092,<br>
				INDIA<br>
			Website:-www.ambp.in,Email: ap.delhi@nic.in<br>
			Tele:-011 22023594,22460311,22428339<br>
				FAX No:- -011 22023594<br>
</p>
</div>
<!--------------------------------contact us page----------------------->
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
  
    <div class="form-group col-lgcol-md-12">
    <label for="comment">Message</label>
    <input type="text" class="form-control" id="inputZip" placeholder="Enter your messeage.
      Thank You." name="message" style="width: 600px  ! important; height: 150px !important;  text-align: top ! important;">
    </div>
  <div class=" form-row form-group col-lg col-md-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        I agree to the terms and conditions .
      </label>
    </div>
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Sign in</button>
</form>
</div>
</div></div>
</section>

<?php
include 'footer.php';

?>

<br>
	</body>
</html>