
<meta name="viewport" content="width='device-width, initial-scale=1'"/>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-143667410-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-143667410-1');
</script>

<?php

session_start();
$dbc=mysqli_connect('sql105.epizy.com','epiz_23732324','XmKlkvZdaBE','epiz_23732324_library_management')
      or die("Connecting to database failed.");
   
  $rollno=$_SESSION['rollno'] ;
 $query="SELECT * FROM book_issue_submit_records where ROLL_NUMBER='$rollno'";
 $result=mysqli_query($dbc,$query)
        or die("Error Querying the database...");
 if($view=mysqli_fetch_array($result)){
      echo"<table class='view'><tr style='border:0.5px solid black'><td><b>Book Number:</b><p>{$view['BOOK_NUMBER']}<p>
                 <b>Book Name:</b><p>{$view['BOOK_NAME']}<p>
				 <b>Author Name:</b><p>{$view['AUTHOR_NAME']}<p>
				 <b>Issue Date:</b><p>{$view['ISSUE_DATE']}<p>
                 <b>Submission Date:</b><p>{$view['SUBMISSION_DATE']}</td></tr></table>";}
 else
     {echo("NO such Records Found.");}
 
 mysqli_close($dbc);
 
 ?>
 <style type="text/css">
 .view{border:0.5px solid black;
       border-left:0.5px solid black;
	   height:auto;
	   width:100%;
	  text-align:center;
       background-color:rgb(216,208,216);
	}
 
 
 
 
 