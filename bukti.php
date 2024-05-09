<?php 
session_start();

// if($_SESSION["jumlahTotal"] === null){
//     header('Location: index.php');
//     exit;
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/bukti.css">
</head>
<body>
<div class="container">
        <div class="bayar-content">
            <div class="img">

                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQGg1Bs3uKVO8WJYCCq3dcqDmuLjHtSmtkoN94qDsqqJQ&s" alt="">
            </div> 
            <h1 class="text">Pembayaran Berhasil!!</h1>
            <h2 class="text">Via <?= $_SESSION["metode_pembayaran"]?></h2>
            <p class="text">00810222-
              <?= $_SESSION["namaPengguna"];?>
            </p>
            <h3 style="font-size: 30px;" class="text"><?= $_SESSION["jumlahTotal"];?></h3>
        </div>
    </div>
</body>
</html>
  
<?php session_destroy();?>

