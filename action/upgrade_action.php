<?php
$upgrade=$_POST['upgrade'];
$month=$_POST['month'];
echo $month;
//$upgrade.ToString();

echo $upgrade[0];
include("../DB/config.php");
//$enddate=date( "Y-m-d", strtotime( "$startdate +30 day" ));
//$sql=$conn->prepare("INSERT INTO menupackage(packageId,packageName,startDate,endDate,restaurantId) VALUES('$packageid','$packagename','$startdate','$enddate','1234R');");
//$sql->execute();

$month=$month*30;
for($i=0;$i<sizeof($upgrade);$i++){
	$sql=$conn->prepare("SELECT endDate FROM menupackage WHERE packageName='$upgrade[$i]';");
	$sql->execute();
	$row=$sql->fetch(PDO::FETCH_ASSOC);
	$edate=$row['endDate'];
	$enddate=date( "Y-m-d", strtotime( "$edate+$month day" ));
	$sql=$conn->prepare("UPDATE  menupackage SET endDate='$enddate' WHERE packageName='$upgrade[$i]';");
    $sql->execute();


}

?>