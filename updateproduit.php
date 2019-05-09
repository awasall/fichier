<!DOCTYPE html>
<html>
        <head>
        <Title>Modifier</Title> 
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
         </head>
         <body>
         <header>
         <h1 >Modifier Produit</h1>
         <header>
         <form  action="" method="POST">
         <div class="container">
  <div class="form-group">
    <input type="text"  name="np" class="form-control" id="np" placeholder="A modifier">
    </div>
      
    <div class="form-group">
      <input type="number"  name="pu" class="form-control" id="pu" placeholder="Enter prix unitaire">
    </div>

  
  <div class="form-group">
   
    <input type="number"  name="quantite" class="form-control" id="qt" placeholder="A modifier">
  </div>
  
  <button type="submit" name="modifier" class="btn btn-primary">Modifier</button>
  </div>
</form>
<div class="container">
<?php
 $fp =fopen('produit.txt','a+');  
if (isset ($_POST['modifier']))
{
    $ndp=$_POST['np'];
    $put=$_POST['pu'];
    $qt=$_POST['quantite'];
    $n=10;
    $montant=$put*$qt;
    $t=false;
    
    while (!feof($fp))//recherche
    {
     
      $ligne=fgets($fp);
              $produit=explode(",",$ligne);
        if( strcasecmp($ndp,$produit[0]) ==0){
            $t=true;
            $indice=$produit[0];
            
        }
    }
    if($t==true){
     $indice=preg_replace ($ndp.",".$put.",".$qt.",".$montant.",".$indice);

        //$produit[$indice]=array($ndp,$put,$qt,$montant);
       {
          echo '<tr>';
          if($produit[2]<10) {
            for($i=0; $i<count( $produit); $i++)
            {
              echo '<td class="bg-danger">' .$produit[$i]. '</td>';
            }
          }else
          {
            for($i=0; $i<count( $produit); $i++)
            {
              echo '<td>' .$produit[$i]. '</td>';
            }
          }

        }
            echo '</tr>';
        }
        else
        {
          echo 'ce produit nexiste pas';
        }  
    }
   
   
           
            
          
            ?>
            </div>
            </body>
           </html>