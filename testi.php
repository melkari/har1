<?php
$enimi=$_POST['en'];
$snimi=$_POST['sn'];
echo 'yee '.$enimi.' '.$snimi;
?>

<h1>Henkilötiedot</h1>
<FORM action="testi.php" method="POST">
<label>Etunimi</label><input type="text" name="en">
<br>
<label>Sukunimi</label><input type="text" name="en">
<br>
<input type="submit" name="btn" value="send">
</FORM>

