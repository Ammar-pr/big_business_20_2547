<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'eoe';

$conn = new mysqli($servername, $username, $password, $dbname);
// بدأ الاتصال

if ($conn->connect_error) {
    die("الاتصال يوجد به خطأ "  . $conn->connect_error);
}
mysqli_set_charset($conn,"utf8");
// التحقق الأمني  valdation of data ..

if(isset($_GET['id'])  )   {
if( is_numeric($_GET['id'])& $_GET['id']>0 ){

$id_test=htmlspecialchars($_GET['id']); // prevent xss cros site scripting ..
$id=intval($id_test);  // convert the id to integer just in case the hacker try do inject some bad code 
$sql = "UPDATE car SET request_status='مؤكد' WHERE id='".$id."'";
// check if the update work , التحقق من عمل الجملة الشرطية 
if ($conn->query($sql) === TRUE) {
	
	// طباعة جملة للمستخدم ان التحديث قد تم وسيتم تحويل  الى الصفحة االسابقة في خلال ثوان معدودة
	

    echo "تم تحديث الحالة ";
		        echo " <meta http-equiv='refresh' content='2;URL=dispplyReports.php' /> ";

	
	
} else {
    echo "عفوا عزيزي  المستخدم يوجد هذا الخطأ فلا يقبل التحديث". $conn->error;
}

// اقفال الاتصال بعد ان تمت عملية التحديث بنجاح
$conn->close();
}}else if(isset($_GET['updateall']) & is_string($_GET['updateall'])==true )  
{


	$id_test=htmlspecialchars($_GET['updateall']);
	$sql = "UPDATE car SET request_status='مؤكد'";
// check if the update work , التحقق من عمل الجملة الشرطية 
if ($conn->query($sql) === TRUE) {
echo "تم تحديث الحالة للجميع";
echo " <meta http-equiv='refresh' content='2;URL=dispplyReports.php' /> ";

$conn->close();

}else {
	
	    echo "عفوا عزيزي  المستخدم يوجد هذا الخطأ فلا يقبل التحديث". $conn->error;

}
	
	
}

else {
	
	echo "\m I am sorry but you can't update the car request status with out accessing the UPDATE page ...";
}

 
 
 ?>