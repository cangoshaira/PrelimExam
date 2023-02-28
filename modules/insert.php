<!DOCTYPE html>
<html>

<head>
	<title>Fetch Data</title>
</head>

<body>
	<center>
		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => staff
		$conn = mysqli_connect("localhost", "root", "", "exam");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$firstN = $_REQUEST['firstN'];
		$lastN = $_REQUEST['lastN'];
		$sex = $_REQUEST['sex'];
		$add = $_REQUEST['add'];
		$contact = $_REQUEST['contact'];
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO student VALUES ('$firstN',
			'$lastN','$sex','$add','$contact')";
		
		if(mysqli_query($conn, $sql)){
			echo '<script>alert("Successfully Saved")</script>';

		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
	</center>
</body>

</html>
