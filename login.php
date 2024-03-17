<?php

include 'connexion.php';
session_start();

if(isset($_POST['connecter'])){
    $login = $_POST['login'];
    $mdp = $_POST['mdp'];

    $req = "select id from users where login='$login' 
    and mdp='$mdp'";
    $result = mysqli_query($conn, $req);
    if(mysqli_num_rows($result)==1){
        $_SESSION['login']= $login;
        header("location:produit.php");
    }else{
        $error = "Nom d'utilisateur ou mdp incorrect";
    }
}
mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Connexion</title>
</head>
<body>
    <h2>Connexion</h2>
    <form method="post">
        <label for="login">Nom d'utilisateur:</label><br>
        <input type="text" id="login" name="login" required><br>
        <label for="mdp">Mot de passe:</label><br>
        <input type="password" id="mdp" name="mdp" required><br><br>
        <input type="submit" name="connecter" value="Se connecter">
    </form>
    <?php if(isset($error)) {echo "<h3>$error</h3>";} ?>
</body>
</html>
