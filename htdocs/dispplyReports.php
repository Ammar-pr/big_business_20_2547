<?php
include('../includes/config.php');
include('../includes/setup.php');



class Mange_Reports {


function handle_smerty () {
    global $conn;
$smarty = new Smarty_ES();

$sql = "SELECT * FROM car ORDER BY id DESC LIMIT 10";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row

    $smarty->assign("rows", $result);
    $smarty->display('header.tpl'); 
if(!isset($_SESSION['uname'])  & !isset($_SESSION['psw']) )
{
	echo "لم يتم تسجيل الدخول";
}else {
    if(isset($_SESSION['validity'])  & $_SESSION['validity']=="Vehicles"){
  $smarty->display("manage_reports.tpl");
	} else {
		echo "ليس لديك حق الوصول الى هذه الصفحة
";
echo "the user not authrized";
	}
   $smarty->display('footer.tpl'); 

} }
$conn->close();








}


}


$Mange_Reports= new Mange_Reports();

$Mange_Reports->handle_smerty();