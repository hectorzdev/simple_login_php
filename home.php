<?php session_start(); 
include 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <title>ระบบ Login PHP พื้นฐาน</title>
</head>
<?php 

    if(!isset($_SESSION['position'])){
        header('location:index.php');
    }

    if(isset($_GET['action'])){
        session_destroy();
        header('location:index.php');
    }
?>
<body>
    <div class="container">
        <div class="card mt-5">
            <div class="card-header">
                <div class="form-inline">
                    <h4>ระบบ Login พื้นฐานแยกสมาชิกและ แอดมิน</h4>
                    <a href="home.php?action=logout" class="btn btn-sm btn-danger ml-auto">ออกจากระบบ</a>
                </div>
                
            </div>
            <div class="card-body">
                <?php if($_SESSION['position'] == 1){ ?>
                    <h1 class="text-center">สวัสดีสมาชิก</h1>
                <?php }elseif ($_SESSION['position'] == 2) { ?>
                    <h1 class="text-center">สวัสดีแอดมิน</h1>
                <?php } ?>
            </div>
        </div>
    </div>
</body>
</html>