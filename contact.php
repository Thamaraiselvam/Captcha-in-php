<?php
session_start();

?>

<form action="#" method="POST"> 

<img src="index.php" alt="Image created by a PHP script" >

<input type="text" name="captcha">

<input type="submit" value="submit" name="submit">
</form>

<?php
if (isset($_POST['submit'])) {
	if ($_POST['captcha'] ==$_SESSION['rand_code'] ) {
		echo "correct";
	}
	else {
		echo "wrong";
	}
}


?>
