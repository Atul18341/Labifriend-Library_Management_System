<html>
<head>
<meta name="viewport"content="width= device-width,initial-scale=0.5"/>
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
$dbc=mysqli_connect('sql105.epizy.com','epiz_23732324','XmKlkvZdaBE','epiz_23732324_library_management')
       or die('Error Connecting to My SQL database');

$SEARCH=$_POST['name'];
	   
$query="SELECT * FROM books_records";

$result=mysqli_query($dbc,$query)
				or die('Error querying database');
	echo"<table align='center' style=''><th>SUBJECT</th>
	<th>BOOK NAME</th>
	             <th>AUTHOR NAME</th>
	             <th>EDITION</th>
				 <th>NO. OF VOLUME AVAILABLE</th>";
	while($view=mysqli_fetch_array($result)){
	echo "
	<p><tr style='border:0.5px solid black'><td>{$view['SUBJECT']}<p></td>
	<td>{$view['BOOK_NAME']}<p></td>
	<td>{$view['AUTHOR_NAME']}<p></td>
	<td>{$view['EDITION']}</td>
	<td>{$view['NO_OF_VOLUME_AVAILABLE']}</td></tr>";}
	
	
	
	?>
	
	
	<style type="text/css">
	table
	    {border:0.5px solid black;
		 border-left:0.5 px solid yellow;
		 height:auto;
		 width:100%;
		
		text-align:center;
		background-color:rgb(11,235,138);
		}
 

 th{font-size:25px;
    border-right:2px solid black;
    border-bottom:2px solid black;
     text-decoration:underline;}

 td{border-right:2px solid black;
    border-bottom:2px solid black;
    color:blue;
    font-size:20px;}