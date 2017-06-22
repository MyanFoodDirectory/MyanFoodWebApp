<?php 	

include "../DB/config.php";

if(isset($_POST["save"]))
{
	$packageid=uniqid();
	$packagename=$_POST['packagename'];
	$startdate= date("Y-m-d");
	$enddate=date( "Y-m-d", strtotime( "$startdate +30 day" ));
	$insert=$conn->prepare("INSERT INTO menupackage(packageId,packageName,startDate,endDate,restaurantId) VALUES('$packageid','$packagename','$startdate','$enddate','1234R');");
	$insert->execute();

	//$results=$stmt->fetch(PDO::FETCH_ASSOC);
	echo "<script>alert('Insert Sccess!');</script>";
}
?>