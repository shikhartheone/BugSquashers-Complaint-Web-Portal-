<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Complaint</title>
      <link rel="stylesheet" href="Slide.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
      <style>
		/* style for the navigation bar */
		nav {
			background-color: #FAB216;
			overflow: hidden;
		}
        nav a {
			float: right;
			color: #f2f2f2;
			text-align: center;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
			padding: 24px 16px;
			text-decoration: none;
			font-size: 25px;
		}
        nav a:hover {
			background-color: #ddd;
			color: black;
		}
        .margin
        {
            margin: 10px 1px 15px 50px;
        }
        .comp
        {
        float: right;
        }
        img
        {
        float: right;
        }

	</style>
   </head>
   <body bgcolor="#F9C319">
   
      <div class="wrapper">
         <input type="checkbox" id="btn" hidden>
         <label for="btn" class="menu-btn">
         <i class="fas fa-bars"></i>
         <i class="fas fa-times"></i>
         </label>
         <nav id="sidebar">
            <div class="title">
               Menu
            </div>
            <ul class="list-items">
            <li><a href="Devjam.html"><i class="fas fa-home"></i>Home</a></li>
                <li><a href="Feedback.html"><i class="fas fa-stream"></i>Feedback</a></li>
                <li><a href="About.html"><i class="fas fa-user"></i>About us</a></li>
            </ul>
         </nav>
      </div>
       <nav>
       <a href="Ananomus Message.html">Anonymous Message</a>
        <a href="#">Track Complaint</a>
        <a href="Complaint.php">Complaint</a>
	</nav> 
  <br><br>
  
  
  <div class="comp">
  <img src="Complaint-02.png" height="53%" width="53%">
  <br><br>
  
  <form action="#" method="POST">
  <div class="margin">
  <label for="Complaint">Choose a Complaint:</label>
  <font color="#F9C319">............</font>
  <select id="Complaint" name="complaint">
		<option value="Electricity">Electricity</option>
		<option value="Water">Water</option>
		<option value="Wifi/Ethernet">Wifi/Ethernet</option>
		<option value="Sanitation">Sanitation</option>
        <option value="Carpenter">Carpenter</option>
        <option value="Mess">Mess</option>
        <option value="Mess">Other</option>

	</select> <br><br>
    
    
    <label for="name">Enter your name:</label>
    <font color="#F9C319">......................</font>
    <input type="text" id="name" name="name" required>
    <br><br>
    <label for="Reg">Regestration Number:</label>
    <font color="#F9C319">..........</font>
	<input type="number" id="Reg" name="reg" maxlength="8" required>
    <br><br>
    <label for="Room">Room Number:</label>
    <font color="#F9C319">...........................</font>
	<input type="number" id="Room" name="room" maxlength="3" required>
    <br><br>
    <label for="phone">Enter your phone number:</label>
    <font color="#F9C319">.</font>
	<input type="tel" id="phone" name="phone" required>
    <br><br>
    <label for="description">Enter a description:</label>
    <font color="#F9C319">.................</font>
	<textarea id="description" name="description" rows="5" cols="40" maxlength="500" required></textarea>
    <br><br>
    Enter Appropriate Time:
    <font color="#F9C319">.......</font>
    <label for="start-time">From:</label>
	<input type="time" id="start-time" name="start" required>
    <label for="end-time">To:</label>
	<input type="time" id="end-time" name="end" required>
    <br><br><br>
    <font color="#F9C319">..................................</font>
    <input type="submit" class="fcc-btn" value="Submit" name="register" >
    <!-- <div class = "fcc-btn">
        <input type="submit" value="Register" class="btn" name="register"> -->
    </div>
    </form>
    
    <?php include("connect.php"); ?>
</body>
</html>



<?php
    if($_POST['register'])
    {
        $complaint = $_POST['complaint'];
        $name      = $_POST['name'];
       $reg        = $_POST['reg'];
       $room       = $_POST['room'];
       $phone      = $_POST['phone'];
       $description = $_POST['description'];
       $start       = $_POST['start'];
       $end         = $_POST['end'];
        
       if ($name != "" && $reg != "" && $room != "" && $phone != "" && $description != "" && $start != "" && $end != "")
       {
       $query = "INSERT INTO FORM VALUES('$complaint','$name','$reg','$room','$phone','$description','$start','$end')";
        $data = mysqli_query($conn,$query); 
        
        if ($data)
        {
            // echo "Data Inserted";
        }
        else
        {
            echo "failed";
        }
    }
    else
    {
        echo "Please enter all the details";
    }
    }

 
?>