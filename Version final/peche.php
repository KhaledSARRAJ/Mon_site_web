<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/> <!--pour lire les caractéres spéciaux<html  -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>  
    <meta charset="utf-8"/> <!--pour lire les caractéres spéciaux<html  -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>  <!--pour que ton site s'adapte sur tt les appereils <html  -->
</head>
       <!--Menu de navigation  -->
        <link rel="stylesheet" type="text/css" href="./css/main.css">
         <nav>
                     <div id="logo">
                            <img src="image/profil.jpg" width="50">
                            <h3>KHALED SARRAJ</h3>
                     </div>
                     <div id="liens">
                             <ul>
                                   <li><a href="index.php">Acceuil</a></li>
                                   <li><a href="propos.php">A propos de moi</a></li>
                                   <li><button><a href="mecontacter.php"> Me contacter</button></a></li>

                                   
                             </ul>
                     </div>
                </nav>

<body>
       <div class="split left">
              <div class="centered">
                     <img src="image/mer.jpg" alt="Avatar woman">
             <h1><a href="http://www.oceanic-dev.com/" target="_blank">Oceanic developement</a></h1>

              <p>J'ai eu l'honneur de travailler avec le bureau étude Oceanic Developpement en tant qu'observateur scientifique des pêches. Mes missions principales étaient d'évaluer/échantillonner les captures à bord de bateaux, contrôler la qualitée des produits de la mer/ tester des outils accoustiques (pingers avec les réactions de fuite des dauphins). Pour avoir accès aux photos veuillez me contacter SVP </p>
              <h4> <a href="./embarquement.pdf"> Déclaration d'embarquement </a></h4>
              </div>
       </div>
 <div class="split right">
              <div class="centered">
                     <img src="image/co.jpeg" alt="Avatar woman">
             <h1><a href="https://cofrepeche.fr/"  target="_blank">Cofrepêche/MRAG</a></h1>
              <p>J'ai eu l'honneur aussi de travailler avec le bureau d'étude francais Cofrepêche et anglais MRAG en tant qu'observateur régional sur le Thon rouge pour l'ICCAT/ pour avoir accès aux photos veuillez me contacter SVP </p> 

              </div>
       </div>




         
        
          <p> J'espère que cela vous présente mon parcours universitaire et professionnel, les autres rapports de stages étant disponibles sur demande </p>
        </div>

</body>
<!--la banniere-->
<style>
       body{
              font-family: arial;
              color: grey;
       }
.split{
       height: 100%;
       width: 50%;
       position: fixed;
       z-index: 1 ;
       top: 15%;
       overflow-x: hidden;
       padding-top: 20px;
}
.left {
       left:0;
       background-color: #E6E2A1;
}
.right{
       right: 0;
       background-color: #CEC541;
}
.centered{
       position: absolute;
       top: 40%;
       left: 50%;
       transform: translate(-50%, -50%);
       text-align: center;
}
.centered img{
       width: 200px;
       border-radius: 50%;
}
</style>
</html>
