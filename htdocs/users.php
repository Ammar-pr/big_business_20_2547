  <?php 
   class Users {
    public function deleteUsers($taskId) {
      $mysqli = new mysqli("localhost", "root", '', "jdsDB");


           $sql = 'DELETE FROM users '
           . 'WHERE id =?';
   $stmt = $mysqli->prepare($sql);
   $bind = $stmt->bind_param('i', $taskId);

 
if ( false === $bind ) {
  error_log('bind_param() failed:');
  error_log( print_r( htmlspecialchars($stmt->error), true ) );
  exit();
}




$exec=$stmt->execute();


   if ( false === $exec ) {
    error_log('mysqli execute() failed: ');
    error_log( print_r( htmlspecialchars($stmt->error), true ) );
}

  // printf("rows deleted: %d\n", $stmt->affected_rows);

   if( $stmt->affected_rows==1){
     echo "the record is deleted ";
   }else {
     echo "the row wasn't deleted ";
   }

   $stmt->close();
    $mysqli->close();
    }
    public   function check_session  () {
      if (isset($_SESSION['validity'])  & $_SESSION['validity']=="HR"  ){
    
      }else {
        echo "Not Authorized !";
        echo " <meta http-equiv='refresh' content='3;URL=index.php' /> ";   

      }
    }

    public function edit () {

// must add check if and how to check the date sucssed , 
    }

  }






  // to check the get values secure your get values and make sure it is integer befor send the id 
  // paramter to the data Base 
$user = new Users();
  if(isset($_GET['delete'])){

    $var=htmlspecialchars($_GET['delete']);

    if(filter_var($var,FILTER_VALIDATE_INT)){
      echo $var ;
      $user->deleteUsers($var);
        echo "the record was deleted ";
       echo " <meta http-equiv='refresh' content='30;URL=Manage_users.php' /> ";   
     
      }else{
      echo "No false $book_id";
      }
  }else {

  }

    ?>