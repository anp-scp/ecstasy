<?php
// Initialize the session
session_start();
 
// If session variable is not set it will redirect to login page
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: login.php");
  exit;
}
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 25%;
  margin-bottom: 16px;
  padding: 20px;
}

@media (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}
</style>
</head>
<body>

<div class="page-header" style="text-align: center;">
        <h1>Hi,<b style="color: red;"><?php echo $_SESSION['username']; ?></b>. Welcome to our site.</h1>
    </div>

<div class="row">
  <div class="column">
    <div class="card">
      <img src="image/cross word.jpg" alt="new" style="width:100%">
      <div class="container">
        <h1>DEBATE</h1>
        <p><a href="debate.php"><button class="button">VIEW</button></a></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="image/music.jpg" alt="new" style="width:100%">
      <div class="container">
        <h1>UNPLUGGED</h1>
        <p><a href="unplugged.php"><button class="button">VIEW</button></a></p>
      </div>
    </div>
  </div>
  <div class="column">
    <div class="card">
      <img src="image/PEN-O-RAMA.jpg" alt="new" style="width:100%">
      <div class="container">
        <h1>PEN-O-RAMA</h1>
        <p><a href="penorama.php"><button class="button">VIEW</button></a></p>
      </div>
    </div>
  </div>
  <div class="column">
    <div class="card">
      <img src="image/PEN-O-RAMA.jpg" alt="new" style="width:100%">
      <div class="container">
        <h1>SCRIBE STRIKE</h1>
        <p><a href="SCRIBE-n-STRIKE.php"><button class="button">VIEW</button></a></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="image/Euphonic vibes.jpg" alt="new" style="width:100%">
      <div class="container">
        <h1>EUPHONIC</h1>
        <p><a href="euphonic.php"><button class="button">VIEW</button></a></p>
      </div>
    </div>
  </div>
  <div class="column">
    <div class="card">
      <img src="image/SYMPOSIUM.jpg" alt="new" style="width:100%">
      <div class="container">
        <h1>SYMPOSIUM</h1>
        <p><a href="symposium.php"><button class="button">VIEW</button></a></p>
      </div>
    </div>
  </div>
  <div class="column">
    <div class="card">
      <img src="image/Q-RIOSITY.jpg" alt="new" style="width:100%">
      <div class="container">
        <h1>Q-RIOSITY</h1>
        <p><a href="qriosity.php"><button class="button">VIEW</button></a></p>
      </div>
    </div>
  </div>
</div>

</body>
</html>