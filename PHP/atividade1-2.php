<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imagem e Texto com Links</title>
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
        }
        .container a {
            display: block;
            margin-top: 10px;
            font-size: 16px;
            color: #007bff;
            text-decoration: none;
            transition: all 0.3s ease;
        }
        .container a:hover {
            color: #ff6600;
        }

    </style>
</head>
<body>
    <div class="container">
        <?php
            echo '<h1>URLs Absolutas</h1>';
            echo '<a href="https://www.google.com.br/?hl=pt-BR" target="_blank">Google</a>';
            echo '<a href="https://www.w3.org/" target="_blank">W3C</a>';

            echo '<h1>URLs Relativas</h1>';
            echo '<a href="https://youtu.be/dQw4w9WgXcQ?si=Qw1_5uHRUn8a99bg" target="_blank">Youtube</a>';
            echo '<a href="https://www.w3schools.com/js/default.asp" target="_blank">Tutorial Javascript</a>';
        ?>
    </div>
</body>
</html>
