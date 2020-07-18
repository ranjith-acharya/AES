<?php
$conn=mysqli_connect("localhost","root","","portals");
$addmission=$_POST['stdAddmission'];
$bceprac=$_POST['bcePrac'];
$cnext=$_POST['cnExt'];
$cnint=$_POST['cnInt'];
$cnprac=$_POST['cnPrac'];
$dbmsext=$_POST['dbmsExt'];
$dbmsint=$_POST['dbmsInt'];
$dbmsprac=$_POST['dbmsPrac'];
$mpext=$_POST['mpExt'];
$mpint=$_POST['mpInt'];
$mpprac=$_POST['mpPrac'];
$mmext=$_POST['mmExt'];
$mmint=$_POST['mmInt'];
$tcsext=$_POST['tcsExt'];
$tcsint=$_POST['tcsInt'];
$wtprac=$_POST['wtPrac'];
// echo $addmission;
if(!$_POST['btnSubmit5']){
	echo "";
}else{
	$sql="INSERT into sem5(addmission,bceprac,cnext,cnint,cnprac,dbmsext,dbmsint,dbmsprac,mpext,mpint,mpprac,mmext,mmint,tcsext,tcsint,wtprac) VALUES('$addmission','$bceprac','$cnext','$cnint','$cnprac','$dbmsext','$dbmsint','$dbmsprac','$mpext','$mpint','$mpprac','$mmext','$mmint','$tcsext','$tcsint','$wtprac')";
	if(mysqli_query($conn,$sql)){
			echo "<script>window.close()</script>";
	}else{
		echo "Something";
	}
}
?>