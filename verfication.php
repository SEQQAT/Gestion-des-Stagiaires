<?php 
session_start(); 
include "dbconnect.php";

if (isset($_POST['username']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data =  stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$username = validate($_POST['username']);
	$password = validate($_POST['password']);
		

	if (empty($username)) {
		header("Location: login.php?error=l'utilisateur est  obliagtoire");
	   exit();
   }else if(empty($password)){
        header("Location: login.php?error=Le mot de passe est obliagtoire");
	    exit();
	}else{
		$password=md5($password);
		$sql = "SELECT * FROM utilisateurs WHERE username='$username' AND password='$password'";
     //print($sql);die;

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['username'] === $username && $row['password'] === $password) {
            	$_SESSION['username'] = $row['username'];
            	$_SESSION['role'] = $row['role'];
            	$_SESSION['id'] = $row['id'];
            	header("Location: pages/admin/index.php");
		        exit();
            }else{
				header("Location:login.php?error=Le Nom d'utilisateur ou le  mot de passe  est incorrect");
		        exit();
			}
		}else{
			header("Location:login.php?error=Le Nom d'utilisateur ou  le mot de passe est  incorrect");
	        exit();
		}
	}
	
}
	header("Location:pages/admin/index.php");

?>