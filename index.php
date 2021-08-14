<?php
include('db_config.php');
if(isset($_POST['signupbtn'])){
  $email = $_POST['email'];
  $psw = $_POST['psw'];
  $psw_repeat = $_POST['psw_repeat'];

$check_email = mysqli_query($con, "SELECT email FROM register WHERE email='$email'");
if ($check_email-> num_rows) {
    echo "<script>alert('email already exist');window.location='index.php';</script>";
    exit;
}else{
  if($psw==$psw_repeat){
  $insert = "INSERT INTO `register`(`email`, `psw`) VALUES ('$email','$psw')";
  $query = mysqli_query($con, $insert);
  if($query){
    echo "<script>alert('data inserted')</script>";
  }else{
    echo " Something went wrong..";
      }
  }else{
    echo "<script>alert('password and confirm password does not match')</script>";
      }
  } 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Fontdiner+Swanky&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="login4.css">
    <title>Hostel.io</title>
</head>
<body>
    <div class="container1">
        <header>
            <img src="./images/LOGO.jpg" height="100px" width="100px" class="logo">
            <nav>
                <ol>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="hostel4.html">About</a></li>
                    <li><a href="contact1.html">Contact us</a></li>
                    <li> <a class="book" href="students.html">Book Now</a></li>
                </ol>
               
            </nav>
           
            
        </header>
        <div id="intro">
          <p>
              <b>Hostel Management system of Bakhtiyarpur College of Engineering.</b> <br>
              The home of peace and comfort.

          </p>
          
          <button onclick="document.getElementById('login4').style.display='block'" style="width:100px;" id="logbtn">Login</button>
        </div>

<div id="login4">
  
  <form class="content4" >
    <div class="imgcontainer">
      <span onclick="document.getElementById('login4').style.display='none'" class="cancel4" title="Close Login">&times;</span>
      <img src="./images/avater.jpeg" alt="Avatar" >
    </div>

    <div class="input4">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
        
      <button type="submit" aria-pressed="true" id="account4">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
        <span class="forgot">Forgot <a href="#">password?</a></span>
        <br><span class="sign">Are you a Member?<a href="#sign1" onclick="document.getElementById('login4').style.display='none'; document.getElementById('sign1').style.display='block'">Sign up</a></span>
      </label>
    </div>
      
  </form>
</div>

<div id="sign1">
  <span onclick="document.getElementById('sign1').style.display='none'" class="cancel4" title="Close sign up">&times;</span>
  <form action="index.php" method="post" class="content4">
    <div class="signup">
      <h1>Sign Up</h1>
      <p>Please fill in this form to create an account.</p>
      <hr>
      <label for="email"><b>Email</b></label>
      <input type="email" placeholder="Enter Email" name="email" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>

      <label for="psw-repeat"><b>Repeat Password</b></label>
      <input type="password" placeholder="Repeat Password" name="psw_repeat" required>
      
      <label>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
      </label>

      <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

      <div class="clearfix">
        <button type="button" onclick="document.getElementById('sign1').style.display='none'" class="cancelbtn">Cancel</button>
        <button type="submit" aria-pressed="true" name="signupbtn" class="signupbtn">Sign Up</button>
      </div>
    </div>
  </form>
</div>



<div id="about1">
  <ul>
    <li><img src="./images/27-royalhighschool.jpg" width=170px; heigh=110px;><p><br>400 <br>Rooms</p></li>
    <li><img src="./images/24-royalhighschool.jpg" width=170px; heigh=110px;><p><br> 5<br>Hangout<br>Zones</p></li>
    <li><img src="./images/_dsc0897-copy.jpg" width=170px; heigh=110px;><p><br>Diverse <br> Society</p></li>
  </ul>
</div>
 <div id="about2" class="overlay">
  
   <h3> Who We Are</h3>
      <p>
        We two are the students of Bakhtiyarpur College of Engineering.<br><br>
          <li><b>We made this website because of given reasons</b><br></li>
          
        <ol type="1">
          <li>To implement our theoretical knowledge into the practical.</li>
          <li>To make a cool project for Ideathon(Part of Girlscript Foundation).</li>
          <li>To learn new things and gain excellence.</li>
        </ol>

      </p>
 </div>
<footer>
  <div id="contacts"  style="text-align: center;">
    <img src="./images/LOGO.jpg" height="100px" width="100px">
    <h3 style="text-align: center;">Contact Us</h3>

       <p><img src="./images/facebook.jpeg" style="height: 30px;"> Facebook: @bcepatna<br><br></p>
       <p><img src="./images/twiter.jpeg"style="height: 30px;"> Twitter:  @hostel_bcepatna<br><br></p>    
       <p> <img src="./images/instagram.jpeg"style="height: 30px;"> instagram: @bcehostel</p>   
       
      
</div>
  <p style="text-align: center;" id="copy1">Copyright ©2021 Bakhtiyarpur College of Engineering Hostels, Inc. All rights reserved.Privacy & Legal Policies, created by Nitish and Meenu singh.</p>
</footer>
 
</div>
<script>
    var modal = document.getElementById('login4');
    
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
    </script>
    <script>
      var signing = document.getElementById('sign1');
      window.onclick = function(event) {
        if (event.target == signing) {
          modal.style.display = "none";
        }
      }
      </script>

    
</body>
</html>
