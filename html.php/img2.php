<!DOCTYPE html>
<html>
<head>
    <title>Page de Spadri Nike</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        body{
            transition: 4s;
            height: 41em;
			border: 0px solid black;
			box-shadow: 6px 6px 22px rgb(188, 188, 188);
			background-image: linear-gradient(to bottom right, white , black) ;
        }
        .product-image {
            margin-top: 35%;
            transition: 4s;
            max-width: 700px;
            height: 300px;
            margin-left: -12%;
            border-radius: 29px;
			border: 0px solid black;
			box-shadow: 6px 6px 22px rgb(188, 188, 188);
			background-image: linear-gradient(to bottom right, black , white) ;
        }
        .product-image:hover{
            transition: 3s;
            max-width: 734px;
            height: 320px;
            margin-top: 35%;
            margin-left: -12%;
            border-radius: 32px;
			border: 0px solid black;
			box-shadow: 6px 6px 22px rgb(188, 188, 188);
			background-image: linear-gradient(to bottom right, black , white) ;
        }
        #desc{
            margin-top: 18%;
        }
        #color{
            color: white;
        }
        @media screen and (max-width : 700px) {
            body{
            transition: 4s;
            height: 54em;
			border: 0px solid black;
			box-shadow: 6px 6px 22px rgb(188, 188, 188);
			background-image: linear-gradient(to bottom right, white , black) ;
        }
        .product-image {
            margin-top: 30%;
            transition: 4s;
            max-width: 650px;
            height: 250px;
            margin-left: 2%;
            border-radius: 29px;
			border: 0px solid black;
			box-shadow: 6px 6px 22px rgb(188, 188, 188);
			background-image: linear-gradient(to bottom right, black , white) ;
        }
        .product-image:hover{
            transition: 3s;
            max-width: 650px;
            height: 250px;
            margin-top: 30%;
            margin-left: 2%;
            border-radius: 29px;
			border: 0px solid black;
			box-shadow: 6px 6px 22px rgb(188, 188, 188);
			background-image: linear-gradient(to bottom right, white , black) ;
        }
        #desc{
            text-align: center;
        }
        #color{
            color: white;
        }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="mmm-removebg-preview.png" alt="Spadri Nike" class="product-image">
            </div>
            <div class="col-md-6" id="desc">
                <h1 style="font-style: italic;">Spadri Nike de Sport</h1>
                <p><strong>Quantité:</strong>
                <input list="browsers" name="browser">
                    <datalist id="browsers">
                        <option value="2 piéce">
                        <option value="5 piéce">
                        <option value="10 piéce">
                        <option value="14 piéce">
                        <option value="27 piéce">
                    </datalist></p>
                <strong>Prix:</strong><p id="color"> $199.99 x 1 piéce</p>
                <strong>Description:</strong><p id="color"> Des spadri de sport confortables et stylés pour toutes vos activités.</p>
                <button class="btn btn-primary">Acheter</button>
            </div>
        </div>
    </div>
</body>
</html>