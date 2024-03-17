<?php
include 'connexion.php';

if(isset($_POST['id'])) {
    $id = $_POST['id'];
    $libelle = $_POST['libelle'];
    $prix = $_POST['prix'];
    $date = $_POST['date'];
    $qte = $_POST['quantite'];

    // Mettre à jour les informations de l'étudiant dans la base de données
    $sql = "UPDATE produit SET libelle='$libelle', 
    prix='$prix', date='$date', quantite='$qte' WHERE id=$id";

    if (mysqli_query($conn,$sql)) {
        echo "Étudiant mis à jour avec succès";
        header("Location: produit.php");
    } else {
        echo "Erreur: " . $sql . "<br>";
    }
} else {
    echo "Aucun identifiant d'étudiant spécifié";
}

mysqli_close($conn);
?>
