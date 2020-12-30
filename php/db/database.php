<?php

class DatabaseHelper{
    
    private $db;

    public function __construct($servername, $username, $password, $dbname){
        $this->db = new mysqli($servername, $username, $password, $dbname);
        if($this->db->connect_error){
            die("Connesione fallita al db");
        }
    }

    public function getArticleById($id){
        $stmt = $this->db->prepare("SELECT nome, tipo, marca, foto, descrizione, prezzo, quantità FROM prodotti WHERE id = ?");
        $stmt->bind_param("id", $id);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }
    
    
}

?>
