<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Home</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="home-container">
        <h1>Titi safitri</h1>
        <p>2257401022</p>
        <p>MI22A</p>
        <a href=welcome style="margin-bottom: 5px;" type="submit" class="logout-button">Logout</a>
    </div>
</body>
</html>
<style>
    .home-container {
    background: silver;
    padding: 40px 30px;
    border-radius: 10px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    width: 400px;
    margin: auto;
    text-align: center;
    margin-top: 100px;
}

h1 {
    font-size: 26px;
    color: #333;
    margin-bottom: 20px;
}

p {
    font-size: 16px;
    color: #555;
    margin-bottom: 30px;
}

.logout-button {
    padding: 10px 20px;
    font-size: 16px;
    color: #fff;
    background-color: #4CAF50;
    text-decoration: none;
    border-radius: 5px;
    display: inline-block;
    transition: background-color 0.3s ease;
}

.logout-button:hover {
    background-color: #0056b3 ;
}

</style>