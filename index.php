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

<body>
    <div class="container">
        <div class="card mt-5">
            <div class="card-header">
                <div class="form-inline">
                    <h4>ระบบ Login พื้นฐานแยกสมาชิกและ แอดมิน</h4>
                    
                </div>
                <?php 
                    if(isset($_POST['username'])){
                        $username = $_POST['username'];
                        $password = $_POST['password'];
                        $sql = "SELECT * FROM `users` WHERE username = '$username' AND password = '$password'";
                        $query = $conn->query($sql);
                        $result = $query->num_rows;
                        if($result >= 1){
                            $row = mysqli_fetch_assoc($query);
                            $_SESSION['position'] = $row['position'];
                            header('location: home.php');
                        }else{
                            ?>
                            <h6 class="text-danger">เข้าสู่ระบบไม่สำเร็จ</h6>
                            <?php
                        }
                    }
                ?>
            </div>
            <div class="card-body">
            <form action="index.php"  method="post">
                <div class="form-group">
                    <label for="usernameInput">ชื่อผู้ใช้</label>
                    <input type="text" name="username" class="form-control" id="usernameInput" required>
                </div>
                <div class="form-group">
                    <label for="passwordinput">รหัสผ่าน</label>
                    <input type="password" name="password" class="form-control" id="passwordinput" placeholder="Password" required>
                </div>
                <button type="submit" class="btn btn-success">เข้าสู่ระบบ</button>
            </form>
            </div>
        </div>
    </div>
</body>
</html>