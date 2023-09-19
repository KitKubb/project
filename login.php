<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <a href="index.php">Home</a>
    <a href="login.php">Login</a>
    <a href="register_e.php">Register For Extra</a>
    <a href="register_m.php">Register For Modeling</a>
    <link rel="stylesheet" href="CSS/login .css">
    
</head>

<body>

    <div class="container" id="container">
            <form action="login_data.php" method="post">
                <h1>เข้าสู่ระบบ</h1>   
                <input type="text" name="x_username" placeholder="ชื่อผู้ใช่" required>                 
                <input type="password" name="x_password" placeholder="รหัสผ่าน" required>           
                <br><br>     
                <button>บันทึก</button>        
            </form>
        
    </div>
</body>
</html>