<!DOCTYPE html>
<html>
        <head>
        <Title>AUTHENTIFICATION</Title> 
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
         </head>
         <body>
         <div class="container">
         <header>
         <h1 class="text-center">AUTHENTIFICATION</h1>
         <header>
         <form  action='#' method='POST'>
  <div class="form-group">
  <input type="text"  name="login" class="form-control" id="login" placeholder="Enter votre login">
    </div>
  <div class="form-group">
 
    <input type="password"  name="password" class="form-control" id="password" placeholder="Password">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" name="connexion" class="btn btn-primary">Connexion</button>
  
  </div>
  </form>

<?php
               $fp =fopen('aduser.txt','r');
          
                if (isset ($_POST['connexion']))
                {
                  $login=$_POST['login'];
                  $password=$_POST['password'];
                    $lp=false;
                    while (!feof($fp)){
                      $ligne=trim(fgets($fp));
                      $user=explode(",",$ligne);
                      
                      if($user[0]==$login &&  $user[6]==$password){
                        $lp=true;
                        $profil=$user[4];
                        if($profil=="admin"){
                          header("Location:Menuadministrateur.php");
                        }
                        else{
                          header("Location: acceuil.php");
                        }
                     }
                    }
                    fclose($fp);
                    /*if($lp==true){
                      if($profil=="admin"){
                        header("Location:Menuadministrateur.php");
                      }
                      else{
                        header("Location: acceuil.php");

                      }*/
                      if($lp==false){
                        echo"login ou mot de pass incorrect";
  
                      }
    
                          
                            
                    }
                    
                ?>
                
  
        
            
            
           </body>
   </html>         
