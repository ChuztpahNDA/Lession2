<?php
namespace app\model;

use app\core\Application;
use Dotenv\Parser\Value;

use function PHPSTORM_META\type;

class Category_repository 
{
    protected $DB;

    public function __construct()
    {
        $this->DB = Application::$app->db->pdo;
    }

    public function get()
    {
        $statement = $this->DB->prepare('SELECT * fROM category');
        $statement->execute();

        $statement->setFetchMode(\PDO::FETCH_ASSOC);
        return $statement->fetchAll();
    }

    public function insert($name, $parent)
    {
        $sql = "INSERT INTO category (nameCategory, parentCategory) VALUES ('$name','$parent')";
        $this->DB->exec($sql);
    }

    public function update($name, $parent)
    {
        $sql = "UPDATE category SET nameCategory='$name', parentCategory='$parent' WHERE nameCategory='$name'";

        // Prepare statement
        $statement = $this->DB->prepare($sql);

        // execute the query
        $statement->execute();
    }
}

?>