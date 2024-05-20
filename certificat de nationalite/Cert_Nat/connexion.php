<?php
$connexion = new PDO ('mysql:host=localhost;dbname=cert_nat_bd;charset=utf8;','root','');
if(isset($_POST['valider'])){
    if(!empty($_POST['email']) AND !empty($_POST['password'])){
        $email = htmlspecialchars($_POST['email']);
        $password = sha1($_POST['password']);
        $req=$connexion->prepare("SELECT  * from  utilisateur where email = ? and password =  ?");
        $req->execute(array($email,$password));
        $scp=$req->rowcount();
                if ($scp==1) {header("location:acceuil.php");} 
                else {$message="desole ne nous trouvons ce compte ! veuillez verifier votre addresse mail ou votre mot de passe";}
    }else {$message="veuillez remplir tous les champs";}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="connexion.css">
</head>
<body>

    <div class="container">
        <form action="" method="post">
            <h2>Connexion</h2>
            <div class="form-group">
                <label for="email">email :</label>
                <input type="email" id="email" name="email"placeholder= "email">
            </div>
            <div class="form-group">
                <label for="password">mot de passe:</label>
                <input type="password" id= "password" name="password" placeholder= "mot de passe">
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
                        n'avez vous pas de compte ? <a href="inscription.php">inscription</a>
                    </p>
              </div>
        </form>
    </div>
    
</body>
</html>