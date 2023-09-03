<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
    <style>
		/* styles pour le menu */

        #nike{
            width: 110px;
            height: 40px;
            margin-top: 12px;
        }
		#nike:hover{
			transform: translate(30px);
			transition: 3s;
		}
		#menu {
			display: flex;
			flex-direction: row;
			justify-content: space-between;
			align-items: center;
			background-color: whitesmoke;
			color: #fff;
			padding: 10px;
		}

		#menu img {
			max-width: 100%;
			height: auto;
		}

		#menu ul {
			list-style: none;
			margin: 0;
			padding: 0;
			display: flex;
		}

		#menu li {
			margin: 0 10px;
		}

		#menu a {
			color: black;
			text-decoration: none;
			font-weight: bold;
			font-size: 18px;
			text-transform: uppercase;
		}

		#menu a:hover {
			transition: 2s;
			text-shadow: 2px 1px black;
			color: rgb(255, 55, 55);
		}

		.email {
			margin-left: 20px;
			font-weight: bold;
			font-size: 18px;
			text-transform: uppercase;
		}

		.email h4 {
			color: black;
			text-decoration: none;
		}

		.email h4:hover {
			transition: 2s;
			text-shadow: 4px 5px 19px black;
		}
		#inscripe{
			width: 99%;
			height: 37em;
			position: absolute;
			margin-left: 1%;
		}
		#title{
			position: relative;
			margin-top: 26%;
			margin-left: 28%;
		}
        #h1{
            position: relative;
			margin-top: 1%;
			margin-left: 2%;
        }
		h1{
			color: rgb(205, 102, 0 );
            font-family :'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
		}
		button{
			width: 20%;
			height: 3em;
			margin-left: 20%;
			background-image: linear-gradient(to bottom right, red , yellow) ;
			border: 0px solid;
			border-top-left-radius: 15px;
			border-bottom-right-radius: 15px;
		}
		button:hover{
			box-shadow: 6px 6px 22px rgb(254, 121, 25);
			transition: 2s;
		}
		#noire{
			background-color: whitesmoke;
			height: 17em;
			width: 100%;
            border-radius: 9px;
		}
        #img1:hover{
            transition: 4s;
            border-radius: 29px;
			border: 0px solid black;
			box-shadow: 6px 6px 22px rgb(188, 188, 188);
			background-image: linear-gradient(to bottom right, black , white) ;
        }
		#img3:hover{
            transition: 4s;
            border-radius: 29px;
			border: 0px solid black;
			box-shadow: 6px 6px 22px rgb(188, 188, 188);
			background-image: linear-gradient(to bottom right, black , white) ;
        }
		#img2{
			margin-left: 26%;
			margin-top: 4%;
            border-radius: 9px;
			margin-bottom: 5%;
		}
		#img2:hover{
			transition: 4s;
            border-radius: 29px;
			border: 0px solid black;
			box-shadow: 6px 6px 22px rgb(188, 188, 188);
			background-image: linear-gradient(to bottom right, black , white) ;
		}
		a{
			cursor: pointer;
		}
		@media screen and (max-width : 700px){
			#menu {
			    display: flex;
			    flex-direction: column;
			    justify-content: space-between;
			    align-items: center;
			    background-color: whitesmoke;
			    color: #fff;
			    padding: 10px;
		    }
			#menu ul {
			    list-style: none;
			    margin: 0;
			    padding: 0;
			    display: flex;
				flex-direction: column;
		    }
			#menu li {
			    margin: 0 10px;
				text-align: center;
				padding: 12px;
			}
			#menu a {
			    color: black;
			    text-decoration: none;
			    font-weight: bold;
			    font-size: 18px;
			    text-transform: uppercase;
		    }
			#nike:hover{
			    transform: translate(0px, 5px);
			    transition: 3s;
		    }
			button{
			    width: 33%;
			    height: 3em;
			    margin-left: 6%;
                margin-top: 14%;
			    background-color: rgb(204, 102, 0 ) ;
			    border: 0px solid;
			    border-top-left-radius: 15px;
			    border-bottom-right-radius: 15px;
		    }
			#title{
			    position: relative;
			    margin-top: 65%;
			    margin-left: 38%;
				font-size: small;
		    }
		    #img1{
				margin-left: -9%;
		    }
			#img2{
				margin-top: 6%;
				margin-left: -16%;
			}
			#img3{
				margin-top: 6%;
				margin-right: -17%;
			}
		}
	</style>
</head>
<body>
    <div id="menu">
		<img src="1200px-Swoosh.svg.png" alt="Logo" id="nike" />
		<ul>
			<li><a id="home">Home</a></li>
			<li><a id="produit">Produit</a></li>
			<script>
				let produit = document.getElementById("produit");
				produit.addEventListener("click" , function(){
					window.location.href = "produit.php";
				})
			</script>
			<li><a id="commande">Commande</a></li>
		</ul>
		<div class="email">
			<h4>
			<?php
            if (isset($_SESSION["email"])) {
                echo $_SESSION["email"]; // Affiche la valeur de la variable "email"
            }else{
				echo $_SESSION["seconn"]; 
			}
            ?>
			</h4>
		</div>
	</div>

	<div>
		<img src="nike2.jpg" id="inscripe">
	</div>
	<div id="title">
		<button id="inscrire">𝚂'𝚒𝚗𝚜𝚌𝚛𝚒𝚛𝚎</button>
	</div><br><br><br>
	<script>
		let butt = document.getElementById("inscrire");
		butt.addEventListener("click" , function(){
			window.location.href = "page22.php";
		})
	</script>
    <br><br><br><br><br><br><br><br>
    <img src="kkk-removebg-preview.png" class="float-start" id="img1">
    <img src="ttt-removebg-preview.png" class="float-end" id="img3">
    <img src="mmm-removebg-preview.png"  id="img2">
	<script>
		let img1 = document.getElementById("img1");
		let img2 = document.getElementById("img2");
		let img3 = document.getElementById("img3");
		img1.addEventListener("click" , function(){
			window.location.href = "img1.php";
		})
		img2.addEventListener("click" , function(){
			window.location.href = "img2.php";
		})
		img3.addEventListener("click" , function(){
			window.location.href = "img3.php";
		})
	</script>


</body>
</html>