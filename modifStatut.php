<?php
$newline='';
$login=$_GET['log'];
 $fp =fopen('aduser.txt','a+');
 
 
    while (!feof($fp))
    {
        $ligne=trim(fgets($fp));
        $user=explode(",",$ligne);
        if($user[0]==($_GET['log'])) 
        {
            if($user[5]=='Bloquer')
            {
                $user[5]='Debloquer';  
            }
            else{
                $user[5]='Bloquer';
                }
        }
        
//fputs($md,$ligne);
$modif=$user[0].",".$user[1].",".$user[2].",".$user[3].",".$user[4].",".$user[5].",".$user[6]."\n";
$newline=$newline.$modif;  
    } 
 fclose($fp);
 $md=fopen('mod.txt','w');
 fputs($md,trim($newline));
 fclose($md);
 $fp='aduser.txt';
$md='mod.txt';
unlink($fp);
rename($md,$fp);
header("Location:listerutilisateur.php");
 
?>
