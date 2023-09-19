<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modeling</title>
    <a href="index.php">Home</a>
    <a href="login.php">Login</a>
    <a href="register_e.php">Register For Extra</a>
    <a href="register_m.php">Register For Modeling</a>
    <link rel="stylesheet" href="CSS/register_m.css">
</head>

<body>

    <div class="container" id="container">
            <form action="insertdatam.php" method="post">
                <h1>ลงทะเบียน</h1>  
                <input type="text" name="x_username" placeholder="ชื่อผู้ใช่" id="">                 
                <input type="password" name="x_password" placeholder="รหัสผ่าน" id="">           
                <input type="text" name="x_name" placeholder="ชื่อนามสกุล" id="">           
                <input type="tel" name="x_phone" placeholder="เบอร์โทร" id="">
                <br><br>     
                <button>บันทึก</button>        
            </form>
        
    </div>
</body>
</html>

