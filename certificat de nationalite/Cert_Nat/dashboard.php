<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ESPACE ADMINISTRATEUR</title>
</head>
<body>
    <?php
     $connexion = new PDO ('mysql:host=localhost;dbname=cert_nat_bd;charset=utf8;','root','');
     $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

     $requete = "SELECT * FROM certificatdenationalite ORDER BY idCertificat ASC";
     $result = $connexion->query($requete);

     if(!$result){
        echo"la recuperation des donnees a recontre u probleme";

     }else {
        $nbre_cert = $result->rowcount();
     }
    ?>
    <h3><strong><u> Tous nos certificats</u></strong></h3>
    <h4> il y a <?php echo $nbre_cert;?></h4>
    <table>
        <tr>
            <th>idCertificat</th>
            <th>matricule</th>
            <th>nomDelivrant</th>
            <th>posteDelivrant</th>
            <th>justificatif</th>
            <th>nomDemandeur</th>
            <th>dateNaissance</th>
            <th>lieuNaissance</th>
            <th>arrondissement</th>
            <th>region</th>
            <th>nomPere</th>
            <th>nomMere</th>
            <th>dateDelivrance</th>
            <th>lieuDeivrance</th>
        </tr>
  
<?php
while($ligne = $result->fetch(PDO::FETCH_NUM)){
    echo "<tr>";
    foreach($ligne as $valeur){
        echo "<th>$valeur</th>";
    }
    echo "</tr>";
}
?>
</table>
<?php
$result->closeCursor();
?>
</body>
</html>