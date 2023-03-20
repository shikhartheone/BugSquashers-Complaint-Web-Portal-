<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>View Complaints</title>
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
        float: center;
        }
        img
        {
        float: center;
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
  
  
  <?php 
include("connect.php"); 
error_reporting();
$query = "SELECT * FROM FORM";
$data = mysqli_query($conn,$query);

$total = mysqli_num_rows($data);
if($total != 0)
{
    ?>
    <center><font size="30" align="center"><u>Complaints</u></font><br>
    <table  border = 1 cellspacing=7>
        <tr bgcolor="#503D02" align= center style="color: white">
        <th width= "10%">Complaint For</th>
        <th width= "15%">Name</th>
        <th width= "10%">Registration No.</th>
        <th width= "5%">Room No.</th>
        <th width= "15%">Phone No.</th>
        <th width= "35%">Description</th>
        <th width= "5%">Start Time</th>
        <th width= "5%">End Time</th>
        </tr>

    
    <?php
    while($result = mysqli_fetch_assoc($data))
    {
       echo "<tr align=center bgcolor=#FAB216>
                <td>".$result['type']."</td>
                <td>".$result['name']."</td>
                <td>".$result['reg']."</td>
                <td>".$result['room']."</td>
                <td>".$result['phone']."</td>
                <td>".$result['description']."</td>
                <td>".$result['start']."</td>
                <td>".$result['end']."</td>
            </tr>
            ";
    }
}
else
{
    echo "No record found";
}

?>
</table>
</center>
</div>
    
  
</body>
</html>



















