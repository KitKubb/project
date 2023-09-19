<?php

    if(isset($_POST['x_name']) && isset($_POST['x_phone']) && isset($_POST['x_username']) && isset($_POST['x_password']) ){
    //  alert 
    echo '
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">';
 
   
    require_once 'connect.php';
    
    $x_name = $_POST['x_name'];
    $x_phone = $_POST['x_phone'];
    $x_username = $_POST['x_username'];
    $x_password = sha1($_POST['x_password']); 
 
    //check duplicat
      $stmt = $conn->prepare("SELECT id FROM ex_user WHERE x_username = :x_username");
      //$stmt->bindParam(':username', $username , PDO::PARAM_STR);
      $stmt->execute(array(':x_username' => $x_username));
      //ถ้า username ซ้ำ ให้เด้งกลับไปหน้าสมัครสมาชิก ปล.ข้อความใน sweetalert ปรับแต่งได้ตามความเหมาะสม
      if($stmt->rowCount() > 0){
          echo '<script>
                       setTimeout(function() {
                        swal({
                            title: "Username ซ้ำ !! ",  
                            text: "กรุณาสมัครใหม่อีกครั้ง",
                            type: "warning"
                        }, function() {
                            window.location = "register_m.php"; //หน้าที่ต้องการให้กระโดดไป
                        });
                      }, 1000);
                </script>';
      }else{ //ถ้า username ไม่ซ้ำ เก็บข้อมูลลงตาราง
              //sql insert
              $stmt = $conn->prepare("INSERT INTO ex_user (x_name,x_phone,x_username,x_password)
              VALUES (:x_name,:x_phone,:x_username,:x_password)");
              $stmt->bindParam(':x_name', $x_name, PDO::PARAM_STR);
              $stmt->bindParam(':x_phone', $x_phone, PDO::PARAM_STR);
              $stmt->bindParam(':x_username', $x_username, PDO::PARAM_STR);
              $stmt->bindParam(':x_password', $x_password, PDO::PARAM_STR);
              $result = $stmt->execute();
              if($result){
                  echo '<script>
                       setTimeout(function() {
                        swal({
                            title: "สมัครสมาชิกสำเร็จ",
                            text: "กรุณารอระบบ Login เพื่อเข้าสู่ระบบ ต่อไป",
                            type: "success"
                        }, function() {
                            window.location = "login.php"; //หน้าที่ต้องการให้กระโดดไป
                        });
                      }, 1000);
                  </script>';
              }else{
                 echo '<script>
                       setTimeout(function() {
                        swal({
                            title: "เกิดข้อผิดพลาด",
                            type: "error"
                        }, function() {
                            window.location = "register_m.php"; //หน้าที่ต้องการให้กระโดดไป
                        });
                      }, 1000);
                  </script>';
              }
              $conn = null; //close connect db
        } //else chk dup
    } //isset 
    
?>