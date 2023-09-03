<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            box-sizing: border-box;
        }
        body{
            background-color: black;
        }
        div{
            background-color: rgb(248, 247, 249);
            width: 45%;
            text-align: center;
            height: 40em;
            margin-left: 26%;
            border: 10px solid rgb(43, 42, 47 , 0.1);
        }
        #nike{
            width: 110px;
            height: 40px;
            margin-top: 4%;
        }
        #inp{
            width: 80%;
            height: 40px;
            background-color: rgb(205, 206, 206 , 0.4);
            border: 0px solid ;
            border-radius: 62px;
            padding-left: 17px;
            margin-top: 19px;
        }
        #form{
            margin-top: 30%;
        }
        #sub{
            background-color: black;
            color: white;
            font-family: 'Times New Roman', Times, serif;
            width: 20%;
            height: 3em;
            border: 0px solid black;
            border-radius: 18px;
        }
        #Sub{
            background-color: black;
            color: white;
            font-family: 'Times New Roman', Times, serif;
            width: 20%;
            height: 3em;
            border: 0px solid black;
            border-radius: 18px;
        }
        @media screen and (max-width : 750px){
        div{
            background-color: rgb(248, 247, 249);
            width: 100%;
            text-align: center;
            height: 40em;
            margin-left: 0%;
            border: 14px solid rgb(43, 42, 47 , 0.1);
        }
        #Sub{
            background-color: black;
            color: white;
            font-family: 'Times New Roman', Times, serif;
            width: 23%;
            margin-top: -4%;
            height: 3em;
            border: 0px solid black;
            border-radius: 18px;
        }
        }
    </style>
</head>
<body>
    <div>
        <img src="1200px-Swoosh.svg.png" id="nike">
        <h1 >Se Connecter</h1>
        <form action="" id="form" method="POST">
            <input type="email" name="email" placeholder="Email"id="inp"><br><br>
            <input type="password" name="pass" placeholder="Password" id="inp"><br><br>
            <input type="submit" name="se_conn" value="se connecter" id="sub"><br><br>
        </form>
    </div>
    <?php
    //include "connectiondb.php";
    if ( isset($_POST["se_conn"]) ) {
        try {
            $host = "localhost";
            $db = "nike";
            $user = "root";
            $pass = "";
            $connection = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
            $email = $_POST["email"];
            $pass = $_POST["pass"];
            $sql = 'SELECT * FROM inscription WHERE Email = "'.$email.'" AND Pass = "'.$pass.'"';
            $res = $connection->query($sql);
            if ( $res->rowCount() > 0 ) {
                header("Location:Connec.php");
                exit();
                $_SESSION["seconn"] = $_POST["email"];
            }
        } catch (PDOException $e) {
            die("Erreur:".$e->getMessage());
        }
    }
    ?>

</body>
</html>