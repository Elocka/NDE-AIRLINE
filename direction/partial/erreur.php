
<?php

 if(isset($erreur) && count($erreur)!=0){
     ?>
    <div class="alert alert-danger">
        <?php
     foreach($erreur as $erreurs){
         echo $erreurs."<br>";
     }?>
     </div>
     <?php
 }
 ?>
 