
<?php
	
	session_start();
	if(isset($_POST['submit'])){

		$id = $_POST['id'];
		$password = $_POST['password'];
		$user=$_POST['user'];
		$admin=$_POST['admin'];

		if(empty($id) == true || empty($password) == true){
			echo "null submission!";
		}else{
			

			if($id == $password){
				
				$_SESSION['id'] = $id;
				$_SESSION['password'] = $password;
if()
{header('location: login.html');}

			}else{
				echo "invalid id/password";
			}
		}

	}?>
	
