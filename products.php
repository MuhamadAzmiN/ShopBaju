<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>All Products - Red store</title>
  <link rel="stylesheet" href="./assets/css/style.css" />
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,200&display=swap"
    rel="stylesheet" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>

<body>
  <?php include('layout/nav.php');?>
  <div class="small-container">
    <div class="row row-2">
      <h2>All Products</h2>
      <select name="" id="">
        <option value="">Default Sorting</option>
        <option value="">Sort by Price</option>
        <option value="">Sort by Popularity</option>
        <option value="">Sort by Rating</option>
        <option value="">Sort by sales</option>
      </select>
    </div>

    <div class="row">
    <?php foreach($_SESSION["data"] as $key => $post ):?>
    <div class="col-4">
      <a href="product-details.php?id=<?= $key ;?>">
        <img src="<?= $post["img"];?>" alt="" />
      </a>
      <h4><?= $post["nama"]; ?></h4> <!-- Memperbaiki untuk menampilkan nama produk -->
      <div class="rating">
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star-o"></i>
      </div>
      <p>Rp <?= $post["harga"];?></p>
    </div>
<?php endforeach ;?>
      </div>
    </div>

    
  </div>

  <!-- Footer -->
  <div class="footer">
    <div class="container">
      <div class="row">
        <div class="footer-col-1">
          <h3>Download Our App</h3>
          <p>
            Download App for Android <br />
            and ios mobile phone
          </p>
          <div class="app-logo">
            <img src="./assets/images/play-store.png" alt="" />
            <img src="./assets/images/app-store.png" alt="" />
          </div>
        </div>
        <div class="footer-col-2">
          <img src="./assets/images/logo-white.png" alt="" />
          <p>
            Lorem, ipsum dolor sit amet consectetur <br />adipisicing elit.
            Porro, eum?
          </p>
        </div>
        <div class="footer-col-3">
          <h3>Useful Links</h3>
          <ul>
            <li>Coupons</li>
            <li>Blog Post</li>
            <li>Return Policy</li>
            <li>Join Affiliate</li>
          </ul>
        </div>

        <div class="footer-col-4">
          <h3>Follow us</h3>
          <ul>
            <li>Facebook</li>
            <li>Twitter</li>
            <li>Instagram</li>
            <li>YouTube</li>
          </ul>
        </div>
      </div>
      <hr />
      <p class="copyright" id="copyright-text">Copyright 2020 - introidx</p>
    </div>
  </div>
  <!-- JS for Toggle menu -->
  <script src="./assets/js/toggleMenu.js"></script>
</body>

</html>