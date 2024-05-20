<?php
 $connexion = new PDO ('mysql:host=localhost;dbname=cert_nat_bd;charset=utf8;','root','');
 if($connexion){
    echo"connexion reussi";
 }
 if(isset($_POST['valider'])){
    if(!empty($_POST['login']) and !empty($_POST['email']) AND !empty($_POST['password'])){
        $login = htmlspecialchars($_POST['login']);
        $email = htmlspecialchars($_POST['email']);
        $password = sha1($_POST['password']);

        if(strlen($_POST['password'])<7){
            $message="votre mot de passe est trop court";
        }elseif(strlen($login)>50 || strlen($email)>50){
            $message="votre login ou votre email est trop long";
        }else{
            $testmail = $connexion ->prepare("SELECT * FROM utilisateur where email = ?");
            $testmail->execute(array($email));

            $controlmail= $testmail-> rowcount();
            if($controlmail==0){
            $insertion = $connexion -> prepare("INSERT into utilisateur(login,email,password) values(?,?,?)");
            $insertion -> execute(array($login,$email,$password));
            $message="votre compte a ete cree";
            }else{$message="cette adresse email a deja ete utilisee";}
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
                <label for="login">login :</label>
                <input type="text" id="login" name="login"placeholder= "login">
            </div>
            <div class="form-group">
                <label for="email">Email :</label>
                <input type="email" id="email" name="email" placeholder= "email">
            </div>
            <div class="form-group">
                <label for="password">Mot de passe :</label>
                <input type="password" id="password" name="password" placeholder= "mot de passe">
            </div>
            <div class="d-grid">
                <button type="buton" name="valider" class="btn btn-success">S'inscrire'</button>
                    <p  class="text-center">
                        <i style="color:red">
                           <?php
                               if (isset($message)){
                                     echo $message;
                                }
                            ?>
                        </i>
                        avez vous un compte ? <a href="connexion.php">connexion</a>
                    </p>
           </div>
        </form>
    </div>
</body>
</html>
