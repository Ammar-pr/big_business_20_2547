<?php
if(isset($_SESSION['uname'])){

}else {
session_start();

}

include('../includes/config.php');
include('../includes/setup.php');
$smarty = new Smarty_ES();


if(!isset($_SESSION['uname'])  || !isset($_SESSION['psw']) )
{
  
    
  $smarty2 = new Smarty_ES();
   $smarty2->display('login.tpl');  
    $smarty2->setCacheLifetime(3600);

    $smarty2->setCompileCheck(false);
   

}else {

    if((time() - $_SESSION['last_time']) > 120) // Time in Seconds
    {
    header("location:logout.php");
    }
 
    if($_SESSION['validity']=="HR"){


  if(isset($_GET['Register'])){
   $register= htmlspecialchars($_GET["Register"]);

 if($register="Register"){
  $smarty3 = new Smarty_ES();
  $smarty3->display('header.tpl'); 
  $smarty3->display('Register.tpl');   
  $smarty3->display('footer.tpl'); 
  $smarty3->setCacheLifetime(3600);

  $smarty3->setCompileCheck(false);

 }




  }  if(isset($_GET['edit'])){
    $mysqli = new mysqli("localhost", "root", '', "jdsDB");

   // $edit_record = "`".str_replace("`","``",$edit_record)."`";
    $edit_record = trim($_GET["edit"]);
    $edit_record = stripslashes($_GET["edit"]);
    $edit_record = htmlspecialchars($_GET["edit"]);

// the idea of this  , code to do the fowlling ..
/*
1- bring the full record from the DB 
2- assaign smarty tample [ edit ], the valus 
3- call the USER class for eding process like in delete function
4- edit code must be in user class => <== bring security code 
5- after setting the values from user side , he should click on edit 
6- as post values will send to other page or can send it to USER class to make the updat process
7- then convert the user to indexPage , or what every it was beore the edit process 


*/
global $conn;



$stmt = $conn -> prepare('SELECT username, email,secret_question,answer,manger_evaluation,assistant_evaluation,Validity,Management,password FROM users WHERE id = ?');

	if($stmt &&
	$stmt -> bind_param('i', $edit_record) &&
	$stmt -> execute() &&
	$stmt -> store_result() &&
	$stmt -> bind_result($username, $email,$secret_question,$answer,$manger_evaluation,$assistant_evaluation,$Validity,$Management,$password)
) {
  $smarty4 = new Smarty_ES();


	while ($stmt -> fetch()) {
  $smarty4->assign('email', $email);
  $smarty4->assign('username', $username);
  $smarty4->assign('secret_question', $secret_question);
  $smarty4->assign('answer', $answer);
  $smarty4->assign('manger_evaluation', $manger_evaluation);
  $smarty4->assign('assistant_evaluation', $assistant_evaluation);
  $smarty4->assign('Validity', $Validity);
  $smarty4->assign('management', $Management);
  $user_types = $_SESSION['validity'];
  $smarty4->assign('user_types', $user_types);

  $smarty4->assign('password', $password);

   // $_SESSION['uname']
  $smarty4->display('header.tpl'); 
  $smarty4->display('edit.tpl'); 
  $smarty4->display('footer.tpl'); 
  $smarty4->setCacheLifetime(3600);

  $smarty4->setCompileCheck(false);
	}

} else {
  echo $stmt -> error;

	echo 'Prepared Statement Error';
}






$stmt->close();
$conn->close();





/*

    $smarty4 = new Smarty_ES();
    $smarty4->display('login.tpl');  
    $smarty4->display('header.tpl'); 
    $smarty4->display('edit.tpl');   
    $smarty4->display('footer.tpl'); 
    $smarty4->setCacheLifetime(3600);

    $smarty4->setCompileCheck(false);
  */
  }
  
  
  
  
  else {
    $smarty5 = new Smarty_ES();
 
    $smarty5->display('header.tpl'); 
     $smarty5->display('welcome.tpl');     
    $smarty5->display('footer.tpl'); 

    $smarty5->setCacheLifetime(3600);

    $smarty5->setCompileCheck(false);

  }

        // to be send with values 
         // $smarty->display('Mange_users.tpl'); 
     
        //   $smarty->display('Mange_users.tpl'); 
        
        
    }else if($_SESSION['validity']=="Trainer")
 {
   $smarty6 = new Smarty_ES();
    $smarty6->display('header.tpl'); 
     $smarty6->display('welcome.tpl');     
    $smarty6->display('footer.tpl'); 

    $smarty6->setCacheLifetime(3600);

    $smarty6->setCompileCheck(false);
 }else if($_SESSION['validity']=="Vehicles"){
   $smarty7 = new Smarty_ES();
    $smarty7->display('header.tpl'); 
     $smarty7->display('welcome.tpl');     
    $smarty7->display('footer.tpl'); 

    $smarty7->setCacheLifetime(3600);

 }else if($_SESSION['validity']=="employee"){

}
    
    

}



?>