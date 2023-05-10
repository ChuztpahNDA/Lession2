<?php 

class m0003_created_category
{
    public function up()
    {
        $db = app\core\Application::$app->db;
        $sql = "CREATE TABLE category (
            id INT AUTO_INCREMENT PRIMARY KEY,
            nameCategory VARCHAR(255),
            parentCategory VARCHAR(255) 
        ) ENGINE=INNODB";
        
        // create table with query sql
        $db->pdo->exec($sql);
    }

    public function down()
    {
        
    }
}
?>