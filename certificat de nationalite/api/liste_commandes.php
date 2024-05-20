<?php
require ('config.php');

?>

<!DOCTYPE html>
<html lang="fr">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Commandes</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    </head>
    <body>
        <div class="sidebar">
            <div class="logo">
                <ul class="menu">
                    <li class="active">
                        <a href="#" >
                        <i class="fas fa-tachometer-alt"></i>
                        <span>dashboard</span>
                    </a>
               </li>
               <li>
                    <a href="#">
                        <i class="fas fa-user"></i>
                        <span>profile</span>
                    </a>
                </li>
                <li>
                    <a href="# ">
                        <i class="fas fa-chart-bar"></i>
                        <span>statistics</span>
                    </a>
                </li>
                <li>
                    <a href="# liste commandes">
                        <i class="fas fa-briefcase"></i>
                        <span>liste
                            commande 
                        </span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <i class="fas fa-cog"></i>
                        <span>settings</span>
                    </a>
                </li>
                <li  class="logout">
                    <a href="#">
                        <i class="fas fa-sign-out-alt"></i>
                        <span>logout</span>
                    </a>
                </li>
            </ul>
         </div>
         </div>
         <div class="main--content">
         <div class="header--wrapper">
            <div class="header--title">
                <h2>dashboard || Liste des commandes </h2>
            </div>
            <div class="user--info">
                <div class="search--box">
                  <i class="fa-solid
                   fa-search"></i>
                  <input type="text" name="" id="" placeholder="search">
             </div>
            </div>
          </div>
        
   
     <div class="tabular--wrapper">
            <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th> IdDemande</th> <th> IdClient</th>  <th> Description</th> 
                    </tr>
                    <tbody> 
                        <?php
                       // if(isset($_POST['listes']))
//require('config.php');

            $url='http://localhost/api/api.php';  //lien vers l'API
        //  $data=  (require ('api.php'));
        $data= file_get_contents($url);   // recuperation des donnes de l'API
          $result= json_decode($data, true);   //decodage des donnees 
         // var_dump($result);
         if($result=== null){
            echo"aucune commande enregistrer";
         }
         else{
        foreach($result as $item){ // parcours et affichage des donnees recuperer
            echo '<tr>'. '<td>'.$item['iddemand']. '</td>'.'<td>'.$item['idclient']. '</td>'.'<td>'.$item['description']. '</td>'.'<td>'."<form method='POST' action=''> <button> <input type='hidden' name='sp' value='iddemand'><input type='submit' name='suppr' value='supprimer'></button></form>".'</td>'.'<br>';
        
      //  if($_SERVER["REQUEST_METHOD"]==="POST"){
            if(isset($_POST['suppr'])){
               // require ('config.php');  
        $supp= $_POST['sp'];
        $del= "DELETE FROM demandeservice WHERE iddemand= $supp";
         $PDO->query($del);
         echo"</tr>";
    
    
            }
          
    }}
           ?>   
                    </tbody>
                </thead>
            </table>
        <?php
            
          //echo json_decode($data);
        //  var_dump($result);
        // echo $result;
          /*  $curl= curl_init();
            curl_setopt($curl,CURLOPT_URL, $url);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, false);
            $result= curl_exec($curl);
            if ($result=== false){
                echo "ERREUR de recuperation";
            }            
            else{
                echo $result;

            }
            curl_close( $curl);*/
      //  $data=http_build_query ('http://localhost/api/api.ph');
       // $result= json_decode($data, true);
       // print $data;
            ?>
        </div>
     </div>
    </div>
    </section>

</body>
</html>