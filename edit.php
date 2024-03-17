<?php
include 'connexion.php';

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    
    $sql = "SELECT id, libelle, prix, date, quantite FROM produit WHERE id=$id";
    $result = mysqli_query($conn,$sql);
    if (mysqli_num_rows($result) > 0) {
        $row = $result->fetch_assoc();
        $libelle = $row['libelle'];
        $prix = $row['prix'];
        $date = $row['date'];
        $qte = $row['quantite'];
    } else {
        echo "Aucun étudiant trouvé";
    }
} else {
    echo "Aucun identifiant d'étudiant spécifié";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Modifier un étudiant</title>
</head>
<body>
    <h1>Modifier un étudiant</h1>
    <form action="update.php" method="post">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <label for="nom">Libelle:</label><br>
        <input type="text" id="libelle" name="libelle" value="<?php echo $libelle; ?>"><br>
        <label for="prenom">Prix:</label><br>
        <input type="text" id="prix" name="prix" value="<?php echo $prix; ?>"><br><br>
        <label for="prenom">Date:</label><br>
        <input type="text" id="date" name="date" value="<?php echo $date; ?>"><br><br>
        <label for="prenom">Quantité:</label><br>
        <input type="text" id="quantite" name="quantite" value="<?php echo $qte; ?>"><br><br>
        <input type="submit" value="Modifier">
    </form>
</body>
</html>

<?php
$conn->close();
?>
