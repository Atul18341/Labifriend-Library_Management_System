
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
<body>


<?php
session_start();



$dbc=mysqli_connect('sql105.epizy.com','epiz_23732324','XmKlkvZdaBE','epiz_23732324_library_management')
       or die ("Connecting to database failed.");
   $roll_no=$_SESSION['rollno'];
  $username=$_SESSION['username'];
$query="SELECT * FROM students_profile WHERE ROLL_NUMBER='$roll_no'";
$result=mysqli_query($dbc,$query)
				or die('Error querying the database');

 if($view=mysqli_fetch_array($result)){
 $pic=$view['PROFILE_PIC_ADDRESS'];
	echo "<h3 class='head'>MY PROFILE</h3><p><fieldset><p><table class='pic'><th><img src='$pic'width='200px'height='auto'></th><th><h2 class='user'>$username</h2></th></table><hr>
<tr><b>NAME:</b> {$view['STUDENT_NAME']}</tr><p>
<tr><b>FATHER NAME:</b> {$view['FATHER_NAME']}<p></tr>
                                  <tr><b>BRANCH:</b> {$view['BRANCH']}<p></tr>
<tr><b>ADMISSION YEAR:</b>   {$view['ADMISSION_YEAR']}<p>
<tr><b>ROLL NO.:</b> {$view['ROLL_NUMBER']}</tr><p>
<tr><b>REGISTERATION NUMBER: </b>{$view['REGISTERATION_NUMBER']}<p>                               <tr><b>CONTACT NO.:</b> {$view['CONTACT_NUMBER']}</tr><p></table>";}

  
else
	echo"<h1>No Such Student Account are found.</h1>";
		  
		  
		  
		  
		 mysqli_close($dbc);
	   
?>
	    
		  
		 
		  
		  <style type="text/css">
          table{background-color:yellow}
		  tabl{font-size:20px;
		      border:0.5px solid black;
		  background-color:yellow;
		  width:100%;
		  height:auto;
		  left-margin:;
		  
		  position:fixed}
		  
 img{border-radius:50%}
 .head{text-align:center;
       text-decoration:underline;}
.user{text-align:center;}
fieldset{background-color:aqua;
         font-size:20px;
         width:400px;}