<!DOCTYPE html>
<html lang="en">
<head>
    <img height="1" width="1" src="https://www.facebook.com/tr?id=<?=$_GET['pixel'];?>&ev=Lead&noscript=1" />
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmación de pedido</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #333;
        }
        .container {
            text-align: center;
            background: #fff;
            padding: 20px 40px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .container h1 {
            color: #eb8585;
            font-size: 2rem;
        }
        .container p {
            margin: 15px 0;
            font-size: 1rem;
        }


    </style>
</head>
<body>
    <div class="container">
      <h1>Gracias!</h1>
      <p>Su pedido ha sido confirmado con éxito.</p>
      <p>Nos comunicaremos con usted en breve para brindarle más detalles.</p>
    </div>
</body>
</html>

