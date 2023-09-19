<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Extra</title>
    <a href="index.php">Home</a>
    <a href="login.php">Login</a>
    <a href="register_e.php">Register For Extra</a>
    <a href="register_m.php">Register For Modeling</a>
    <link rel="stylesheet" href="CSS/register_e.css">
    
</head>

<body>

    <div class="container" id="container">
            <form action="insertdataex.php" method="post">
                <h1>ลงทะเบียน</h1>  
                <input type="file" name="exphoto" required>   
                <input type="text"  placeholder="ชื่อผู้ใช่" name="exusername" required>                 
                <input type="password" placeholder="รหัสผ่าน" name="expassword" required>           
                <input type="text" placeholder="ชื่อนามสกุล" name="exname" required>           
                <input type="text" placeholder="เพศ" name="exsex" required>            
                <input type="number" placeholder="อายุ" name="exage" min="0" max="60" required>          
                <input type="number" placeholder="น้ำหนัก" name="exweight" min="0" max="90" required>         
                <input type="number" placeholder="ส่วนสูง " name="exheight" min="50" max="250" required>
                <input type="tel" placeholder="เบอร์โทร" name="exphone" required>
                <br><br>     
                <button>บันทึก</button>        
            </form>
        
    </div>
</body>

</html>
