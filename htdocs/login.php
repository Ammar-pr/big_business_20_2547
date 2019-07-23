<?php
session_start();
include('../includes/config.php');
class login {
protected $username ;
protected $password ;


public function check_post_in($username,$passwordt) {

 if(isset($username) & isset($passwordt)){
 // check the data base here for this 
echo $username;
echo $passwordt;
 global $conn;


$stmt = $conn->prepare("SELECT password ,validity , id FROM users WHERE email = ?");
 $stmt->bind_param("s",$username);
 $stmt->execute();
 $stmt->store_result();

 $stmt->bind_result($password,$validity,$id); 
 while($stmt->fetch()) {
    echo "the password from the data base ";

   $passwords[] = $password;
 }
 
if (password_verify($passwordt,  $passwords[0])==true) 
{
    echo "11";
    $_SESSION["uname"]=$username;
    $_SESSION["psw"]=$passwordt;   
    $_SESSION['last_time'] = time();    
    $_SESSION['validity']=$validity;      
     $_SESSION['id']=$id;
    header('Location:index.php');

}
 
 $stmt->close();
 $conn->close();



 }


    return false;
}

public function check_user(){
    include('../includes/config.php');

// check fromt the database 


//  create the session 
}



public function save($username, $password){
 
}










}


$ex = new login();

$ex->check_post_in($_POST['uname'],$_POST['psw']);
//$ex->save("qgx@hotmail.com", "12345");
?>