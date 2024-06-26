<?php
session_start();

// Data produk
require 'model/dataBarang.php';
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Red store | Ecommerce Website Design</title>
    <link rel="stylesheet" href="./assets/css/style.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,200&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
  </head>
  <body>
   <?php include('layout/navindex.php');?>
    <!----- Featurd Categories--------->
    <div class="categories">
      <div class="small-container">
        <div class="row">
          <div class="col-3">
            <img src="./assets/images/category-1.jpg" alt="" />
          </div>
          <div class="col-3">
            <img src="./assets/images/category-2.jpg" alt="" />
          </div>
          <div class="col-3">
            <img src="./assets/images/category-3.jpg" alt="" />
          </div>
        </div>
      </div>
    </div>
    <!----- Featurd Products--------->
    <div class="small-container">
  <h2 class="title">Featured Products</h2>
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

    <!-------- Offer --------->
    <div class="offer">
      <div class="small-container">
        <div class="row">
          <div class="col-2">
            <img src="./assets/images/exclusive.png" class="offer-img" alt="" />
          </div>
          <div class="col-2">
            <p>Exclusively available on RedStore</p>
            <h1>Smart Band 4</h1>
            <small
              >Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Excepturi rerum maiores eveniet minus ut deserunt vitae
            </small>
            <a href="" class="btn">Buy Now &#8594;</a>
          </div>
        </div>
      </div>
    </div>

    <!------ Testimonial  ------>
    <div class="testimonial">
      <div class="small-container">
        <div class="row">
          <div class="col-3">
            <i class="fa fa-quote-left"></i>

            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, esse
              quae ex sequi praesentium fuga voluptatem placeat voluptates odio
              rerum.
            </p>
            <div class="rating">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star-o"></i>
            </div>
            <img src="./assets/images/user-1.png" alt="" />
            <h3>Sean Parker</h3>
          </div>

          <div class="col-3">
            <i class="fa fa-quote-left"></i>

            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, esse
              quae ex sequi praesentium fuga voluptatem placeat voluptates odio
              rerum.
            </p>
            <div class="rating">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star-o"></i>
            </div>
            <img src="./assets/images/user-2.png" alt="" />
            <h3>Michel Joe</h3>
          </div>

          <div class="col-3">
            <i class="fa fa-quote-left"></i>

            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, esse
              quae ex sequi praesentium fuga voluptatem placeat voluptates odio
              rerum.
            </p>
            <div class="rating">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star-o"></i>
            </div>
            <img src="./assets/images/user-3.png" alt="" />
            <h3>Kaily Jenner</h3>
          </div>
        </div>
      </div>
    </div>

    <!-- Brands -->

    <div class="brands">
      <div class="small-container">
        <div class="row">
          <div class="col-5">
            <img src="./assets/images/logo-godrej.png" alt="" />
          </div>
          <div class="col-5">
            <img src="./assets/images/logo-oppo.png" alt="" />
          </div>
          <div class="col-5">
            <img src="./assets/images/logo-paypal.png" alt="" />
          </div>
          <div class="col-5">
            <img src="./assets/images/logo-philips.png" alt="" />
          </div>
          <div class="col-5">
            <img src="./assets/images/logo-coca-cola.png" alt="" />
          </div>
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
    
    <!-- scripts -->
    <script src="../assets/js/toggleMenu.js"></script>
  </body>
</html>
