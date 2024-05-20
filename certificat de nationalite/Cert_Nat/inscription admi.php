<?php
 $connexion = new PDO ('mysql:host=localhost;dbname=cert_nat_bd;charset=utf8;','root','');
 if($connexion){
    echo"connexion reussi";
 }
 if(isset($_POST['valider'])){
    if(!empty($_POST['nom']) and !empty($_POST['poste'])){
        $nom = htmlspecialchars($_POST['nom']);
        $poste = htmlspecialchars($_POST['poste']);

        if(strlen($nom)>50 || strlen($poste)>50){
            $message="votre nom ou votre poste est trop long";
        }else{
            $testnom = $connexion ->prepare("SELECT * FROM agentadministratif where nom = ?");
            $testnom->execute(array($nom));

            $controlnom= $testnom-> rowcount();
            if($controlnom==0){
            $insertion = $connexion -> prepare("INSERT into agentadministratif(nom,poste) values(?,?)");
            $insertion -> execute(array($nom,$poste));
            $message="votre compte a ete cree";
            }else{$message="ce nom a deja ete utilisee";}
        }
    }else {$message="veuillez remplir tous les champs";}
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="inscription_img.css">
</head>
<body>
    <div class="container">
        
        <form action="" method="post">
            <h2>Inscription</h2>
            <div class="form-group">
                <label for="nom">Nom :</label>
                <input type="text" id="nom" name="nom" placeholder= "nom">
            </div>
            <div class="form-group">
                <label for="poste">poste :</label>
                <input type="text" id="poste" name="poste" placeholder= "poste">
            </div>
            <div class="d-grid">
                <button type="buton" name="valider" class="btn btn-success">S'inscrire</button>
                    <p  class="text-center">
                        <i style="color:red">
                           <?php
                               if (isset($message)){
                                     echo $message;
                                }
                            ?>
                        </i>
                        avez vous un compte ? <a href="connexion admi.php">connexion</a>
                    </p>
           </div>
        </form>
    </div>
</body>
</html>