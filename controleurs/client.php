<?php
    include '../configuration/config.php';
    include '../models/client.php';
    
    $nom =$_POST['nom']; 
    $post_nom =$_POST['post_nom']; 
    $prenom =$_POST['prenom']; 
    $mail =$_POST['mail'];
    $adresse =$_POST['adresse'];
    $num_tel =$_POST['num_tel'];
    $numero_compte = $_POST['numero_compte'];
    $solde=0;
    $date_enregistrement =date('y-m-d');
    $photo=$_FILES["photo"];
        
        // we verify the size of the picture
        if($photo['size']<=7000000) 
        {
            $allowdExtentions = array('jpg', 'png', 'jpeg', 'JPG', 'PNG', 'JPEG');
            $fileInfo = pathinfo($photo['name']);
            $extension = $fileInfo;
            // var_dump($extension["extension"], $allowdExtentions) ;
            // die;
            
            // we verify if the extension is allowed
            if(in_array($extension["extension"], $allowdExtentions)) 
            {
                $tempFolder = $photo['tmp_name'];
                $fileName = basename($photo['name']);
                $destinationFolder = '../img/'.$fileName;
                
                // we verify if the picture is moved in the destination file
                if(move_uploaded_file($tempFolder, $destinationFolder)) 
                {
                  // var_dump($fileName) ;
                  // die;
                  
                    $client= new client($nom,$post_nom,$prenom,$mail,$adresse,$num_tel,$fileName,$numero_compte,$solde,$date_enregistrement);
                
                    if ($client->cree_client())
                    {
                        header('location:../vues/depot.php');  
                    }else echo 'non non';
                 
                } else echo "l'image n'est pas téléchargée";

            } else echo 'le type de l\'image n\'est pas prise en charge';

        } else echo "le fichier est trop large";
      
    
  
?>