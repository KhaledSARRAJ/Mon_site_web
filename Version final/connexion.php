<?php session_start();
   $_SESSION['pseudo'] = "Gravenlivec";
   $_SESSION['age'] = 18;
   session_unset();
   session_destroy();
?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
    </head>
<body>
  <meta charset="utf-8"/> <!--pour lire les caractéres spéciaux<html  -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>  <!--pour que ton site s'adapte sur tt les appereils <html  -->
            <link rel="stylesheet" type="text/css" href="./css/main.css">
          <h1>Bienvenue sur votre profil</h1>   
          <?php 
             if (isset($_SESSION['pseudo']) && (isset($_SESSION['age']))) {
                   ?>
                   <P>Votre Pseudo : <?= $_SESSION['pseudo']; ?> </P>
                   <P>Votre age : <?= $_SESSION['age']; ?> </P>
                <?php

         }else{
         echo "Veuillez vous connectez à votre compte"; 
         }
?>



        <!--Menu de navigation  -->
        <?php include 'menunavigation.php'; ?>

    <form method="post" id="kk">
        <input type="email" name="email" id="email" placeholder="Votre Email" required/><br>
        <input type="password" name="password" id="password" placeholder="Votre Mot de passe" required/><br>
        <input type="password" name="cpassword" id="cpassword" placeholder="Confirmer votre Mot de passe" required/><br>
        <input type="submit" name="fromsend" id="fromsend" value="Enrengistrer" />
    </form>
    
    <?php

        if(isset($_POST['fromsend'])){

            extract($_POST);

            if(!empty($password) && !empty($cpassword) && !empty($email)){
                if($password == $cpassword){
                  $options = [
                    'cost' => 12,
                ]; 
                $hashpass = password_hash($password, PASSWORD_BCRYPT, $options);
                include 'include/database.php';
                global $db;

            $q = $db->prepare("INSERT INTO users(email,password) VALUES(:email,:password)");
            $q->execute([
                    'email' => $email,
                    'password' => $hashpass,        
                ]);
            }  

            }else{
            echo "Tous les champs ne sont pas complétés";
        }
    } 
?>
</body>
</html>