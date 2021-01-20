

<head>
<meta name="viewport"content="width=device-width, initial-scale=1"/>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-143667410-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-143667410-1');
</script>





<?php
$dbc=mysqli_connect('sql105.epizy.com','epiz_23732324','XmKlkvZdaBE','epiz_23732324_library_management')
   or die("Error Connecting to Preferred database...");


$firstName=$_POST['firstname'];
$lastName=$_POST['lastname'];
$rollNo=$_POST['rollno'];
$userName=$_POST['username'];
$passWord=$_POST['password'];


// Make sure Someone isn't registered using this username.....

$query="SELECT * FROM student_login_details WHERE USERNAME ='$userName'"; 
$query="SELECT * FROM student_login_details WHERE PASSWORD='$passWord'";
$query="SELECT * FROM student_login_details WHERE COLLEGE_ROLL_NO='$rollNo'";
$data=mysqli_query($dbc,$query);
 $result=mysqli_fetch_array($data);
 
 
 //Insert User Sign up details into the database.....   

if($result== 0){
$query="INSERT INTO student_login_details(FIRST_NAME,LAST_NAME,ROLL_NO,USERNAME,PASSWORD)".
       "VALUES('$firstName','$lastName','$rollNo','$userName','$passWord')";


		 
		 
	mysqli_query($dbc,$query);
	echo('<h1>Your account had been registerd as '.$userName.'.</h1>');
$query="INSERT INTO students_profile(USERNAME,ROLL_NUMBER)".
        "VALUES('$userName','$rollNo')";
   mysqli_query($dbc,$query);		
   mysqli_close($dbc);
   
	exit();}
 else{
	
//An account already exist for this username,so display a warning message.....
 
 echo("<h1>**An account  already exist with this username/password. Please use the different one.**</h1>");
	

	}
  
 header("refresh:3;url=../Student Login.php"); 
 ?>