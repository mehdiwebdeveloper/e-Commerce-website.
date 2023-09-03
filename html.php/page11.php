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
        img{
            width: 99%;
            height: 40em;
            position: absolute;
        }
        button{
            position: relative;
            margin-top: 36%;
            margin-left: 44%;
            width: 12%;
            height: 3em;
            border-radius: 17px;
            border: 1px solid rgb(255, 178, 0);
            background-color: rgb(255, 178, 0);
            font-family: 'Times New Roman', Times, serif;
            font-size: large;
        }
        button:hover{
            box-shadow: 6px 6px 22px rgb(242, 169, 0);
            transition: 2s;
        }
        @media screen and (max-width : 750px ){
            button{
                position: relative;
                margin-top: 90%;
                margin-left: 37%;
                width: 30%;
                height: 3em;
                border-radius: 17px;
                border: 1px solid rgb(255, 178, 0);
                background-color: rgb(255, 178, 0);
                font-family: 'Times New Roman', Times, serif;
                font-size: large;
            }
        }
    </style>
</head>
<body>
    <img src="IMG_1700.JPG">
    <button id="click" >COMMANDER</button>
    <script>
        let but = document.getElementById("click");
        but.addEventListener("click" , function(){
            window.location.href = "page22.php";
        })
    </script>
</body>
</html>