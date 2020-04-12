<!DOCTYPE html>

<html>
    <head>
        <title>Patient list</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php
            include 'Connect_db1.php';
            $result = mysqli_query($con, 'SELECT * FROM user');
            mysqli_close($con);
        ?>
        <style>
            table,th,td {
                border: 1px solid black;
            }
            
            #user-info {
                border: 1px solid #ccc;
                width: 800px;
                margin: 0 auto;
                padding: 25px;
            }
            
            #user-info table {
                margin: 10px auto 0 auto;
                text-align: center;
            }
            
            #user-info h1{
                text-align: center;
            }                        
        </style>
        
        <div id='user-info'>
            <h1>Patient list</h1>
            <a href='newEmptyPHP.php'>Create account</a>
            <table id='user-listing' style='width: 800px'>
                <tr>
                    <td>Fullname</td>
                    <td>Username</td>
                    <td>Password</td>
                    <td>Date of birth</td>
                    <td>Phone</td> 
                </tr>
                <?php
                    while ($row = mysqli_fetch_array($result)) {
                        ?>
                        <tr>
                            <td><?php echo $row['Fullname']?></td>
                            <td><?php echo $row['Username']?></td>
                            <td><?php echo $row['Password']?></td>
                            <td><?php echo $row['Date of birth']?></td>
                            <td><?php echo $row['Phone']?></td>  
                        </tr>
                    <?php } ?>
            </table>
        </div>
        
    </body>
</html>
