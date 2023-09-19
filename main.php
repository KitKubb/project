<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        <title>Main</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12"> <br>
                    <h3>Home</h3>
                </div>
                <div class="col-md-3">
                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
                            Tset
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">A</a>
                        <a href="#" class="list-group-item list-group-item-action">B</a>
                        <a href="#" class="list-group-item list-group-item-action">c</a>
                        <a href="logout.php" class="list-group-item list-group-item-danger" onclick="return confirm('ยืนยันการออกจากระบบ');">ออกจากระบบ</a>
                    </div>
                </div>
                <div class="col-md-9">
                    <h1 class="text-center">Tset Main Content</h1>
                    <h5 class="text-center">สวัสดีคุณ  <?= $_SESSION['x_name'];?></h5>
                </div>
            </div>
        </div>
    </body>
</html>