     
<?php
   if (isset($_POST['fromlogin'])) {
   	 extract($_POST);
   }

?>
        <meta charset="utf-8"/> <!--pour lire les caractéres spéciaux<html  -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>  <!--pour que ton site s'adapte sur tt les appereils <html  -->  <!--Menu de navigation  -->
       
            <h1 class="aa">Login</h1>
    <form method="post" class="kk">
        <input type="email" name="lemail" id="lemail" placeholder="Votre Email" required/><br>
        <input type="password" name="lpassword" id="lpassword" placeholder="Votre Mot de passe" required/><br>
        <input type="submit" name="fromlogin" id="fromlogin" value="Login" />
    </form>

 
    <!--passons maintenant au css-->
<style>
    .aa{
 position: absolute;
        top: 33%;
        left: 80%;      
    }
   .kk{   
    position: absolute;
        top: 40%;
        left: 80%;      
    }
