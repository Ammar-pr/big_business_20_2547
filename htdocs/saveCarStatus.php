<?php
session_start();


include('../includes/config.php');
include('../includes/setup.php');
$smarty = new Smarty_ES();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
if (isset($_POST['car_info']) & isset($_POST['car_status'])  & isset($_POST['period']) & isset($_POST['Name_of_Trainer']) )
{
echo "1";

if(isset($_SESSION['id']))

	{
	
$car_name_s=htmlspecialchars($_POST['car_info']);
$car_status_s=htmlspecialchars($_POST['car_status']);
$car_period_s=htmlspecialchars($_POST['period']);
$ex_id_s=htmlspecialchars($_SESSION['id']);
$fuel_s=htmlspecialchars($_POST['fuel']);
$name_of_Trainer=htmlspecialchars($_POST['Name_of_Trainer']);
$car_name = filter_var($car_name_s, FILTER_SANITIZE_STRING);
$car_status = filter_var($car_status_s, FILTER_SANITIZE_STRING);
$car_period = filter_var($car_period_s, FILTER_SANITIZE_STRING);
$ex_id = filter_var($ex_id_s, FILTER_SANITIZE_STRING);
$fuel=filter_var($fuel_s, FILTER_SANITIZE_STRING);
$name_of_Trainer2=filter_var($name_of_Trainer, FILTER_SANITIZE_STRING);




if(validation_methods ($car_name ,$car_status, $car_period,$ex_id,$fuel,$name_of_Trainer2)==true )
{
	
save($car_name ,$car_status, $car_period,$ex_id,$fuel,$name_of_Trainer2);

}else {
	        echo " Error   .. 404: ";
      //  echo " <meta http-equiv='refresh' content='1;URL=index.php' /> ";


}



	}


}else {

	echo "there is no data to save ! , please select car status  and car period ";
}

}else {

	echo "no  request  is send it ";
}

function save ($car_name ,$car_status, $car_period,$ex_id,$fuel,$name_of_Trainer2){
	global $conn;
	// save to data base if  sussed convert to main page .

	
	
	

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "eoe";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection


$sSQL= 'SET CHARACTER SET utf8';

mysqli_query($conn,$sSQL) or die ('Can\'t charset in DataBase'); 
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO car (car_plate, car_status, car_period,ex_id,fuel,Name_of_Trainer)
VALUES ('".$car_name."', '".$car_status."', '".$car_period."','".$ex_id."','".$fuel."','".$name_of_Trainer2."')";

if ($conn->query($sql) === TRUE) {
           echo "تم تسجيل الحالة الجديدة للسيارة .. 1: ";
        echo " <meta http-equiv='refresh' content='2;URL=index.php' /> ";
        echo "<br>";

} else {
	        echo " Error   .. 404: ";
        echo " <meta http-equiv='refresh' content='8;URL=index.php' /> ";

    echo "Error: " . $sql . "<br>" . $conn->error;
}

	
	
	$conn->close();
	
	
	
	
	

}


function validation_methods ($car_name ,$car_status, $car_period,$ex_id,$fuel) {

if (is_string($car_name) & strlen($car_name)!=0  & is_string($car_status) & strlen($car_status)!=0  & is_string($car_period) & strlen($car_period)!=0     & is_string($fuel) & strlen($fuel)!=0  & is_string($name_of_Trainer2) & strlen($name_of_Trainer2)!=0){

	return true;
}else {

	return false;


}
}
?>
