<?php
class Article extends Model{

    public function __construct()
    {
        // Nous définissons la table par défaut de ce modèle
        $this->table = "articles";
    
        // Nous ouvrons la connexion à la base de données
        $this->getConnection();
    }

    /**
     * Retourne un article en fonction de son slug
     *
     * @param string $slug
     * @return void
     */
    public function findBy(string $slug= null, int $id = null){
        if ($slug) {
            $sql = "SELECT * FROM ".$this->table." WHERE `slug`='".$slug."'";
        }elseif ($id) {
            $sql = "SELECT * FROM " . $this->table . " WHERE `id`='" . $id . "'";
        }else{
            $sql = "SELECT * FROM " . $this->table . "WHERE id= '$id' AND slug= '$slug'"; 
        }
        $query = $this->_connection->prepare($sql);
        $query->execute();
        return $query->fetch(PDO::FETCH_ASSOC);  
    }

    public function deleteById(int $id){
        $sql = "DELETE FROM ".$this->table." WHERE `id`='".$id."'";
        $query = $this->_connection->prepare($sql);
        $query->execute();
    }

    public function createArticle(string $title, string $content, string $autor, string $slug){
        $sql = "INSERT INTO ".$this->table." (title, content, autor, slug) VALUES ('$title','$content','$autor', '$slug')";
        $query = $this->_connection->prepare($sql);
        $query->execute();
    }

    public function updateArticle(int $id, string $title, string $content, string $slug){
        $sql = "UPDATE ".$this->table." SET title = '$title', content ='$content', slug = '$slug' WHERE id=$id";
        $query = $this->_connection->prepare($sql);
        $query->execute();

    }
}