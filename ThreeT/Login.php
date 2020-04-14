<!DOCTYPE html>

<html>
    <head>
        <title>Create account</title>
        <meta charset="UTF-8">
        <script src ="jquery.js"></script>
        <script>
            function Logindoctor() {
                location.href = "Logindoctor.php";
            }
            function Loginuser() {
                location.href = "Loginpatient.php";                       
            }
        </script>
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
                transform: translate(-50%,-80%);
            }

            .createbox h1{
                font-size: 40px;               
                padding: 85px ;
                margin: 0;
                 
                float: left;                
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
                border-bottom: 3px solid #00CCCC;
                border: 3px solid #00CCCC;
            }

            .btn:hover{
                background-color: #fff;
            }

    </style>
    </head>
    <body>
        <div class='createbox'>
            <h1>LOGIN</h1> 
            <button onclick="Logindoctor()" class="btn">Login with as doctor</button>
            <button onclick="Loginuser()" class="btn">Login with as user</button>
        </div>
    </body>
</html>
