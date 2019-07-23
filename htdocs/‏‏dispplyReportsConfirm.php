<?php
include('../includes/config.php');
include('../includes/setup.php');

/*

يستطيع ان يضيف ويحذف ويعدل على بيانات الموظف 
pseudocode :
 select * employeements 

 link with every rows  [ delete and edit  and  add new EMP but adding not with every rows]
  if we try to edit data every rows must be edit auto , like in ABSHAR system 

   check of the authorized usres calling the session object 


*/


class Mange_Reports {


function handle_smerty () {
    global $conn;
$smarty = new Smarty_ES();

$sql = "SELECT * FROM car  where request_status='مؤكد' ORDER BY id DESC LIMIT 15";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row

    $smarty->assign("rows", $result);
    $smarty->display('header.tpl'); 

    $smarty->display("‏‏dispplyReportsConfirm.tpl");
    $smarty->display('footer.tpl'); 

} else {
    echo "there is no record in table users [ you will be converted to index page ]";
    echo " <meta http-equiv='refresh' content='3;URL=index.php' /> ";   

}
$conn->close();








}


}


$Mange_Reports= new Mange_Reports();

$Mange_Reports->handle_smerty();