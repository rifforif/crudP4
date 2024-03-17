<?php

include 'connexion.php';
session_start();
$id = $_GET['id'];

$result = mysqli_query($conn, "delete from produit where id =$id");

header("Location:produit.php");
?>