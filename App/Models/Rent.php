<?php


    class Rent extends Orm{

        public function __construct() {
            parent::__construct('rents');      
           
        }



        public static function createTable(){
            $db = new Database();
            
            $sql = "CREATE TABLE IF NOT EXISTS ins.rents (
                id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
                start DATETIME NOT NULL,
                end DATETIME,
                price FLOAT,
                id_scooter INT NOT NULL,
                id_user INT NOT NULL,
                FOREIGN KEY (id_scooter) REFERENCES ins.scooters(id) ON DELETE CASCADE,
                FOREIGN KEY (id_user) REFERENCES ins.users(id) ON DELETE CASCADE
                ) ENGINE=InnoDB;";


            $db->queryDataBase($sql);

        }

        public function getAllRentsWithUsername(){
            $sql = "SELECT rents.* , scooters.brain , scooters.model , users.username
            FROM $this->model
            JOIN users ON rents.id_user = users.id
            JOIN scooters ON rents.id_scooter = scooters.id";

        }


    }

?>