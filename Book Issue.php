<?php
$dbc=mysqli_connect('sql105.epizy.com','epiz_23732324','XmKlkvZdaBE','epiz_23732324_library_management')
           or die("Error Connecting to Preferred database...");
$Name=$_POST['name'];
$rollNo=$_POST['rollno'];
$bookNo=$_POST['bookno'];
$bookName=$_POST['bookname'];
$authorName=$_POST['authorname'];
$edition=$_POST['edition'];


$query="INSERT INTO book_issue_submit_records(STUDENT_NAME,ROLL_NUMBER,BOOK_NUMBER,BOOK_NAME,AUTHOR_NAME,EDITION,ISSUE_DATE)".
      "VALUES('$Name','$rollNo',       '$bookNo','$bookName',     '$authorName','$edition',Now())";
$data=mysqli_query($dbc,$query);

//*Getting current volume of specific book fron database *//

$result="SELECT NO_OF_VOLUME_AVAILABLE FROM books_records WHERE BOOK_NAME='$bookName' AND  EDITION='$edition'";
$data=mysqli_query($dbc,$result);
 while($get=mysqli_fetch_array($data)){
 $volume=$get['NO_OF_VOLUME_AVAILABLE'];}
 $updated_volume=$volume-1;
 

$query="UPDATE books_record
SET NO_OF_VOLUME_AVAILABLE ='$updated_volume' WHERE BOOK_NAME ='$bookName' AND EDITION ='$edition'";
$data=mysqli_query($dbc,$query);
 mysqli_close($dbc);
	echo "$updated_volume";   
?>
	   
	   
 
