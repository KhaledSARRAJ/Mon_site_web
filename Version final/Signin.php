        <!--Menu de navigation  -->
        <?php include 'menunavigation.php'; ?>
    <?php

        if(isset($_POST['fromsend'])){

            extract($_POST);

            if(!empty($password) && !empty($cpassword) && !empty($email)){
                if($password == $cpassword){
                  $options = [
                    'cost' => 12,
                ]; 
                $hashpass = password_hash($password, PASSWORD_BCRYPT, $options);
                

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