<?php
$car_id = $_POST['car_id'];
if (!empty($car_id)) {$host = "localhost"; 
$dbname="jds";
//create connection
    $conn = new mysqli($host, $dbname);
	if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    }
	else {
     $SELECT = "SELECT car_id From register Where car_id = ? Limit 101";
	  $INSERT = "INSERT Into register (car_id) values( ?)";
     //Prepare statement
	  $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $car_id);
     $stmt->execute();
     $stmt->bind_result($car_id);
     $stmt->store_result();
     $rnum = $stmt->num_rows;
	 
	 
	 if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("ssssii", $car_id);
	  
	   $stmt->execute();
      echo "New record inserted sucessfully";
     } else {
      echo "Someone already register using this email";
     }
     $stmt->close();
     $conn->close();
    }
}
}
else{ echo "All field are required";
 die();}
	

 ?>