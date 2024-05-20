<?php
 $connexion = new PDO ('mysql:host=localhost;dbname=cert_nat_bd;charset=utf8;','root','');
 if($connexion){
    echo"connexion reussi";
 }
 if(isset($_POST['valider'])){
    if(!empty($_POST['nomDemandeur']) and !empty($_POST['dateNaissance']) and !empty($_POST['lieuNaissance']) and !empty($_POST['dateDelivrance']) and !empty($_POST['nomPere']) and !empty($_POST['nomMere']) and !empty($_POST['region']) and !empty($_POST['arrondissement'])){
        $matricule = htmlspecialchars($_POST['matricule']);

        $nomDemandeur = htmlspecialchars($_POST['nomDemandeur']);
        $dateNaissance = htmlspecialchars($_POST['dateNaissance']);
        $lieuNaissance = htmlspecialchars($_POST['lieuNaissance']);
        $dateDelivrance = htmlspecialchars($_POST['dateDelivrance']);
        $lieuDeivrance = htmlspecialchars($_POST['lieuDeivrance']);
        $nomPere = htmlspecialchars($_POST['nomPere']);
        $nomMere = htmlspecialchars($_POST['nomMere']);
        $arrondissement = htmlspecialchars($_POST['arrondissement']);
        $region = htmlspecialchars($_POST['region']);
       
            $testnomDemandeur = $connexion ->prepare("SELECT * FROM certificatdenationalite where nomDemandeur = ? and dateNaissance = ?");
            $testnomDemandeur->execute(array($nomDemandeur,$dateNaissance));

            $controlnomDemandeur= $testnomDemandeur-> rowcount();
            if($controlnomDemandeur==0){
            $insertion = $connexion -> prepare("INSERT into certificatdenationalite(matricule/*,nomDelivrant,posteDelivrant,justificatif*/,nomDemandeur,dateNaissance,lieuNaissance,arrondissement,region,nomPere,nomMere,dateDelivrance,lieuDeivrance) values(?/*,?,?,?*/,?,?,?,?,?,?,?,?,?)");
            $insertion -> execute(array($matricule,$nomDemandeur,$dateNaissance,$lieuNaissance,$arrondissement,$region,$nomPere,$nomMere,$dateDelivrance,$lieuDeivrance));
            $message="votre certificat a ete cree";
            }else{$message="ce certificat a deja ete cree";}
        }
    }else {$message="veuillez remplir tous les champs";}
 
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>certificat de nationalite camerounaise </title>
    <link rel="stylesheet" href="inscription.css">
</head>
<body>
<form action="" method="POST">
   
<div class="container">
              <div><p> COURS D'APPEL DE L'OUEST</p>
                        <p> BAFOUSSAM</p>
                        <p> **************************</p>
                        <p>TRIBUNAL DE PREMIERE INSTENCE</p> 
                        <p> DE BAFOUSSAM</p>
                        <p> ****************************</p></div>
                        <div>  <p> REPUBLIQUE DU CAMEROUN</p>
                        <p>Paix-Travail-Patrie</p></div>
                        <p>N<input type="text" id="matricule" name="matricule" placeholder= "ne pas remplire ce champ"></p>
            
                </p>


    <p class="titre"><strong><u>CERTIFICAT DE NATIONALITE CAMEROUNAISE</u></strong>
    <p>Nous soussigne.President de tribunal de premiere instance de Bafoussam.</p>
    <p>Vu les Articles 6(al a) et 42 de la loi n68/LF/3 du 11 juin 1968 portant code de la nation </p>
    <p>camerounaise:</p>
    <p>Vu la requete en date du<input type="date" id="dateDelivrance" name="dateDelivrance" placeholder= "date de Delivrance"> a <input type="text" id="lieuDeivrance" name="lieuDeivrance" placeholder= "lieu de delivrance"> </p>
    <p>De M/Mme <input type="text" id="nomDemandeur" name="nomDemandeur" placeholder= "nom et prenom du beneficiaire"></p>
    <p>L'enfant a l'obtention d'un certificat de nationalite camerounaise:</p>
    Vu
    <p class="titre"><strong><u>CERTIFIONS</u></strong></p>
    Que <input type="text" id="nomDemandeur" name="nomDemandeur" placeholder= "nom et prenom du beneficiaire">
    <p>ne(e) le<input type="date" id="dateNaissance" name="dateNaissance" placeholder= "date de naissance"> a <input type="text" id="lieuNaissance" name="lieuNaissance" placeholder= "lieu de naissance"></p>
    <p>arrondissement de<input type="text" id="arrondissement" name="arrondissement" placeholder= "arrondissement"></p>
    <p>Depatement de <input type="text" id="region" name="region" placeholder= "region"></p>
    <p>Fils ou Fille de <input type="text" id="nomPere" name="nomPere" placeholder= "nomPere"></p>
    <p>Et de <input type="text" id="nomMere" name="nomMere" placeholder= "nomMere"></p>
    <p>Est camerounaise a titre de Nationalite d'origine.</p>
    <p>En foi de quoi le Certificat de Nationalite lui est delivre pour servir et valoir  ce que de droit.</p>

        <p>FAIT EN NOTRE CABINET AU PALAIS DE JUSTICE DE BAFOUSSAM,LE<input type="date" id="dateDelivrance" name="dateDelivrance" placeholder= "date de Delivrance"></p>
        <p>LE PRESIDENT DU TRIBUNAL</p>
    </div>
    <div class="d-grid">
                <button type="buton" name="valider" class="btn btn-success">enregistrer</button>
                    <p  class="text-center">
                        <i style="color:red">
                           <?php
                               if (isset($message)){
                                     echo $message;
                                }
                            ?>
     </div>

</form>
</body>
</html>