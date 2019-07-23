<?php
include('../includes/config.php');
include('../includes/setup.php');
$smarty3 = new Smarty_ES();

  $smarty3->display('header.tpl'); 

  $stmt = $conn->prepare("select * from car ");
 $stmt->execute();
$result = $stmt->get_result();
if($result->num_rows == 0) exit('No rows');
while ($row = $result->fetch_assoc()){
 $users[]=$row;

}	


if(isset($_SESSION['uname'])  & isset($_SESSION['psw']) )
{
  if(isset($_SESSION['validity'])  & $_SESSION['validity']=="Trainer"){
   $smarty3->assign('users',$users);
  
    $smarty3->display('mafateh.tpl');   
$smarty3->display('footer.tpl'); 
  $smarty3->setCacheLifetime(3600);

  $smarty3->setCompileCheck(false);

}else {
	
	
	echo "لاتملك صلاحية الدخول الى هذه الصفحة";
	
	echo " the page is not authorized";
}


}else {
	
	echo "فضلا تسجيل الدخول";
	
}
?>