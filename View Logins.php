
<head>
 <meta name="viewport" content="width=device-width, initial-scale=1"
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
   or die("Error Connecting to Preferred database...");
$username=$_SESSION['username'];

$query="SELECT LOGIN_RECORDS FROM student_login_records Where USERNAME='$username'";
	$result=mysqli_query($dbc,$query)
				or die('Error querying database');
	echo "<h1>LOGIN RECORDS:</h1>";
	while($view=mysqli_fetch_array($result)){
     echo "<h4>{$view['LOGIN_RECORDS']}<hr></td></h4>
	<tr></table>";
	}
	mysqli_close($dbc);
	?> 
	
	<style type="text/css">
	h4{ width:350px;
	height:auto;
	left:300px;
	text-align:center;
	}
	
		