<?php
require ('config.php');

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
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
                    <a href="liste_commandes.php" target='_blank'>
                        <i class="fas fa-briefcase"></i>
                        <span>liste
                            commande 
                        </span>
                    </a>
                </li>

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
                <span>mounchili</span>
                <h2>dashboard</h2>
            </div>
            <div class="user--info">
                <div class="search--box">
                  <i class="fa-solid
                   fa-search"></i>
                  <input type="text" name="" id="" placeholder="search">
             </div>
            </div>
          </div>
         <div class="card--container">
            <h3 class="main--title">today's data</h3>
            <div class="card--wrapper">
                <div class="payment--card light-red">
                    <div class="card--header">
                        <div class="ammount">
                            <span class="title">
                                payment amount
                            </span>
                            <span class="amount--value">
                                500.00$
                            </span>
                        </div>
                        <i class="fas fa-dollar-sign icon"></i>
                    </div>
                      <span class="card-detail">
                        **  ***  ****3484
                      </span>
                </div>
                <div class="payment--card light-purple">
                    <div class="card--header">
                        <div class="ammount">
                            <span class="title">
                                payment order
                            </span>
                            <span class="amount--value">
                                500.00$
                            </span>
                        </div>
                        <i class="fas fa-list icon dark-purpule"></i>
                    </div>
                      <span class="card-detail">
                        **  ***  ****3484
                      </span>
                </div>
                <div class="payment--card light-green">
                    <div class="card--header">
                        <div class="ammount">
                            <span class="title">
                                users inscrit
                            </span>
                            <span class="amount--value">
                                500
                            </span>
                        </div>
                        <i class="fas fa-users icon dark-green"></i>
                    </div>
                      <span class="card-detail">
                        
                      </span>
                </div>
                <div class="payment--card light-blue">
                    <div class="card--header">
                        <div class="ammount">
                            <span class="title">
                                payment order
                            </span>
                            <span class="amount--value">
                                500.00$
                            </span>
                        </div>
                        <i class="fa-solid fa-check icon dark-blue"></i>
                    </div>
                      <span class="card-detail">
                        **  ***  ****3484
                      </span>
                </div>
            </div>
        </div>
   
    </div>
    </section>

</body>
</html>