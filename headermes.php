<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MESSILA CAKE</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #fff;
            color: #000;
        }
        header {
            background-color: #000;
            color: #fff;
            padding: 20px 0;
            text-align: center;
        }
        header h1 {
            margin: 0;
            font-size: 2.5em;
        }
        nav {
            background-color: #333;
            text-align: center;
            padding: 10px 0;
        }
        nav a {
            color: #fff;
            margin: 0 15px;
            text-decoration: none;
            font-size: 1.2em;
        }
        nav a:hover {
            color: #dcdcdc;
        }
    </style>
</head>
<body>

<header>
    <?php
    echo '<h1>MESSILA CAKE</h1>';
    ?>
</header>

<nav>
    <?php
    echo '<a href="index.php">Trang chủ</a>';
    echo '<a href="products.php">Sản phẩm</a>';
    echo '<a href="about.php">Giới thiệu</a>';
    echo '<a href="contact.php">Liên hệ</a>';
    ?>
</nav>

</body>
</html>