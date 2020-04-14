<!DOCTYPE html>

<html>
    <head>
        <title>Create account</title>
        <meta charset="UTF-8">
        <style type='text/css'>
            body {
                margin: 0;
                padding: 0;
                background-image: url("image/test.jpg");
                background-size: cover;
                color: black; 
            }


            .createbox{
                position: absolute;
                top: 50%;
                left: 50%;
                width: 320px;
                transform: translate(-50%,-60%);
            }

            .createbox h1{
                font-size: 40px;
                border-bottom: 8px solid #00CCCC;
                padding: 10px 0;
                margin-bottom: 60px;
                float: left;
            }

            .textbox {
                width: 100%;
                border-bottom: 1px solid #00CCCC;
                margin: 10px 0;
                padding: 10px 0;
                font-size: 20px;
            }

            .textbox input{
                font-size: 20px;
                background: none;
                margin-left: none;
                border: none;
                outline: none;
            }

            .btn{
                width: 100%;
                background: none;
                font-size: 20px;
                color: #00CCCC;
                margin: 10px 0;
                padding: 10px 0;
                text-align: center;
                border-bottom: 2px solid #00CCCC;
                border: 2px solid #00CCCC;
            }

            .btn:hover{
                background-color: #fff;
            }
    </style>
    </head>
    <body>
        <form class='createbox' action="registration.php?action=Registration" method="post">           
            <h1>Create Account</h1>
            <div class='textbox'>
                <input type='text' name='fullname' placeholder='Fullname'>
            </div>
            <div class='textbox'>
                <input type='text' name='age' placeholder='Age'>
            </div>
            <div class='textbox'>
                <input type='text' name='height' placeholder='Height'>
            </div>
            <div class='textbox'>
                <input type='text' name='weight' placeholder='Weight'>
            </div>
            <div class='textbox'>
                <input type='text' name='sex' placeholder='Sex'>
            </div>
            <div class='textbox'>
                <input type='text' name='username' placeholder='Username'>
            </div>
            <div class='textbox'>
                <input type='Password' name='password' placeholder='Password'>
            </div>
            <div class='textbox'>
                <input type='text' name='dateofbirth' placeholder='Date of birth'>
            </div>
            <div class='textbox'>
                <input type='text' name='phone' placeholder='Phone'>
            </div>
            <input type='submit' class='btn' name='registration' value='Registration'>
        </div>
        </form>
        <?php
            include 'Connect_db1.php';           
            if (isset($_GET['action']) && $_GET['action'] == 'Registration') {                
                $Fullname=$_POST['fullname'];
                $Age=$_POST['age'];
                $Height=$_POST['height'];
                $Weight=$_POST['weight'];
                $Username=$_POST['username'];
                $Password=$_POST['password'];
                $Sex=$_POST['sex'];
                $Dateofbirth=$_POST['dateofbirth'];
                $Phone=$_POST['phone'];
                if ($Fullname=='' || $Age=='' || $Height=='' || $Weight=='' || $Username=='' || $Password=='' || $Sex=='' || $Dateofbirth=='' || $Phone=='') {
                    echo '<h2 style="text-align:center;">Hãy điền đầy đủ thông tin!!!!!!!!!</h2>';
                } else {
                    $check = TRUE;
                    $result = mysqli_query($con, 'SELECT Username FROM `user`');
                    while($row= mysqli_fetch_assoc($result)) {
                        if ($row==$Username) {
                            $check = FALSE;
                        }
                    }
                    if ($check == FALSE) {                        
                        echo '<h2 style="text-align:center;">Tài khoản này đã tồn tại!!!Vui lòng chọn tài khoản khác</h2>';
                    } else {
                        $sql="INSERT INTO `user` (`Fullname`, `Age`, `Height`, `Weight`, `Username`, `Password`, `Sex`, `Date of birth`, `Phone`) VALUES ('$Fullname', '$Age', '$Height', '$Weight', '$Username', '$Password', '$Sex', '$Dateofbirth', '$Phone')";  
                        $query= mysqli_query($con, $sql);
                        echo '<h2 style="text-align:center;">Tạo tài khoản thành công!!!!Quay trở lại<a href="./index.html">trang chủ</a></h2>';
                    }                        
                }
            }
            
        ?>
    </body>
</html>
