



<head>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-143667410-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-143667410-1');
</script>
</head>




<body>
<?php
session_start();
$dbc= mysqli_connect('sql105.epizy.com','epiz_23732324','XmKlkvZdaBE','epiz_23732324_library_management')
        or die("Error connecting to My SQL Database...");

//Grab the user-entered log-in data
$ROLL_NO = $_POST['rollno'];
$USERNAME = $_POST['username'];
$PASSWORD = $_POST['password'];

//Look for username and password in the database
$query="SELECT * FROM student_login_details where USERNAME='$USERNAME' AND PASSWORD='$PASSWORD'";
$data=mysqli_query($dbc,$query);
 
$row=mysqli_fetch_array($data);


$result=mysqli_num_rows($data);
if($result == 1){
	//The Log-in is OK so set set the username and password variables
	 
	$USERNAME=$row['USERNAME'];
	$PASSWORD=$row['PASSWORD'];
	
$query="INSERT INTO student_login_records(USERNAME,PASSWORD,LOGIN_RECORDS)".
         "VALUES('$USERNAME','$PASSWORD',NOW())"; 
	$data=mysqli_query($dbc,$query);
 
  }
else{
	exit("<h1>** The entered username/password is incorrect. Please enter correct one.**</h1>");
   }
   //Confirm the Successful Log-in.
    $_SESSION["username"]="$USERNAME";
	$_SESSION["rollno"]="$ROLL_NO";
   echo "login()";
    header("Location:../Student-Dashboard.html");
  
  ?>
   <script>
   function login{
	   prompt("Login Successful.");
	 </script>
   
   <style type="text/css">
   .view{text-align:center;
         font-size:50px;
          top:300px;}
   body{background-image:url('../Pictures/background.jpg');
   