<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body style="background-color: rgb(255, 255, 255);">
    <div class="header">
        <div class="container">
        <h1>Toko Online</h1>
    </div>
    </div>

    <div class="menu">
        <div class="container">
            <input type="checkbox" id="menu-toggle">
            <label for="menu-toggle" class="hamburger">
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
            </label>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Products</a><a/li>
                <li><a href="#">Contact Us</a></li>
            </ul>
            </div>
        </div>
    </div>    

    <div class="content">
        <div class="container">
        <div class="row">
            <div class="banner">
                <img class="img-banner" src="images/image.png" alt="">
            </div>
        </div>
        <div class="row">
            <div class="best-seller">
                <h2>Best seller</h2>
                <div class="Products">
                    <?php
                    include "koneksi.php";
                    $sql ="SELECT*FROM product";
                    $query = mysqli_query($koneksi, $sql);
                    while ($data = mysqli_fetch_array($query)){

                    ?>
                    <a href="pages/detail-product.php?id=<?= $data['id']?>">
                        <div class="product-item">
                            <img class="img-product" src="images/<?= $data['gambar']?>" alt="">
                            <div class="nama-product"><?= $data['nama']?></div>
                        </div>
                    </a>
                    <?php
                    }
                    ?>
                </div>
            </div>  
        </div>
    </div>

    <div class="footer">
        <div class="container">
            <p>&copy; Toko Online Ardi</p>
        </div>
    </div>
</body>
</html>
   