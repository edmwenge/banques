
<?php
    include '../configuration/config.php';
    include '../models/compte_client.php';    

    $numero_compte=$_POST['numero_compte'];
    $montant=$_POST['montant'];
    $date_enregistrement =date('y-m-d');
     
    // var_dump($fileName) ;
    // die;
    
    $compte_client= new compte_client($numero_compte,$montant,$date_enregistrement);

    if ($compte_client->cree_solde())
    {
        header('location:../vues/accueil.php');  
    }else echo 'non non';
      
    
  
?>