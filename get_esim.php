<?php include "valikko.php"; ?>
<?php
if(isset($_POST['btn']))
{
	$enimi=$_GET['en'];
	$snimi=$_GET['sn'];
	echo 'yee '.$enimi.' '.$snimi;
}
?>

<h1>Henkilötiedot</h1>
<FORM action="testi.php" method="GET">
<label>Etunimi</label><input type="text" name="en">
<br>
<label>Sukunimi</label><input type="text" name="en">
<br>
<input type="submit" name="btn" value="send">
</FORM>
<?php include "footer.php"; ?>
