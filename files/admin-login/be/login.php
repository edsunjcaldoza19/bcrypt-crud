<?php
	include '../includes/head.php';
	session_start();


	/* PDO DB connection configuration */

	$db_username = 'root';
	$db_password = '';

	$conn = new PDO( 'mysql:host=localhost;dbname=caldoza-crud', $db_username, $db_password );

	if(!$conn){
		die("Fatal Error: Connection Failed!");
	}

	$username = $_POST['username'];
	$password = $_POST['password'];

	if(ISSET($_POST['login'])){
		$sql = $conn->prepare("SELECT * from `tbl_account_admin` where `admin_username` = '$username'");
		$sql->execute();

		if($fetch = $sql->fetch()){

			if(password_verify($password, $fetch['admin_password'])){

				$_SESSION['admin_id'] = $fetch['id'];
                $_SESSION['admin_username'] = $fetch['admin_username'];
                $_SESSION['admin_password'] = $fetch['admin_password'];
				echo '
					<script>
						$(document).ready(function(){
							Swal.fire({
								icon: "success",
								title: "Login Successful. Please Wait...",
								text: "Welcome User",
								timer: 3000,
							}).then(function(){

								window.location.replace("../../pages/home.php");

							});

						});
					</script>
				';

			}else{

				echo '
					<script>
						$(document).ready(function(){
							Swal.fire({
								icon: "error",
								title: "Invalid User Credentials Please Login Again",
								timer: 2000
							}).then(function(){

								window.location.replace("../index.php");

							});

						});
					</script>
				';

			}

		}
		else{
			echo '
					<script>
						$(document).ready(function(){
							Swal.fire({
								icon: "error",
								title: "Invalid User Credentials Please Login Again",
								timer: 2000
							}).then(function(){

								window.location.replace("../index.php");

							});

						});
					</script>
				';
		}
	}
?>