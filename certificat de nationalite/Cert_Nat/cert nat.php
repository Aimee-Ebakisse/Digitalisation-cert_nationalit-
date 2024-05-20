<?php
 $connexion = new PDO ('mysql:host=localhost;dbname=cert_nat_bd;charset=utf8;','root','');
 if($connexion){
    echo"connexion reussi";
 }
 if(isset($_POST['valider'])){

    $idCertificat = htmlspecialchars($_POST['idCertificat']);
 }
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ESPACE ADMINISTRATEUR</title>
</head>
<body><form action="" method="POST">
<input type="idCertificat" id="idCertificat" name="idCertificat" placeholder= "id du certificat"></form>

<?php
     $connexion = new PDO ('mysql:host=localhost;dbname=cert_nat_bd;charset=utf8;','root','');
     $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

     $requete = "SELECT * FROM certificatdenationalite ";
     $result = $connexion->query($requete);

     if(!$result){
        echo"";

     }else {
        $nbre_cert = $result->rowcount();
     }
     ?>


    <p><table>
     <th><?php
     echo" COURS D'APPEL DE L'OUEST";
     ?></p></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th>     <th><?php
     echo"REPUBLIQUE DU CAMEROUN";
     ?></th>
</table></p>
<p><table>
     <th><?php
     echo"BAFOUSSAM";
     ?></p></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th>     <th><?php
     echo"Paix-Travail-Patrie";
     ?></th>
</table></p>
<p><table>
     <th><?php
     echo"TRIBUNAL DE PREMIERE INSTENCE DE BAFOUSSAM";
     ?></p></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th>     <th><?php
     echo"********************************";
     ?></th>
</table></p>
<p><table>
     <th><?php
     echo"******************************";
     ?></p></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th>
</table></p>
    <table>
        <tr>
            <th>    <p class="titre"><strong><u>CERTIFICAT DE NATIONALITE CAMEROUNAISE</u></strong>
    <p>Nous soussigne.President de tribunal de premiere instance de Bafoussam.</p>
    <p>Vu les Articles 6(al a) et 42 de la loi n68/LF/3 du 11 juin 1968 portant code de la nation </p>
    <p>camerounaise:</p>
    <p>Vu la requete en date du<?php
         $requete = "SELECT dateDelivrance FROM certificatdenationalite";
         //$requete -> execute(array($idCertificat));
         $result = $connexion->query($requete);
    
         if(!$result){
            echo"";
    
         }else {
            $nbre_cert = $result->rowcount();
         }
while($ligne = $result->fetch(PDO::FETCH_NUM)){
    echo "<tr>";
    foreach($ligne as $valeur){
        echo "<th>$valeur</th>";
    }
    echo "</tr>";
}
?>
<?php

$requete = "SELECT lieuDeivrance FROM certificatdenationalite /**/";
$result = $connexion->query($requete);

if(!$result){

}else {
   $nbre_cert = $result->rowcount();
}
while($ligne = $result->fetch(PDO::FETCH_NUM)){
echo "<tr>";
foreach($ligne as $valeur){
echo "<th>a $valeur</th>";
}
echo "</tr>";
}
?> </p></th>
            
        </tr>
</table>    <table>
        <tr>
            <th>    <p>De M/Mme <?php
         $requete = "SELECT nomDemandeur FROM certificatdenationalite /**/";
         $result = $connexion->query($requete);
    
         if(!$result){
            echo"";
    
         }else {
            $nbre_cert = $result->rowcount();
         }
while($ligne = $result->fetch(PDO::FETCH_NUM)){
    echo "<tr>";
    foreach($ligne as $valeur){
        echo "<th>$valeur</th>";
    }
    echo "</tr>";
}
?><table>
<p>L'enfant a l'obtention d'un certificat de nationalite camerounaise:</p>
Vu
<p class="titre"><strong><u>CERTIFIONS</u></strong></p></table>
<table>
<?php

$requete = "SELECT nomDemandeur FROM certificatdenationalite /**/";
$result = $connexion->query($requete);

if(!$result){

}else {
   $nbre_cert = $result->rowcount();
}
while($ligne = $result->fetch(PDO::FETCH_NUM)){
echo "<tr>";
foreach($ligne as $valeur){
echo "<th>Que $valeur</th>";
}
echo "</tr>";
}
?></table>
<table>
<?php

$requete = "SELECT dateNaissance FROM certificatdenationalite /**/";
$result = $connexion->query($requete);

if(!$result){

}else {
   $nbre_cert = $result->rowcount();
}
while($ligne = $result->fetch(PDO::FETCH_NUM)){
echo "<tr>";
foreach($ligne as $valeur){
echo "<th>ne(e) le $valeur</th>";
}
echo "</tr>";
}
?></table>
<table>
<?php

$requete = "SELECT Arrondissement FROM certificatdenationalite /**/";
$result = $connexion->query($requete);

if(!$result){

}else {
   $nbre_cert = $result->rowcount();
}
while($ligne = $result->fetch(PDO::FETCH_NUM)){
echo "<tr>";
foreach($ligne as $valeur){
echo "<th>Arrondissement de $valeur</th>";
}
echo "</tr>";
}
?></table>
<table>
<?php

$requete = "SELECT region FROM certificatdenationalite /**/";
$result = $connexion->query($requete);

if(!$result){

}else {
   $nbre_cert = $result->rowcount();
}
while($ligne = $result->fetch(PDO::FETCH_NUM)){
echo "<tr>";
foreach($ligne as $valeur){
echo "<th>Depatement de $valeur</th>";
}
echo "</tr>";
}
?></table>
<table>
<?php

$requete = "SELECT nomPere FROM certificatdenationalite /**/";
$result = $connexion->query($requete);

if(!$result){

}else {
   $nbre_cert = $result->rowcount();
}
while($ligne = $result->fetch(PDO::FETCH_NUM)){
echo "<tr>";
foreach($ligne as $valeur){
echo "<th>Fils ou Fille de $valeur</th>";
}
echo "</tr>";
}
?></table>
<table>
<?php

$requete = "SELECT nomMere FROM certificatdenationalite /**/";
$result = $connexion->query($requete);

if(!$result){

}else {
   $nbre_cert = $result->rowcount();
}
while($ligne = $result->fetch(PDO::FETCH_NUM)){
echo "<tr>";
foreach($ligne as $valeur){
echo "<th>Et de $valeur</th>";
}
echo "</tr>";
}
?></table>
<table>
Est camerounaise a titre de Nationalite d'origine.</p>
    <p>En foi de quoi le Certificat de Nationalite lui est delivre pour servir et valoir  ce que de droit.</p>
</table>
<table>
<?php

$requete = "SELECT dateDelivrance FROM certificatdenationalite /**/";
$result = $connexion->query($requete);

if(!$result){

}else {
   $nbre_cert = $result->rowcount();
}
while($ligne = $result->fetch(PDO::FETCH_NUM)){
echo "<tr>";
foreach($ligne as $valeur){
echo "<th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th>FAIT EN NOTRE CABINET AU PALAIS DE JUSTICE DE BAFOUSSAM,LE $valeur</th>";
}
echo "</tr>";
}
?></p>
        <p>LE PRESIDENT DU TRIBUNAL</p></th>
</table>
<div class="d-grid">
                <button type="buton" name="valider" class="btn btn-success">consulter</button>
                    <p  class="text-center">
                        <i style="color:red">
                           <?php
                               if (isset($message)){
                                     echo $message;
                                }
                            ?>
     </div>








</p></th>
            
        </tr>
</table>
<?php
$result->closeCursor();
?>
</body>
</html>