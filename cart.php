<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="src/style.css">

</head>
<body>
<div class="navbar">
    <a href="index.php">
        <h2>Clothing Store</h2>
    </a>
    <a href="cart.php">
        <div class="cart">
            <i class="bi bi-cart"></i>
            <div class="cardAmount" id="cardAmount">10</div>
        </div>
    </a>

</div>

<div id="label" class="text-center"></div>
<div id="shopping-cart" class="shopping-cart"></div>
</body>
<script src="src/Data.js"></script>
<script src="src/cart.js"></script>
</html>