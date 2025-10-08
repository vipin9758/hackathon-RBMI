<?php

//  data fillter 
//  function filter_data($data){
//     foreach($data as $key=>$value){
//         $data[$key] = trim($value);
//         $data[$key] = strip_tags($value);
//         $data[$key] = htmlspecialchars($value);
//         $data[$key] =  stripcslashes($value);
//     }
//     return $data;
//  }


// function buyNow(price) {
//   const notyf = new Notyf();
//    notyf.error("Not influence balance");
  
// }



function sweet($sms, $title , $icon){
    echo "<script>
     Swal.fire({
      draggable: true,
        title: '$title',
        text: '$sms',
        icon: '$icon'
      });
    </script>";
}




 function redirect($url)
 {
    echo "<script>
    setTimeout(()=>{
 window.location.href = '$url';
 },1000);
   

    </script>";
 }

function go($url, $time)
 {
    echo "<script>
    setTimeout(()=>{
 window.location.href = '$url';
 },'$time');
    </script>";
 }

//  function select( $table ,$id ){

//   $sql = ("SELECT * FROM `$table` WHERE uniq_id = '$id'");
  

//  }





 function alert($type, $msg) {
   echo '<div class="alert alert-danger mb-5" >
       <strong>' . htmlspecialchars($msg) . '</strong>
   </div>';
}






 function adminlog()
 {
   session_start();
   if(!(isset($_SESSION['email']) && $_SESSION['pass']  == true)){
    redirect('login.php');
   }


 }
 function logout()
 {
   session_start();
   session_destroy();
   redirect('login.php');
 }

// Auto Reload 
function reload_page($sec){
  $page = $_SERVER['PHP_SELF'];
  echo '<meta http-equiv="refresh" content="' . $sec . ';URL=' . $page . '">';
}

function table($tb) {
  global $conn; 
  $sql = "SELECT * FROM $tb"; 
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
      print_r($row);
      }
  } else {
      echo "0 results found.";
  }
}
function tale2($tb) {
  global $conn;
  $data = []; // Array to hold the data

  $sql = "SELECT * FROM $tb";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
          $data[] = $row;
      }
  } else {
      echo "0 results found.";
  }
  return $data; // Return the array of data
}

function sum($conn) {
  $user_id = $_SESSION['user'];

  // Use prepared statement to prevent SQL injection
  $sql = "SELECT SUM(amount) AS totalSum FROM txn WHERE user_id = ? AND txn_type = 'DEBIT'";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("s", $user_id);
  $stmt->execute();
  $result = $stmt->get_result();

  if ($result && $row = $result->fetch_assoc()) {
      $vip = $row['totalSum'] ?? 0; // Handle NULL case
      $stmt->close();
      return $vip;  // Return the total sum instead of echoing
  } else {
      $stmt->close();
      return "Not Sufficient Balance"; // Return a string if no balance
  }
}





 ?>
 




