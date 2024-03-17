<?php 
$user= "root";
$mdp ="root";
$bd = "evaluation";

$conn = mysqli_connect("localhost", $user, $mdp, $bd) 
or die("erreur de connexion".mysqli_errno($conn));
?>