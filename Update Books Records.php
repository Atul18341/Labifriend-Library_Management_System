


<?php
$dbc=mysqli_connect('sql105.epizy.com','epiz_23732324','XmKlkvZdaBE','epiz_23732324_library_management')
   or die("Error Connecting to Preferred database...");



$bookNAME=$_POST['book_name'];
$AUTHOR=$_POST['author_name'];
$EDITION=$_POST['edition'];
$volumeNO=$_POST['volume'];


$query="SELECT  * FROM books_records where EDITION ='$EDITION' AND BOOK_NAME='$bookNAME'";
$data=mysqli_query($dbc,$query);
 $result=mysqli_fetch_array($data);
 
 
 //Insert User Sign up details into the database.....   

if($result== 0){
	
$query="INSERT INTO books_records(BOOK_NAME,AUTHOR_NAME,EDITION,NO_OF_VOLUME_AVAILABLE)".
       "VALUES('$bookNAME','$AUTHOR','$EDITION','$volumeNO')"; 
$data=mysqli_query($dbc,$query);
 
echo("<p>Successfull as '.$result'");
echo("<p><a href='../HTML Files/Update Books.html'>Enter another Book details");

mysqli_close($dbc);
  exit();}
else
 {echo("A book record with same edition is present.");}
 