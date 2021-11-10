<?php
include 'config.php';
$qw='SELECT nameconstruct FROM camprod';
$firmi=$db->query($qw);

$qw='SELECT nameconst FROM cons';
$cns=$db->query($qw);

$qw='SELECT MAX(price) FROM vc';
$maxpriceq=$db->query($qw);
$maxpriceqr=mysqli_fetch_array($maxpriceq);

$qw='SELECT MIN(price) FROM vc';
$minpriceq=$db->query($qw);
$minpriceqr=mysqli_fetch_array($minpriceq);

$qw='SELECT MIN(ugol) FROM vc';
$minugolq=$db->query($qw);
$minugolqr=mysqli_fetch_array($minugolq);

$qw='SELECT MAX(ugol) FROM vc';
$maxugolq=$db->query($qw);
$maxugolqr=mysqli_fetch_array($maxugolq);

$qw='SELECT MIN(rasreshenie) FROM vc';
$minrasq=$db->query($qw);
$minrasqr=mysqli_fetch_array($minrasq);

$qw='SELECT MAX(rasreshenie) FROM vc';
$maxrasq=$db->query($qw);
$maxrasqr=mysqli_fetch_array($maxrasq);

$qw='SELECT MIN(mint) FROM vc';
$mintq=$db->query($qw);
$mintqr=mysqli_fetch_array($mintq);

$qw='SELECT MAX(maxt) FROM vc';
$maxtq=$db->query($qw);
$maxtqr=mysqli_fetch_array($maxtq);





$qw='SELECT connameprod FROM conprod';
$firmicon=$db->query($qw);

$qw='SELECT nameconcons FROM concons';
$cnscon=$db->query($qw);

$qw='SELECT MAX(cena) FROM condit';
$maxpriceq=$db->query($qw);
$maxpriceconqr=mysqli_fetch_array($maxpriceq);

$qw='SELECT MIN(cena) FROM condit';
$minpriceq=$db->query($qw);
$minpriceconqr=mysqli_fetch_array($minpriceq);

$qw='SELECT MIN(ploshad) FROM condit';
$minugolq=$db->query($qw);
$minploshadconqr=mysqli_fetch_array($minugolq);

$qw='SELECT MAX(ploshad) FROM condit';
$maxugolq=$db->query($qw);
$maxploshadconqr=mysqli_fetch_array($maxugolq);

$qw='SELECT MIN(moshnost) FROM condit';
$minrasq=$db->query($qw);
$minmoshqr=mysqli_fetch_array($minrasq);

$qw='SELECT MAX(moshnost) FROM condit';
$maxrasq=$db->query($qw);
$maxmoshqr=mysqli_fetch_array($maxrasq);

$qw='SELECT MIN(shum) FROM condit';
$mintq=$db->query($qw);
$minshumqr=mysqli_fetch_array($mintq);

$qw='SELECT MAX(shum) FROM condit';
$maxtq=$db->query($qw);
$maxshumqr=mysqli_fetch_array($maxtq);
mysqli_close($db);
?>