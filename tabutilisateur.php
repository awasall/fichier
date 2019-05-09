<!DOCTYPE html>
<html>
        <head>
        <Title>Utilisateurs</Title> 

        </head>
        <body>
       
        <?php 
        $utilisateurs=array(
            array('Sall' ,'Awa ' , 'mohamed'),
            array('Ndao' , 'Ibrahima' , 'ibou'),
            array('Diop' , 'Bamba', 'khadim') ,
           
        );
        echo'<table>
        <tr>
        <th>NOM</th>
        <th>LOGIN</th>
        <th>PASSWORD</th>
        </tr>
        ';   
      for($i=0; $i<3;$i++)
      {
          
          echo '<tr>';
          for($j=0; $j<3;$j++)
          {
              echo '<td>' .$utilisateurs[$i][$j]. '</td>';
          }
          echo "</tr>";
      }
      
        
        ?>  


        
    </body>
</html>
</body>
</html>