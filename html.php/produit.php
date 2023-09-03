<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page de e-commerce - Sparidé Nike</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }

        h1 {
            text-align: center;
            font-style: italic;
            font-family: 'Courier New', Courier, monospace;
        }

        .product {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            margin: 20px -10px;
        }

        .product-item {
            width: 25%;
            padding: 10px;
            text-align: center;
        }

        .product-item img {
            max-width: 100%;
            height: auto;
        }

        img:hover{
            border-radius: 7px;
            transition: 4s;
            box-shadow: 5px 6px 12px gray;
        }
        @media (max-width: 768px) {
            .product-item {
                width: 50%;
            }
        }

        @media (max-width: 480px) {
            .product-item {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <h1>Sparidé Nike De Sport</h1>

    <div class="product">
        <div class="product-item">
            <img src="noir.webp" alt="Produit 1">
            <h3>Nom du produit 1</h3>
            <p>Description du produit 1</p>
            <p>Prix: $350,99</p>
        </div>
        <div class="product-item">
            <img src="rrrr.webp" alt="Produit 2">
            <h3>Nom du produit 2</h3>
            <p>Description du produit 2</p>
            <p>Prix: $300,99</p>
        </div>
        <div class="product-item">
            <img src="bbb.webp" alt="Produit 3">
            <h3>Nom du produit 3</h3>
            <p>Description du produit 3</p>
            <p>Prix: $290,99</p>
        </div>
        <div class="product-item">
            <img src="orange.jpg" alt="Produit 4">
            <h3>Nom du produit 4</h3>
            <p>Description du produit 4</p>
            <p>Prix: $270,99</p>
        </div>
        <!-- Répéter le bloc ci-dessus pour chaque produit -->
    </div>
    <div class="product">
        <div class="product-item">
            <img src="br.webp" alt="Produit 1">
            <h3>Nom du produit 1</h3>
            <p>Description du produit 1</p>
            <p>Prix: $190,99</p>
        </div>
        <div class="product-item">
            <img src="vvv.jpg" alt="Produit 2">
            <h3>Nom du produit 2</h3>
            <p>Description du produit 2</p>
            <p>Prix: $290,99</p>
        </div>
        <div class="product-item">
            <img src="red.webp" alt="Produit 3">
            <h3>Nom du produit 3</h3>
            <p>Description du produit 3</p>
            <p>Prix: $390,99</p>
        </div>
        <div class="product-item">
            <img src="sss.webp" alt="Produit 4">
            <h3>Nom du produit 4</h3>
            <p>Description du produit 4</p>
            <p>Prix: $199,99</p>
        </div>
        <!-- Répéter le bloc ci-dessus pour chaque produit -->
    </div>
    <div class="product">
        <div class="product-item">
            <img src="nb.webp" alt="Produit 1">
            <h3>Nom du produit 1</h3>
            <p>Description du produit 1</p>
            <p>Prix: $250,99</p>
        </div>
        <div class="product-item">
            <img src="ze.jpg" alt="Produit 2">
            <h3>Nom du produit 2</h3>
            <p>Description du produit 2</p>
            <p>Prix: $200,99</p>
        </div>
        <div class="product-item">
            <img src="miz.webp" alt="Produit 3">
            <h3>Nom du produit 3</h3>
            <p>Description du produit 3</p>
            <p>Prix: $260,99</p>
        </div>
        <div class="product-item">
            <img src="mlk.webp" alt="Produit 4">
            <h3>Nom du produit 4</h3>
            <p>Description du produit 4</p>
            <p>Prix: $170,99</p>
        </div>
        <!-- Répéter le bloc ci-dessus pour chaque produit -->
    </div>
</body>
</html>