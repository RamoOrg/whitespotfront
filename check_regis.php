<?php
		if(isset($_POST['register']))
				{
				$servername = 'localhost';
				$username = 'root';
				$password = '';
				$dbname = 'hospital_managment';

		$conn = new mysqli($servername, $username, $password, $dbname);
	

			if($conn->connect_error)
		{
			die("Connection failed: " . $conn->connect_error);
		}
	
			$username = $_POST['username'];
			$password= $_POST['password'];
     		$confirm_password = $_POST['confirm_password'];
    		$email = $_POST['email'];
		
			$sql = "INSERT INTO regis(id,username,password,confirm_password,email) VALUES ('','$username','$password','$confirm_password','$email')";
	
		if ($conn->query($sql) === TRUE)
			{
                header('location:dashboard/view_index.php');
			}
			else
			{
				echo "Error: " . $sql . "<br>" . $conn->error;
			}

		$conn->close();
	    }
        ?>

