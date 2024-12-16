<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Welcome</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f3f4f6;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .welcome-container {
            text-align: center;
            background: silver;
            padding: 40px 30px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 350px;
        }

        h1 {
            font-size: 28px;
            color: #333;
            margin-bottom: 20px;
        }

        p {
            font-size: 16px;
            color: #555;
            margin-bottom: 30px;
        }

        .button-group {
            display: flex;
            justify-content: center;
            gap: 15px;
        }

        .button {
            padding: 10px 20px;
            font-size: 16px;
            color: #fff;
            background-color:  #4CAF50;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .button:hover {
            background-color: #0056b3;
        }

        .button:active {
            background-color: #004494;
        }
    </style>
</head>
<body>
    <div class="welcome-container">
        <h1>Selamat Datang..</h1>
        <div class="button-group">
            <a href="login" class="button">Login</a>
            <a href="daftar" class="button">Daftar</a>
        </div>
        <p>Create by</p>
        <p>Abdul latief, MI22A, 2257401075</p>
    </div>
</body>
</html>
