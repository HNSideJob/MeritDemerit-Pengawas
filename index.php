<!DOCTYPE html>
<?php
include('db.php');

?>

<!-- login interface-nurin -->

<html>
<head>
<title>Sistem Merit Demerit Pengawas</title>
<link rel="stylesheet" href="styles/login.css">
</head>
<div class="container" id="container">
	<div class="form-container sign-up-container">
		<?php
   include('db.php');
   if(isset($_POST['reg'])) {
      // username and password sent from form 
      $idp = mysqli_real_escape_string($con,$_POST['user']);
      $name = mysqli_real_escape_string($con,$_POST['name']);
	  $jawatan = mysqli_real_escape_string($con,$_POST['jawatan']);
      $pass = mysqli_real_escape_string($con,$_POST['pass']);

		//   verify the unique things
		$verify_query = mysqli_query($con,"SELECT IdAdmin FROM `admin` WHERE IdAdmin = '$idp'");

		if(mysqli_num_rows($verify_query) !=0 ){
			echo "<div>
				<p>Username atau Jawatan telah digunakan,Sila cuba tukar yang lain!</p>
			</div><br>";

			echo "<a href='javascript:self.history.back()'><button>Go back</button>";
		}
		else{
			mysqli_query($con,"INSERT INTO `admin`( `IdAdmin`, `NamaAdmin`,`Jawatan`,`Pass`) VALUES ('$idp','$name','$jawatan','$pass')") or die("Error Occured");
			echo "<div>
				<p>Pendaftaran berjaya!</p>
			</div><br>";

			echo "<a href='javascript:self.history.back()'><button>Log In Sekarang</button>";
		}

   }else {
?>
		<form action="#" method="post">
			<h1>Pendaftaran Baharu</h1>
			<input type="text" name="user" placeholder="Username" />
			<input type="text" name="name" placeholder="Nama Admin" />
			<input type="text" name="jawatan" placeholder="Jawatan" />
			<input type="password" name="pass" placeholder="Kata Laluan" />
			<button name="reg">Sign Up</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form action="#" method="post">
			<h1>Sign In Admin</h1>
			<input type="text" name="user" placeholder="Username" />
			<input type="password" name="pass" placeholder="Kata Laluan" />
			<button name="login">Sign In</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
			    <h1>Selamat Datang!</h1>
				<p>Sila masukkan maklumat anda</p>
				<button class="ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Selamat Kembali!</h1>
				<p>Sila log masuk menggunakan ID Admin dan Kata laluan anda.</p>
				<button class="ghost" id="signUp" >Sign Up</button>
			</div>
		</div>
		<?php }?>
	</div>
</div>

<script src='scripts/login.js'></script>

</html>
<?php
   include('db.php');
   if(isset($_POST['login'])) {
      // username and password sent from form 
      $myusername = mysqli_real_escape_string($con,$_POST['user']);
      $mypassword = mysqli_real_escape_string($con,$_POST['pass']); 
      $sql = "SELECT IdAdmin FROM admin WHERE IdAdmin = '$myusername' and Pass = '$mypassword'";
      $result = mysqli_query($con,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = isset($row['active']);
      $count = mysqli_num_rows($result);
      // If result matched $myusername and $mypassword, table row must be 1 row
      if($count == 1) {
		session_start();
         $_SESSION['user'] = $myusername;
		 header("location: menu.php");
      }
      else {
         echo '<script>alert("Username Atau Kata Laluan Tidak Sah") </script>' ;
      }
   }
?>
