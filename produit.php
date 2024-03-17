<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php include('connexion.php'); session_start(); ?>
<h2>Bienvenue, <?php echo $_SESSION['login']; ?>!</h2>
    
<table>
        <tr bgcolor='#CCCCCC'>
            <th>Libellé</th>
            <th>Prix</th>
            <th>Date</th>
            <th>Quantité</th>
            <th>Actions</th>
        </tr>

        <?php 
 
            $res = "select * from produit";
            $resultat=mysqli_query($conn,$res);
            while($result= mysqli_fetch_assoc($resultat)){
                echo '<tr>';
                echo"<td>".$result['libelle']."</td>";
                echo"<td>".$result['prix']."</td>";
                echo"<td>".$result['date']."</td>";
                echo"<td>".$result['quantite']."</td>";
                if($_SESSION['role']==='admin'){
                echo "<td><a href=\"delete.php?id=$result[id]\"
                onClick=\"return confirm('Etes vous sur ?')\">Supprimer</a></td>";
                echo "<td><a href=\"edit.php?id=$result[id]\">Modifier</a></td>";
                echo"</tr>";
            }
            }
            ?>
    </table>

    <a href="insertion.html">Nouveau produit</a><br><br>
    <p><a href="logout.php">Se déconnecter</a></p>
</body>
</html>