<?php
//nous allons verifier les informations du formulaire

if (isset($_POST['login']) && isset($_POST['mdp'])) {//on verifie si l'utilisateur a rentre des informations
//mettons le login et le mot de passe dans des variables
$login = $_POST['login'];
$mdp = $_POST['mdp'];
// nous allons verifier si les info entree sont correctes
//connexion a la base de donnees
$nom_serveur = "localhost";
$utilisateur = "root";
$mot_de_passe = "";
$nom_base_donnees = "cert_nat_bd";
$con = mysqli_connect($nom_serveur ,$utilisateur ,$mot_de_passe ,$nom_base_donnees);
//requete pour selectionner l'utilisateur qui a pour email et mot de passe les identifiants qui ont ete entrees
$req = mysqli_query($con , "SELECT * FROM utilisateur where login = '$login' AND mdp = '$mdp'");
$num_ligne = mysqli_num_rows($req); //compter le nombre de ligne ayant rapport a la requette SQL
if ($num_ligne > 0) {
    header("location : accceuil"); //si le nombre de ligne est > 0 ,on sera redirige vers la page acceuil
} else { echo "adresse mail ou mot de passe incorrect"};
}
?>