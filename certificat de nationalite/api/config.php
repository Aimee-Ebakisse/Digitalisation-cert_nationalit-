<?php
/*
// Configuration de la base de données
define('DB_HOST', 'localhost');
define('DB_NAME', 'Enterprise_Db');
define('DB_USER', 'postgres');
define('DB_PASSWORD', ' yann');

// Connexion à la base de données
try {
    $db = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASSWORD);
    // Pour afficher les erreurs de PDO
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Erreur de connexion à la base de données: " . $e->getMessage();
    exit;
}
*/

//phpinfo();
//exit();

$host='localhost';
$dbname='Enterprise_Db';
$user='postgres';
$pass='yann';
try{
    $PDO = new PDO("pgsql:host=$host;dbname=$dbname",$user,$pass);
    $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  /* // echo"connexion etablie";
    $query="SELECT * FROM client ";
    $rsl=$PDO->query($query);
    if($rsl->rowCount() > 0){
        while($ligne=$rsl->fetch()){
            echo "idclient :".$ligne['idclient'] .'<br> '. "nomclient : " . $ligne['nomclient']. '<br> ' ."emailclt : " . $ligne['emailclt'].'<br>' . "tel :". $ligne['tel'];
        }
    }*/
    

}
catch(PDOException $e){
    echo"erreur: " . $e-> getMessage();

}
?>
