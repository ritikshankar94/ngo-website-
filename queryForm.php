<?php
include 'db.php';

if(isset($_POST['name'])){
	// echo "Submit";
	if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['number']) && !empty($_POST['message'])) {

		$name = $_POST['name'] ;
		$email = $_POST['email'] ;
		$number = $_POST['number'] ;
		$message = $_POST['message'] ;

		// echo $fname;

		$query = "insert into query(name, email, number, message) values('$name', '$email', '$number',  '$message')" ;

		$run = mysqli_query($conn, $query) or die(mysqli_error($conn)) ;

		if ($run){
			echo "Form submited successfully . . ." ;
		}
		else{
			echo "Form not submitted . . ." ;
		}
	}
	else{
		echo "all fields are required" ;
	}
} else {
	echo "Method not valid";
}

?>