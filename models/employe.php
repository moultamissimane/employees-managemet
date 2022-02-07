<?php

class Employe {
    
    static public function getAll(){
        $stmt= DB::connect()->prepare("SELECT * FROM employers");
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->close();
        $stmt = null;
    }
    static public function add($data){
        $stmt = DB::connect()->prepare('INSERT INTO employers (nom, prenom, matricule, depart, poste, date_emb, statut) VALUES()');
    }
}
?>









 