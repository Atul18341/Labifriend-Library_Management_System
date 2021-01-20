<head>
<meta name="viewport"content="width=device-width, initial-scale=1">
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-143667410-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-143667410-1');
</script>
</head>
<?php
session_start();
$dbc=mysqli_connect('sql105.epizy.com','epiz_23732324','XmKlkvZdaBE','epiz_23732324_library_management')
      or die("Error Connecting to the database..");
$userName=$_SESSION['username'];
$studentName=$_POST['studentname'];
$fatherName=$_POST['fathername'];
$branch=$_POST['branch'];
$admission_year=$_POST['admissionyear'];
$rollNo=$_POST['rollno'];	
$registerationNo=$_POST['registeration_no'];
$contactNo=$_POST['contactno'];	  
	

$query="INSERT INTO students_profile(STUDENT_NAME,FATHER_NAME,BRANCH,ADMISSION_YEAR,ROLL_NUMBER,REGISTERATION_NUMBER,CONTACT_NUMBER)".
"VALUES('$studentName','$fatherName','$branch','$admission_year','$rollNo','$registerationNo','$contactNo')";
 $result=mysqli_query($dbc,$query)
       or die("Error querying the database.");
	echo("<div class='head'><b>Your profile has been successfully updated.Now,Upload/Update your profile Picture.</b></div>");
	
	mysqli_close($dbc);
header("refresh:5;url=../Update Student Profile.html");
	   
?>
	   
	<style type="text/css">
  .head{width:300px;
        height:100px;
        top:300px;
        border:0.5px solid black;
        position:absolute;
        text-align:center;}