






<body>
<?php
$profpic="../Pictures/background.jpg";
$dbc= mysqli_connect( 'sql105.epizy.com','epiz_23732324','XmKlkvZdaBE','epiz_23732324_library_management')
          OR die("Error Connecting to My Sql database..");

//Grab the user-entered log-in data

$USERNAME = $_POST['username'];
$PASSWORD = $_POST['password'];

//Look for username and password in the database
$query="SELECT * FROM login_details where USERNAME='USERNAME' AND PASSWORD='$PASSWORD'";
$data=mysqli_query($dbc,$query);
  
$row=mysqli_fetch_array($data);


$result=mysqli_num_rows($row);
if($result == 0){
	//The Log-in is OK so set set the username and password variables
	
	$USERNAME=$row['USERNAME'];
	$PASSWORD=$row['PASSWORD'];
   }
else{

	exit("<h1>** The entered username/password is incorrect. Please enter correct one.**</h1>");
	}
   //Confirm the Successful Log-in.
    header("Location:../Labrarian-Dashboard.html");
  
  
   ?>
   
   
   <style type="text/css">
   .view{text-align:center;
         font-size:50px;
          top:300px;}
   body{background-image:url('../Pictures/background.jpg');
   