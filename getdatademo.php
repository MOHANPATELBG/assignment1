<?php include 'database.php';>

<?php

$customer_id=$_POST['id'];
$customer_name=$_POST['name'];
$mailid=$_POST['mid'];


mysqli_query($connect" INSERT INTO CUSTOMERS(ID,NAME,EMAILID)
				VALUES('$customer_id','$customer_name','$mailid') ");
