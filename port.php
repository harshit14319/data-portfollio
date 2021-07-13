<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <title>Document</title>
</head>

<style>
  #ham{
    border: 2px solid red;
    border-radius: 25px;
    height: 69px;
    width: 89px;
    background-color: rgb(245, 239, 239);
  }
  #ham p{
    margin-left: 1px;
    margin-top: -51px;
  }
  body {
  height: 3450px;
  background: linear-gradient(141deg, #0fb8ad 0%, #1fc8db 51%, #2cb5e8 75%);
}
.type{
  display: none;
}
  html{
    scroll-behavior: smooth;
  }
  .pic img {
    height: 127px;
    width: 124px;
    border-radius: 76px;
    margin-left: 83px;
    margin-top: 20px;
    border: 10px solid rgb(148, 143, 143);
  }
  .navbar ul li a{
    color: rgb(219, 211, 211);
    text-decoration: none;
  }

  .login {
    background-color: black;
    position: fixed;
  }

  .pic h2 {
    margin-left: 81px;
    margin-top: 9px;
    color: white;
  }

  .login {
    border: 2px;
    height: 1090px;
    width: 314px;

  }

  .fa-facebook {
    background: rgb(78, 75, 75);
    color: white;
    border-radius: 50px;
    width: 39px;
    height: 27px;
    text-align: center;
    padding-top: 9px;
  }

  .fa-youtube {
    background: rgb(78, 75, 75);
    color: white;
    border-radius: 50px;
    width: 39px;
    height: 27px;
    text-align: center;
    padding-top: 9px;
  }

  .fa-instagram {
    background: rgb(78, 75, 75);
    color: white;
    border-radius: 50px;
    width: 39px;
    height: 27px;
    text-align: center;
    padding-top: 9px;
  }

  .fa-linkedin {
    background: rgb(78, 75, 75);
    color: white;
    border-radius: 50px;
    width: 39px;
    height: 27px;
    text-align: center;
    padding-top: 9px;
  }

  .fa-facebook a {
    text-decoration: none;
  }

  .logo {
    margin-left: 69px;
  }

  .navbar ul li {
    padding: 10px;
  }

  .navbar ul li:hover {
    color: #09f71d;
    background-color: #f44336;
    width: 180px;
    border-radius: 10px;
  }

  .navbar ul :hover {
    color: goldenrod;
  }

  .navbar ul {
    list-style: none;
  }

  .para {
    color: white;
  }

  .para p {
    margin-top: 350px;
    margin-left: 30px;
  }

  /* for parallax image */
  .parallax {
    border: 2px;
    height: 900px;
    margin-left: 321px;
  }

  .parallax {
    /* The image used */
    background-image: url("my.jpg");

    /* Set a specific height */
    min-height: 300px;

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    /* background-position: center; */
    background-repeat: no-repeat;
    background-size: 100%;
  }

  .about {
    border: 2px;
    margin-left: 321px;
    height: 400px;
  }

  .about h2 {
    text-decoration: underline;
    text-decoration-color: blue;
    padding-top: 20px;
    margin-left: 10px;
  }

  .new h2 {
    text-decoration: underline;
    text-decoration-color: blue;
    padding-top: 20px;
    margin-left: 10px;
  }

  .Resume h2 {
    text-decoration: underline;
    text-decoration-color: blue;
    padding-top: 20px;
    margin-left: 10px;
  }

  .content {
    display: flex;
    flex-direction: row;
  }

  /* .nav ul{
    color: blue;
    height: 100px;
width: 100px;} */
  .nav {
    border: 2px;
    height: 113px;
    /* width250pxpx; */
  }

  .nav ul {
    list-style: none;
  }

  .nav ul li {
    padding-right: 23px;
  }

  /* for  skills */

  .new {

    height: 500px;
    width: 1195px;
    margin-left: 321px;
  }

  * {
    box-sizing: border-box
  }

  .container {
    width: 100%;
    background-color: #ddd;
  }

  .skills {
    text-align: right;
    padding-top: 0px;
    padding-bottom: -9px;
    color: white;
  }

  .html {
    width: 90%;
    background-color: #04AA6D;
  }

  .css {
    width: 80%;
    background-color: #2196F3;
  }

  .js {
    width: 65%;
    background-color: #f44336;
  }

  .php {
    width: 60%;
    background-color: #808080;
  }

  .C {
    width: 20%;
    background-color: #09f71d;
  }

  .Resume {
    border: 2px so;
    height: 1500px;
    width: 1195px;
    margin-left: 321px;
  }

  .box1 {
    border: 2px so;
    height: 630px;
    width: 550px;
    margin-left: 20px;
  }

  .box2 {
    border: 2px so;
    height: 630px;
    width: 600px;
    margin-left: 12px;
  }

  .nav1 {
    margin-left: -23px;
  }

  .pbox {
    border: 2px solid rgb(245, 239, 239);
    background-color: rgb(220 217 217);
    height: 49px;
    width: 118px;
    border-radius: 10px;

  }

  .pbox1 {
    border: 2px solid rgb(245, 239, 239);
    height: 34px;
    width: 184px;
    margin-top: 7px;
    background-color: rgb(220 217 217);
    border-radius: 10px;

  }

  .pbox6 {
    border: 2px solid rgb(245, 239, 239);
    background-color: rgb(220 217 217);
    border-radius:10px;
    height: 30px;
    width: 145px;
    margin-top: 7px;

  }

  .pbox2 {
    border: 2px solid rgb(245, 239, 239);
    background-color: rgb(220 217 217);
    border-radius:10px;
    height: 31px;
    width: 118px;
    margin-top: 7px;

  }

  .pbox3 {
    border: 2px solid rgb(245, 239, 239);
    background-color: rgb(220 217 217);
    border-radius:10px;
    height: 33px;
    width: 220px;
    margin-top: 7px;

  }

  .pbox4 {
    border: 2px solid rgb(245, 239, 239);
    background-color: rgb(220 217 217);
    border-radius:10px;
    height: 35px;
    width: 135px;
    margin-top: 7px;

  }

  .pbox5 {
    border: 2px solid rgb(245, 239, 239);
    background-color: rgb(220 217 217);
    border-radius:10px;
    height: 30px;
    width: 301px;
    margin-top: 7px;

  }

  .info {
    padding-top: 10px;
  }

  .fles {
    display: flex;
    flex-direction: row;
  }


  /* }for contact */
  .contact {
    height: 900px;
    width: 1200px;
    margin-left: 12px;
    border: 2px;
  }

  .map1 ul li {
    margin-top: -21px;
  }

  .map1 {
    display: flex;
    flex-direction: column;
  }

  .map1 ul {
    list-style: none;
    margin-left: -16px;
  }

  /* for contact */

  .contact2 {
    height: 532px;
    width: 793px;
    border: 2px solid whitesmoke;
    margin-top: -184px;
    margin-left: 365px
  }

  /* Style inputs with type="text", select elements and textareas */
  input[type=text],
  select,
  textarea {
    width: 100%;
    /* Full width */
    padding: 12px;
    /* Some padding */
    border: 1px solid #ccc;
    /* Gray border */
    border-radius: 4px;
    /* Rounded borders */
    box-sizing: border-box;
    /* Make sure that padding and width stays in place */
    margin-top: 6px;
    /* Add a top margin */
    margin-bottom: 16px;
    /* Bottom margin */
    resize: vertical;
      /* Allow the user to vertically resize the textarea (not horizontally) */
    background-color: rgb(220 217 217);
  }

  /* Style the submit button with a specific background color etc */
  input[type=submit] {
    background-color: #04AA6D;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }

  /* When moving the mouse over the submit button, add a darker green color */
  input[type=submit]:hover {
    background-color: #45a049;
  }

  /* Add a background color and some padding around the form */
  .container2 {
    border-radius: 5px;
    background-color: rgb(243, 240, 240);
    padding: 20px;
  }

  /* *******************For responsive************************** */
  @media only screen and (max-width: 1190px) and (min-width: 100px) {
    body{
      height: 5000px;
    }
    .para{
      display: none;
    }
    .type{
      display: show;
      margin-left: 2px;}
    .login {
      display: none;
      height: 3300px;
      width: 1000px;
      font-size: 50px;

    }
    .pic img{
            margin-left: 331px;
            height: 200px;
            width: 200px;
            margin-top: 85px;
    }
    
    .pic h2{
      margin-left: 243px;
      font-size: 60px;
    }
    .line{
      border: 4px solid red;
    margin-top: -4515px;
    margin-left: 1287px;
    width: 93px;
    height: 129px;
    position: fixed;
    }
    .logo{
      margin-left: 308px;
    }
    .navbar{
      margin-left: 104px;
      margin-top: 175px;
    }
    .navbar ul li{
      margin-top: 100px;
    }
  
.content img{
  display: none;
}
    .parallax {
      width: 1600px;
      margin-left: 1px;
      height: 1300px;
    }
    .main3 h3{
      margin-top: 20px;
    }
    .about{
      font-size: 30px;
      height: 559px;
      width: 600px;
      margin-left: 15px;
    } 
    .main .nav{
      width: 1420px;
      height: 170px;
    }
    .main .nav ul{
      width: 1397px;
    }

    .new {
      margin-left: 15px;
      font-size: 25px;
      width: 1300px;

    }

    .Resume {
      margin-top: 186px;
      margin-left: 10px;
      font-size: 23px;
      height: 1000px;
    }

    .box1 {
      width: 400px;
      height: 400px;
    }

    .box2 {
      margin-left: 311px;
      width: 660px;
    }
     .fa.fa-home{
font-size: 60px;
     }
     .h{
       margin-left: 94px;
       margin-top: 131px;
    padding-top: 30px;
     }
    .pbox {
      width: 180px;
      background-color:rgb(196 202 195);
    }

    .pbox p {
      margin-top: 8px;
      width: 1300px;
    }

    .pbox1 {
      margin-top: 22px;
      width: 258px;
    }

    .pbox2 {
      margin-top: 22px;
      width: 200px;
    }

    .pbox3 {
      margin-top: 22px;
      width: 300px;
    }

    .pbox4 {
      margin-top: 22px;
      width: 258px;
    }

    .pbox5 {
      margin-top: 22px;
      width: 431px;
      height: 43px;
    }

    .pbox6 {
      margin-top: 22px;
      width: 238px;
      height: 40px;
    }
    .contact {
      margin-top: 400px;
      font-size: 40px;
    }

    .contact2 {
      margin-left: 600px;
      margin-top: -517px;
      font-size: 40px;

    }
  
 
  }



  .line {
    display: none;

  
  }
</style>

<body>
  <div class="login">
    <div class="pic">
      <img src="har.jpg">
      <h2>Harshit Gupta</h2>
    </div>
    <div class="logo">
      <a href="#" class="fa fa-facebook"></a>
      <a href="#" class="fa fa-youtube"></a>
      <a href="#" class="fa fa-instagram"></a>
      <a href="#" class="fa fa-linkedin"></a>
    </div>
    <ul>
      <div class="h">
      <li><i class="fa fa-home" style="color: white; margin-left: 7px;">&nbsp; Home</i></li>
     </div> <a href="#about"></a>
    </ul>
    <div class="navbar">
      <ul>
        <li><i class="fa fa-male" style="color: #cbc6c6;"></i><a href="#about">&nbsp; About</a></li>
        <li><i class="fa fa-briefcase" style="color: #cbc6c6"></i><a href="#skills">&nbsp; SKills</a></li>
        <li><i class="fa fa-file" style="color: #cbc6c6"></i><a href="#resume">&nbsp; Resume</a></li>
        
        <li><i class="fa fa-envelope" style="color: #cbc6c6"></i><a href="#contact">&nbsp; Contact</a></li>
      </ul>
    </div>
    <div class="para"></i>
      <P>Made by Harshit Gupta </P>
    </div>
  </div>
  <div class="parallax">
  </div>
  <div class="about" id="about">
    <h2><b>About</b></h2>
    <div class="content">
      <img src="my.jpg" style="height: 250px;width: 250px; margin: 35px;">

      <div class="main">
        <h3><b>Web-Developer & Coder</b></h3>
        <div class="nav">
          <ul>
            <li>
              <span style='color: rgb(109, 109, 241);'>&#9658;</span><b>Birthday:</b>05 May 2002 &nbsp; &nbsp; &nbsp;
              &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
              &nbsp; <span style='color: rgb(109, 109, 241);'>&#9658;</span><b>Freelancer:</b>Not-Available
            </li>
            <li><span style='color: rgb(109, 109, 241);'>&#9658;</span><b>College:</b>KIET Group of INSTITUTIONS&nbsp;
              &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span
                style='color: rgb(109, 109, 241);'>&#9658;</span><b>Age:</b>19</li>
            <li><span style='color: rgb(109, 109, 241);'>&#9658;</span><b>Phone:</b>7985403660 &nbsp; &nbsp; &nbsp;
              &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
              &nbsp; &nbsp;&nbsp; &nbsp;<span style='color: rgb(109, 109, 241);'>&#9658;</span><b>Degree: </b>B-Tech
            </li>
            <li><span style='color: rgb(109, 109, 241);'>&#9658;</span><b>City:</b>Gonda &nbsp; &nbsp; &nbsp;
              &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
              &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;<span
                style='color: rgb(109, 109, 241);'>&#9658;</span><b>E-Mail:</b>harshit14316@gmail.com</li>


          </ul>
          <div class="main3">
        </div>
        <h3><b>Hello Everyone!!</b></h3>
        <p>My name is Harshit Gupta and I am first year engineering student currently pursuing my computer
          engineering degree from KIET GROUP OF INSTITUTIONS Ghaziabad I am a front-end Developer and also
          interested in Competitive Programming. </p>
      </div>
    </div></div>
  </div>

  </div>
  <div class="new" id="skills">
    <h2><b>Skills</b></h2>

    <p>HTML</p>
    <div class="container">
      <div class="skills html">90%</div>
    </div>

    <p>CSS</p>
    <div class="container">
      <div class="skills css">80%</div>
    </div>

    <p>JavaScript</p>
    <div class="container">
      <div class="skills js">65%</div>
    </div>

    <p>J-Query</p>
    <div class="container">
      <div class="skills php">60%</div>
    </div>

    <p>C++</p>
    <div class="container">
      <div class="skills C">20%</div>
    </div>
  </div>

   
<?php
$insert = false;
if(isset($_POST['name'])){
    // Set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";
    $database= "port";

    // Create a database connection
    $con = mysqli_connect($server, $username, $password,$database);

    // Check for connection success
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    // echo "Success connecting to the db";

    // Collect post variables
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
     $sql = "INSERT INTO `port` ( `name`, `email`, `sub`, `details`) VALUES ( '$name', '$email', '$subject', '$message')";
     // echo $sql;

    // Execute the query
    if($con->query($sql) == true){
        // echo "Successfully inserted";

        // Flag for successful insertion
        $insert = true;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }

    // Close the database connection
    $con->close();
}

?>
  <div class="Resume" id="resume">
    <h2><b>Resume</b></h2>
    <div class="fles">
      <div class="box1">
        <h3><b>Summary</b></h3>
        <p><b>Harshit Gupta</b></p>

        <p>I am a front-end Developer and looking forward to learn full stack web developing, also
          interested in Competitive Programming . So, Learning C++ this time.</p>
        <div class="nav1">
          <ul>
            <li>Gonda,Uttar Pradesh</li>
            <li>7985403660</li>
            <li>harshit14316@gmail.com</li>
          </ul>
        </div>
        <h3><b>Education</b></h3>
        <p><b>B-Tech(CS)</b></p>
        <div></div>
        <div class="pbox">
          <p>2020-2024</p>
        </div>
        <div class="info">
          KIET,Ghaziabad <div></div>
        </div>
        <p><b>ONLINE COURSES</b></p>
        <div class="pbox">
          <p>2020-2021</p>
        </div>
        <div class="info">
          HTML-CSS(Udemy)<div></div>
          JavaScript(Code with Harry)<div></div>
          C(Code with Haarry)<div></div>
        </div>
      </div>
      <div class="box2">
        <h3><b>Experience</b></h3>
        <p><b>INTERNSHIP</b></p>
        <div class="pbox">
          <p>No Internship</p>
        </div>
        <p>
          Currently I am in first year so not grab any internship yet...
        </p>
        <div class="pbox">
          <p>Mini Project</p>
        </div>
        <p>This is a college organised internship which has not started yet . So, I am waiting for this program</p>
        <div></div>
        <p><b>Projects</b></p>
        <div></div>
        <p>You can view on project websites</p>
        <div class="pbox1">Instagram Login Page</div>
        <div class="pbox2">Gym-Webpage</div>
        <div class="pbox3">Food-Delievery Webpage</div>
        <div class="pbox4">Working CLock</div>
        <div class="pbox5">Car running on a track with sound </div>
        <div class="pbox6">Portollio Webpage</div>
      </div>
    </div>
    <div class="contact" id="contact">
      <h2><b>Contact</b></h2>
      <P>If you have any project idea in front-end and you want to work together then please contact me</b></P>
      <div class="map1">
        <!-- <i class="fa fa-map-marker" style=" height: 41px; margin-top: 8px; padding: 13px; padding-top:11px;width: 41px; border: 2px solid rgb(195, 233, 238); border-radius: 28px;background-color: rgb(195, 233, 238) ;color: rgb(38, 152, 218);"> </i> -->
        <ul>
          <li>
            <P><b>Location</b></P>
          </li>
          <li>1316,Awas Vikas Colony,Gonda</li>
        </ul>
        <!-- <i class="fa fa-envelope"style=" height: 41px; margin-top: 8px; padding: 13px; padding-top:11px;width: 41px; border: 2px solid rgb(195, 233, 238); border-radius: 28px;background-color: rgb(195, 233, 238) ;color: rgb(38, 152, 218);"> </i> -->
        <ul>
          <li>
            <P><b>&#9993; &nbsp; Email:</b></P>
          </li>
          <li>harshit14316@gmail.com</li>
        </ul>
        <!-- <i class="fa fa-phone"style=" height: 41px; margin-top: 8px; padding: 13px; padding-top:11px;width: 41px; border: 2px solid rgb(195, 233, 238); border-radius: 28px;background-color: rgb(195, 233, 238) ;color: rgb(38, 152, 218);"> </i> -->
        <ul>
          <li>
            <P><b>&#128222 Call:</b></P>
          </li>
          <li>7985403660</li>
        </ul>
      </div>
      <div class="contact2">
        <form action="port.php" method="post">
          <form onsubmit="last.php">
          <label for="fname" name="name">Name</label>
          <input type="text" id="fname" name="name" placeholder="Your Name..">

          <label for="lname" name="email">
            <Email-id>Email-id
          </label>
          <input type="text" id="lname" name="email" placeholder="Your Email-id..">
<div class="sub">
          <label for="subject">Subject</label>
          <textarea id="subject" name="subject" placeholder="Write Subject" style="height:50px"></textarea>

          <label for="subject" name="message">Your Message</label>
          <textarea id="subject" name="message" placeholder="Write something.." style="height:200px"></textarea>
          <input type="submit" value="Send Message" style="margin-left: 345px;">
        </form>
        <div class="typ" style="margin-left: -129px;">
          <p>Made by Harshit gupta</p>
        </div>
      </div>

  </div>
  <div id="ham" style="font-size: 100px; margin-top: -4590px; position: fixed;">
    <p>
    =</p>
  </div>

  <script src="js/jquery-3.6.0.min.js"></script>
  <script>
        $(document).ready(function(){
          $("#ham").click(function(){
            $(".login").slideToggle();
          })
          $(".navbar ul").click(function(){
            $(".login").hide();
          })
        });


  </script>

</body>

</html> 