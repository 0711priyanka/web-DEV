<?php

if ($_SERVER["REQUEST_METHOD"] == "POST")
 {
    $Name=$_POST['nameip'];    
    $Email =$_POST["emailinput"];
    $Password=$_POST['passwordip'];
    $DOB=$_POST['dateinput'];
    $Gender = $_POST["gender"];
}

 //Datebase connection 
$conn = mysqli_connect("localhost","root","","swiss");
if($conn->connect_error)
{
	die('Connection Failed:'.$conn->connect_error);
}

$sql = "INSERT INTO registration (Full_Name, Email, Password, DOB, Gender, Registration_Time) VALUES ('$Name', '$Email' ,'$Password', '$DOB', '$Gender', NOW())";
	if(mysqli_query($conn,$sql))
	{
		 
	   header("Location: http://localhost/registration/mywebsite.html"); 
	   echo '<script type="text/JavaScript">  alert("registration successful"); </script>';
  
      exit; 
    }
	else 
	{
     echo "Error: " . $sql . "<br>" . $conn->error;
   }

mysqli_close($conn);
?>