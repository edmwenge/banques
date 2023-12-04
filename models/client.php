
<?php
        class client 
        {
           private $nom;
           private $post_nom;
           private $prenom;
           private $mail;
           private $adresse;
           private $num_tel;
           private $photo;
           private $numero_compte;
           private $solde;
           private $date_enregistrement;
           
           
          public function __construct($nom,$post_nom,$prenom,$mail,$adresse,$num_tel,$photo,$numero_compte,$solde,$date_enregistrement)
          {
            $this->nom=$nom;
            $this->post_nom=$post_nom;
            $this->prenom=$prenom;
            $this->mail=$mail;
            $this->adresse=$adresse;
            $this->num_tel=$num_tel;
            $this->photo=$photo;
            $this->numero_compte=$numero_compte;
            $this->solde=$solde;
            $this->date_enregistrement=$date_enregistrement;
          }
          
          public function cree_client()
          {
            global $bdd;
            $nom=$this->nom;
            $post_nom=$this->post_nom;
            $prenom=$this->prenom;
            $mail=$this->mail;
            $adresse=$this->adresse;
            $num_tel=$this->num_tel;
            $photo=$this->photo;
            $numero_compte=$this->numero_compte;
            $solde=$this->solde;
            $date_enregistrement=$this->date_enregistrement; 
            
            $req = $bdd->prepare('INSERT INTO client (nom,post_nom,prenom,mail,adresse,num_tel,photo,numero_compte,solde,date_enregistrement) VALUES(?,?, ?, ?, ?, ?,?, ?,?,?)');
            
            $exec=$req->execute(array($nom,$post_nom,$prenom,$mail,$adresse,$num_tel,$photo,$numero_compte,$solde,$date_enregistrement)); 
            if ($req->errorCode() !== '00000') 
            {
                $error = $req->errorInfo();
                echo "Erreur lors de l'exécution de la requête : {$error[2]}";
                die();
            }

            static function depot($montant)
            {
                global $bdd;
                $solde=$solde+$montant;
                $req = $bdd->prepare('INSERT INTO client (solde,date_enregistrement) VALUES(?,?) where numero_compte=:numero_comte');
            
                $exec=$req->execute(array($solde,$date_enregistrement)); 
            

            }

            // Affichage de l'ID de la nouvelle ligne insérée
            echo "Nouvelle commande insérée avec l'ID : {$bdd->lastInsertId()}";
                
            // var_dump($exec) ;
            //       die;
                if ($exec) 
                {
                    return true;
                }
            
          }

          public function get_id_client()
          {
            global $bdd;

            $req=$bdd->prepare('SELECT id_client from client where nom=:nom');
            $exec=$req->execute(array(':nom'=>$this->get_nom()));

            if ($exec) 
            {
                if ($id=$req->fetch()) 
                {
                   $id_client=$id['id_client'];
                   $_SESSION['id_client']=$id_client;
                   return $id_client;
                }
                else return null;
            }
        }
          public function getNom()
            {
                return $this->nom;
            }
         public function getPost_nom()
            {
                return $this->post_nom;
            }
         public function getPrenom()
            {
                return $this->prenom;
            }
         public function getMail()
            {
                return $this->mail;
            }
         public function getAdresse()
            {
                return $this->adresse;
            } 
         public function getNum_tel()
            {
            return $this->num_tel;
            } 
        public function get_photo()
            {
            return $this->photo;
            }
        public function getNumero_compte()
            {
            return $this->numero_compte;
            }
        public function getSolde()
            {
            return $this->solde;
            }
         public function getDate_enregistrement()
            {
                return $this->date_enregistrement;
            } 
        public function setSolde()
            {

            }
    }
    ?>
