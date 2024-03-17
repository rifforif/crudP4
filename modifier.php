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
            $id = $_GET['id'];
            $libelle = $_POST['libelle'];
            $prix = $_POST['prix'];
            $date = $_POST['date'];
            $qte = $_POST['quantite'];

            $req= "update produit set libelle='$libelle', prix='$prix',
            date='$date', quantite='$qte' where id='$id'";
            $res = mysqli_query($conn, $req);
            $result= mysqli_fetch_assoc($res);
        }
        header("Location: produit.php");
    ?>
   
</body>
</html>