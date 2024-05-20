<?php
$connexion = new PDO ('mysql:host=localhost;dbname=cert_nat_bd;charset=utf8;','root','');
if(isset($_POST['valider'])){
    if(!empty($_POST['nom']) AND !empty($_POST['poste'])){
        $nom = htmlspecialchars($_POST['nom']);
        $poste = htmlspecialchars($_POST['poste']);
        $req=$connexion->prepare("SELECT  * from  agentadministratif where nom = ? and poste =  ?");
        $req->execute(array($nom,$poste));
        $scp=$req->rowcount();
                if ($scp==1) {header("location:dashboard.php");} 
                else {$message="desole ne nous trouvons ce compte ! veuillez verifier votre nom ou votre poste";}
    }else {$message="veuillez remplir tous les champs";}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion admi</title>
    <link rel="stylesheet" href="connexion.css">
</head>
<body>

    <div class="container">
        <form action="" method="post">
            <h2>Connexion</h2>
            <div class="form-group">
                <label for="nom">nom :</label>
                <input type="text" id="nom" name="nom" placeholder= "nom">
            </div>
            <div class="form-group">
                <label for="poste">poste :</label>
                <input type="text" id="poste" name="poste" placeholder= "poste">
            </div>
            <div class="d-grid">
                    <button type="buton" name="valider" class="btn btn-success">Se connecter</button>
                    <p  class="text-center">
                        <i style="color:red">
                        <?php
                        if (isset($message)){
                            echo $message;
                        }
                        ?>
                        </i>
                        n'avez vous pas de compte ? <a href="inscription admi.php">inscription</a>
                    </p>
              </div>
        </form>
    </div>
    
</body>
</html>