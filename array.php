<?php
session_start();
if($_SESSION['login'] != TRUE)
{
	header('Location:login.php');
}
?>
<?php include "valikko.php"; ?>
<h1>Arrayharkka</h1>
<p>
	PHP perusteita
</p>
<?php
$asiakas=array(
	array("en"=>'Teppo',"sn"=>'Testi'),
	array("en"=>'Teppo2',"sn"=>'Testi2'),
	array("en"=>'Teppo3',"sn"=>'Testi3'),
	array("en"=>'Teppo4',"sn"=>'Testi4')
	);
?>
<h2>Yksi alkio</h2>
<?php
	echo 'Eka etunimi on ' .$asiakas[0]['en'];
	echo '<br>';
	echo 'Toka sukunimi on ' .$asiakas[1]['sn'];
?>
<h3>Kaikki alkiot</h3>
<?php
	echo 'Taulukon sisältö:<br>';
	//print_r($asiakas);
?>
<h4>Kaikki alkiot taulukkona</h4>
<TABLE BORDER=1>
<TR><TH>Etunimi</TH><TH>Sukunimi</TH></TR>
<?php
foreach($asiakas as $rivi) {
	echo '<tr><td>'.$rivi['en'].'</td><td>'.$rivi['sn'].'</td></tr>';
}
?>
</TABLE>
<?php include "footer.php"; ?>