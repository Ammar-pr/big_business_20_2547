<?php
include('../includes/config.php');
include('../includes/setup.php');

/*


class Mange_users {


function handle_smerty () {
    global $conn;
$smarty = new Smarty_ES();

$sql = "SELECT * FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row

    $smarty->assign("rows", $result);
    $smarty->display('header.tpl'); 

    $smarty->display("Mange_users.tpl");
    $smarty->display('footer.tpl'); 

} else {
    echo "there is no record in table users [ you will be converted to index page ]";
    echo " <meta http-equiv='refresh' content='3;URL=index.php' /> ";   

}
$conn->close();








}


}


$Mange_users= new Mange_users();

$Mange_users->handle_smerty();


?>