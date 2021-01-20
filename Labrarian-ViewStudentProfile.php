<head>
<meta name="viewport"content="width=device-width, initial-scale=1"/>
<body>


<?php
session_start();



$dbc=mysqli_connect('sql105.epizy.com','epiz_23732324','XmKlkvZdaBE','epiz_23732324_library_management')
       or die ("Connecting to database failed.");
   
  $roll_no=$_POST['rollno'];
$query="SELECT * FROM students_profile WHERE ROLL_NUMBER='$roll_no'";
$result=mysqli_query($dbc,$query)
				or die('Error querying the database');

 if($view=mysqli_fetch_array($result)){
 $pic=$view['PROFILE_PIC_ADDRESS'];
	echo "<h3 class='head'>STUDENT PROFILE</h3><p><fieldset><p><img src='$pic'width='70%'height='auto'><hr>
<tr><b>NAME:</b> {$view['STUDENT_NAME']}</tr><p>
<tr><b>FATHER NAME:</b> {$view['FATHER_NAME']}<p></tr>
                                  <tr><b>BRANCH:</b> {$view['BRANCH']}<p></tr>
<tr><b>ADMISSION YEAR:</b>   {$view['ADMISSION_YEAR']}<p>
<tr><b>ROLL NO.:</b> {$view['ROLL_NUMBER']}</tr><p>
<tr><b>REGISTERATION NUMBER: </b>{$view['REGISTERATION_NUMBER']}<p>                               <tr><b>CONTACT NO.:</b> {$view['CONTACT_NUMBER']}</tr><p></table></fieldset>";}

  
else
	echo"<h1>No Such Student Account are found.</h1>";
		  
$query="SELECT * FROM book_issue_submit_records WHERE ROLL_NUMBER='$roll_no'";
$result=mysqli_query($dbc,$query)	;	
if($db=mysqli_fetch_array($result)){
echo"<fieldset class='issue'><h3 class='head'>ISSUED BOOKS</h3><p><b>Book No.:</b>{$db['BOOK_NUMBER']}<p>
<b>Book Name:</b>{$db['BOOK_NAME']}<p>
<b>Author Name:</b>{$db['AUTHOR_NAME']}<p>
<b>Issue Date:</b>{$db['ISSUE_DATE']}<p>
<b>Submission Date:</b>{$db['SUBMISSION_DATE']}</fieldset>
";}
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
		  
 
 .head{text-align:center;
       text-decoration:underline;}
.user{text-align:center;}
fieldset{background-color:aqua}
.issue{background-color:yellow;}