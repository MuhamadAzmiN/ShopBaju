<?php 
session_start();

if(isset($_GET["id"])){
    $id = $_GET["id"];
    unset($_SESSION["daftarBarang"][$id]);

    header("Location: cart.php");
    exit;
    
}