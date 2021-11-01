<?php
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
	$contact=$_POST['contact'];
	$gender=$_POST['gender'];
	$address=$_POST['address'];
	$work=$_POST['work'];

// database connection

$conn = new mysqli('localhost','root','','register');

  If($conn->connect_error)
    { die('connection Failed : '.$conn->connect_error);
	}
	else
	{ $stmt = $conn->prepare("insert into data(fname,lname,contact,gender,address,work)
	      values(?, ?, ?, ?, ?,?)");
	  $stmt->bind_param("ssisss",$fname,$lname,$contact,$gender,$address,$work);
	  $stmt->execute();
	  header('location:home.html');

	
		$stmt->close();
		$conn->close();
		}

?>