<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "mydatabase";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT ID,NAME,MAILID FROM CUSTOMERS";
$result = $conn->query($sql);

if ($result->num_rows > 0)
 {
   <table style="width:100%">
	<tr>
		<th>CANDIDATE ID</th>
		<th>CANDIDATE NAME</th>
		<th>MAIL ID</th>
	</tr>

    while($row = $result->fetch_assoc()) {
	<tr>
	<td>echo $row["ID"]</td>
	<td>echo $row["NAME"]</td>
	<td>echo $row["MAILID"]</td>
        </br>
    }
} 

else
{
    echo "0 results";
}
$conn->close();
?> 

