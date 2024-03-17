<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

    include 'connexion.php';

    if(isset($_POST['submit'])){
        $libelle = $_POST['libelle'];
        $prix = $_POST['prix'];
        $date = $_POST['date'];
        $qte = $_POST['quantite'];

        $res = "insert into produit(libelle, prix, date, quantite) values 
        ('$libelle','$prix', '$date', '$qte')";
        $result = mysqli_query($conn, $res);
    }

    echo "<font color='green'>Insertion réussie.";
	echo "<br/><a href='produit.php'>La liste des produits</a>";
?>
    
</body>
</html>