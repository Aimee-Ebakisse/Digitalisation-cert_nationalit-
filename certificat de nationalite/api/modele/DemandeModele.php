<?php
class DemandeModele{
    private $PDO;

    public function __construct($PDO) {
        $this->db=$PDO;
    }

    public function ListeDemandeService(){
        $req="SELECT * from demandeservice ";
        $pre= $this->db->query($req);
        $pre->execute();
        
        return $pre;
    }
}