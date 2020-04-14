<!DOCTYPE html>

<html>
    <head>
        <title>Login with as user</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="jquery.js"></script>
        <script>
            function Loginuser() {
                location.href='home.php';
            }
        </script>
        <style type='text/css'>
            body {
                margin: 0;
                padding: 0;
                background-image: url("image/123456789.jpg");
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
                font-size: 60px;
                padding: 80px;
                margin: 0;                
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
                margin-left: 15px;
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
        <div class='createbox' method="post">           
            <h1>Login</h1>
            <div class='textbox'>
                <i class="fa fa-user"></i>
                <input type='text' name='username' placeholder='Username'>
            </div>
            <div class='textbox'>
                <i class="fa fa-lock"></i>
                <input type='Password' name='password' placeholder='Password'>
            </div>
            <button onclick="Loginuser()" class="btn">Sign in</button>           
        </div>       
    </body>
</html>
