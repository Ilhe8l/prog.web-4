<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imagem Aleatória</title>
</head>
<body>
    <div class="container">
    <?php
        echo '<img src="https://picsum.photos/500/600" alt="Imagem Aleatória">';
        echo '<h1>Imagem Aleatória</h1>' 
    ?>
    </div>
</body>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap');

        body {
            font-family: 'Poppins', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f0f0f0;
        }
        .container {
            text-align: center;
            background: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            margin: 0 15px;
        }
        .container img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
        }
        .container h1 {
            margin-top: 10px;
            font-size: 18px;
            color: #333;
        }
    </style>
</html>
