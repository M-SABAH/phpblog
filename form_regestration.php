<!DOCTYPE html>
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            body
            { 
                margin-top: 150px;
                margin-left: 40%; 
                padding: 0;
                background: blueviolet ;
            }
            label
            {
                text-align: left;
            }
            .LAB
            {
                text-align: center;
                margin-left: 10px;
            }

            #form
            {
                padding: 0;
                margin: 0;
                width: 30% ;
                height: 305px ;
                background: cadetblue;
            }
            #form h4
            {
                background: activecaption ;
                color: red;
                text-align: center;


            }
            input 
            {
                background: aqua;
                width: 200px;
                height: 20px;
                margin: 10px;
                padding: 5px;
                font-size: 20px;
            }
            .button button
            { 
                margin-left: 20%;
                padding: 5px;
                width: 150px;
                height: 40px;
                font-family: serif;
                font-style: italic;
                font-size: 20px;
                text-align: center;
                background: seagreen;
                border: 0;
                color: black;
            }

        </style>
    </head>
    <body>
        <div id="form">
            <h4>THE REGESTRATION FORM</h4>
            <form method="POST" action="regstration.php" >
                <label class="LAB">UserName</label>
                <input type="text" name="Name" placeholder="EnterName" required="required"/><br>
                <label class="LAB">UserEmail</label>
                <input type="text" name="Email" placeholder="EnterEmail" required="required"/><br>
                <label class="LAB">UserPass</label>
                <input type="password" name="Pass" placeholder="EnterPass" required="required" /><br>
                <div class="button"><button type="submit" name="send">SUGN UP</button></div>

            </form>
        </div>
    </body>
</html>
<?php  
//include './regstration.php';
//$db = new db();
//
//if (isset($_POST['send'])) {
//    $name = $_POST['Name'];
//    $email = $_POST['Email'];
//    $pass = $_POST['Pass'];
//    $query = "INSERT INTO `users` (`ID`,`USER_NAME`, `UESR_EMAIL`, `USER_PASS`)"
//            . " VALUES (NULL,'$name', '$email', '$pass')";
//    $db->insert($query);
//}
