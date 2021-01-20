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



$dbc=mysqli_connect('sql105.epizy.com','epiz_23732324','XmKlkvZdaBE','epiz_23732324_library_management')
             or die("Error Connecting to Mysql Database.");
             
$Name=$_POST['name'];
$Rollno=$_POST['rollno'];
$EmailAddress=$_POST['emailaddress'];
$Semester=$_POST['semester'];
$Feedback=$_POST['feedback'];

$query="INSERT INTO Students_Feedback_Records(NAME,ROLL_NUMBER,EMAIL_ADDRESS,SEMESTER,FEEDBACK)".
              "VALUES('$Name','$Rollno','$EmailAddress','$Semester','$Feedback')";
 $result=mysqli_query($dbc,$query)
              or die("Error querying the database.");
 echo("Your feedback had been successfully recorded. Actions should be taken toward it, if necessary");
  header("refresh:5;url=../Student-Dashboard.html");
  mysqli_close($dbc);
  ?>
