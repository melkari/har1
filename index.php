<?php
session_start();
if($_SESSION['login']==TRUE) {
	$user=$_SESSION['tunnus'];
}
else{
	$user="Vieras";
}
?>
<?php include "valikko.php"; ?>
<h1>Pääsivu</h1>
<?php echo 'Terverlrtjurlao ' .$user; ?>
<p>
	PHP perusteita
</p>
<?php include "footer.php"; ?>