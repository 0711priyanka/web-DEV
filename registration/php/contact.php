<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
	$Name=$_POST["name"];
    $Email =$_POST["email"];
    $Subject = $_POST["title"];
    $Query = $_POST["query"];
    $message =$_POST["message"];
}


 //Datebase connection 
$conn = mysqli_connect("localhost","root","","swiss");
if($conn->connect_error)
{
	die('Connection Failed:'.$conn->connect_error);
}

$sql = "INSERT INTO contact (Name, Email, Subject, Query, Message) VALUES ('$Name', '$Email' ,'$Subject', '$Query', '$message')";
	if(mysqli_query($conn,$sql))
	{
	  echo "Registration successfull" . "<br>";
      echo "Name:" . $Name . "<br>";
      echo "Email:" . $Email . "<br>";
      echo "Subject:" . $Subject . "<br>";
      echo "Query:" . $Query . "<br>";
      echo "Message:" . $message . "<br>";
	}
	else 
	{
     echo "Error: " . $sql . "<br>" . $conn->error;
   }

mysqli_close($conn);

?>