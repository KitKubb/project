<?php

    if(isset($_POST['x_username']) && isset($_POST['x_password']) ){
    // alert 
    echo '
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">';
 
    
    require_once 'connect.php';
    
    $x_username = $_POST['x_username'];
    $x_password = sha1($_POST['x_password']);
 
    //check username  & password
      $stmt = $conn->prepare("SELECT id, x_name, x_phone FROM ex_user WHERE x_username = :x_username AND x_password = :x_password");
      $stmt->bindParam(':x_username', $x_username , PDO::PARAM_STR);
      $stmt->bindParam(':x_password', $x_password , PDO::PARAM_STR);
      $stmt->execute();
 
      
      if($stmt->rowCount() == 1){
        
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
       
        $_SESSION['id'] = $row['id'];
        $_SESSION['x_name'] = $row['x_name'];
        $_SESSION['x_phone'] = $row['x_phone'];
 
        
 
          header('Location: main.php'); 
      }else{ 
 
         echo '<script>
                       setTimeout(function() {
                        swal({
                            title: "เกิดข้อผิดพลาด",
                             text: "Username หรือ Password ไม่ถูกต้อง ลองใหม่อีกครั้ง",
                            type: "warning"
                        }, function() {
                            window.location = "login.php"; //หน้าที่ต้องการให้กระโดดไป
                        });
                      }, 1000);
                  </script>';
              $conn = null; 
            } //else
    } //isset 
    
    ?>