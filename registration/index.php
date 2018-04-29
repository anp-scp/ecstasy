<?php
if (isset($_POST['submitted'])) {
	include('connect-mysql.php');
	$name=$_POST['name'];
	$institute=$_POST['institute'];
	$department=$_POST['department'];
	$semester=$_POST['semester'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$event=$_POST['event'];

	$sqlinsert=$conn->prepare("INSERT INTO literary (name, institute, department, semester, email, phone, event ) VALUES(?,?,?,?,?,?,?)");
	$sqlinsert->bind_param("sssssss", $name, $institute, $department, $semester, $email, $phone, $event);
	$sqlinsert->execute();
	echo"<script>alert('You are successfully registered')</script>";
	header("index.php");
}
?>
<!--FOR NON CITANS-->
<?php
if (isset($_POST['submit'])) {
  include('connect-mysql.php');
  $name=$_POST['name'];
  $institute=$_POST['institute'];
  $email=$_POST['email'];
  $phone=$_POST['phone'];
  $event=$_POST['event'];
  $abc = "not applicable";
  $sqlinsert=$conn->prepare("INSERT INTO literary (name, institute, department, semester, email, phone, event ) VALUES(?,?,?,?,?,?,?)");
	$sqlinsert->bind_param("sssssss", $name, $institute,$abc,$abc,$email, $phone, $event);
	$sqlinsert->execute();
  echo"<script>alert('You are successfully registered')</script>";
  header("index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Ecstasy 2018 | Registration form</title>
</head>
<style>
* {
    box-sizing: border-box;
}
h1{
	
}

input[type=text], select, textarea{
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    resize: vertical;
}
input[type=email], select, textarea{
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    resize: vertical;
}

label {
    padding: 12px 12px 12px 0;
    display: inline-block;
}

input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    float: right;
}

input[type=submit]:hover {
    background-color:black;
}

.container {
    border-radius: 10px;
    background-color: #f2f2f2;
    padding: 30px;
    padding-top: 50px;
    border: 1px solid black;
    width: 50%;
    float: left;
    margin:0 auto;
    position: relative;
}

.col-25 {
    float: left;
    width: 25%;
    margin-top: 6px;
}

.col-75 {
    float: left;
    width: 75%;
    margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media (max-width: 600px) {
  .container{
    padding: 20px;
  }
    .col-25, .col-75, input[type=submit] {
        width: 100%;
        margin-top: 0;
    }
}
@media (max-width: 780px) {
  .container{
    padding: 20px;
    width: 100%;
    float: none;
  }
    .col-25, .col-75, input[type=submit] {
        width: 100%;
        margin-top: 0;
    }
}
</style>
<body>
	<h1 style="text-align: center;padding-top: 50px;">ONLINE REGISTRATION PORTAL</h1>
  <h2 style="text-align: center;">ECSTASY 2018</h2>
  <h5 style="text-align: center; color: red;">NOTE: For Q-riosity participants can register individually. Groups can be made on the spot.</h5>
	<div class="container">
    <h2 style="text-align: center;">FOR CITIANS</h2>
	<form method="post" action="index.php">
	<input type="hidden" name="submitted" value="true"/>
	<div class="row">
      <div class="col-25">
        <label for="fname">NAME</label>
      </div>
      <div class="col-75">
        <input type="text" name="name" required="required" placeholder="Your name..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="country">INSTITUTE</label>
      </div>
      <div class="col-75">
        <select name="institute" required="required">
        <option value=""></option>
          <option value="Central Institute of Technology">CENTRAL INSTITUTE OF TECHNOLOGY</option>
        </select>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="country">DEPARTMENT</label>
      </div>
      <div class="col-75">
        <select name="department" required="required">
        <option value=""></option>
          <option value="CSE">Computer Science & Engineering</option>
          <option value="ECE">Electronics & Communication Engineering</option>
          <option value="CE">Civil Engineering</option>
          <option value="IE">Instrumentation Engineering</option>
          <option value="FET">Food Engineering & Technology</option>
          <option value="IT">Information Technology</option>
          <option value="BDAS">Multimedia Communication and Design</option>
        </select>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="country">SEMESTER</label>
      </div>
      <div class="col-75">
        <select name="semester" required="required">
        <option value=""></option>
          <option value="2nd Semester">2nd Semester </option>
          <option value="4th Semester">4th Semester</option>
          <option value="6th Semester">6th Semester</option>
          <option value="8th Semester">8th Semester</option>
        </select>
      </div>
    </div>
    <div class="row">
		<div class="col-25">
        <label for="fname">EMAIL ID</label>
      </div>
      <div class="col-75">
        <input type="email" name="email" required="required" placeholder="Your email id..">
      </div>
    </div>
    <div class="row">
		<div class="col-25">
        <label for="fname">PHONE NO</label>
      </div>
      <div class="col-75">
        <input type="text" name="phone" required="required" placeholder="Your phone no..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="country">PARTICIPATING EVENT</label>
      </div>
      <div class="col-75">
        <select name="event" required="required">
        <option value=""></option>
          <option value="SCRIBE-n-STRIKE">SCRIBE-n-STRIKE</option>
          <option value="EUPHONIC VIBES">EUPHONIC VIBES</option>
          <option value="VOICE OF CHANGE">VOICE OF CHANGE</option>
          <option value="PEN-O-RAMA">PEN-O-RAMA</option>
          <option value="SYMPOSIUM">SYMPOSIUM</option>
       	  <option value="Q-RIOSITY">Q-RIOSITY</option>
        </select>
      </div>
    </div>
    <div class="row" style="padding-top: 30px;">	
		<input type="submit" name="SUBMIT">
	</div>
	</form>
	</div>
  <div class="container">
    <h2 style="text-align: center; padding-top: 25px;">FOR NON CITIANS</h2>
  <form method="post" action="index.php">
  <input type="hidden" name="submit" value="true"/>
  <div class="row">
      <div class="col-25">
        <label for="fname">NAME</label>
      </div>
      <div class="col-75">
        <input type="text" name="name" required="required" placeholder="Your name..">
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-25">
        <label for="fname">INSTITUTE</label>
      </div>
      <div class="col-75">
        <input type="text" name="institute" required="required" placeholder="Your Institute name..">
      </div>
    </div>
    <br>
    <div class="row">
    <div class="col-25">
        <label for="fname">EMAIL ID</label>
      </div>
      <div class="col-75">
        <input type="email" name="email" required="required" placeholder="Your email id..">
      </div>
    </div>
    <br>
    <div class="row">
    <div class="col-25">
        <label for="fname">PHONE NO</label>
      </div>
      <div class="col-75">
        <input type="text" name="phone" required="required" placeholder="Your phone no..">
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-25">
        <label for="country">PARTICIPATING EVENT</label>
      </div>
      <div class="col-75">
        <select name="event" required="required">
        <option value=""></option>
          <option value="SCRIBE-n-STRIKE">SCRIBE-n-STRIKE</option>
          <option value="EUPHONIC VIBES">EUPHONIC VIBES</option>
          <option value="VOICE OF CHANGE">VOICE OF CHANGE</option>
          <option value="PEN-O-RAMA">PEN-O-RAMA</option>
          <option value="SYMPOSIUM">SYMPOSIUM</option>
	  <option value="Q-RIOSITY">Q-RIOSITY</option>
        </select>
      </div>
    </div>
    <div class="row" style="padding-top: 30px;">  
    <input type="submit" name="SUBMIT">
  </div>
  </form>
  </div>
	</body>
</html>
