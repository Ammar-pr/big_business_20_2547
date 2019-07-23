<?php
session_start();
include('../includes/config.php');

require '../smarty/libs/Smarty.class.php';
$smarty = new Smarty;
$smarty->debugging = false;
$smarty->caching = false;
$smarty->cache_lifetime = 120;
$smarty->template_dir = '../templates/';
$smarty->compile_dir = '../templates_c/';
$smarty->config_dir = '../configs/';
$smarty->cache_dir = '../cache/';
$smarty->caching = Smarty::CACHING_LIFETIME_CURRENT;
$smarty->assign('app_name', 'ES');





if(!$smarty->isCached('index.tpl')) {
	$smarty->assign('name','ES Project تقيم الموظفين');


$smarty->display('index.tpl');

}else {

	global $conn;
	$smarty->clearAllCache();
	
	$sql = "SELECT * FROM users";
$result = $conn->query($sql);


if(!isset($_SESSION['username'])  ||  !isset($_SESSION['password']) ){
 
    $smarty-display('login.tpl');
}else {

   // $smarty->assign('rows',$rows);
    $smarty->caching = 1;
    $smarty->compile_check = true;
    echo "this example 74 ";
      //  $smarty->display('index.tpl');
    
    
}





/*
if ($result->num_rows > 0) {
    while($row =$result->fetch_assoc())
		  // echo "".$row["created_at"];

				$rows[]=$row;

	}
*/

}
?>