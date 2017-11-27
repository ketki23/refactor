<?php
class collection
    {
        static public function create()
          {
            $model = new static::$modelName;
            return $model;
          }
           
        public function findAll()
          {
             $databasekra23 = database::getConnection();
             $tableName = get_called_class();
             $sql = 'SELECT * FROM ' . $tableName;
             $statement = $databasekra23->prepare($sql);
             $statement->execute();
                
             $class = static::$modelName;
             $statement->setFetchMode(PDO::FETCH_CLASS, $class);
            
             $recordsSet =  $statement->fetchAll();
             return $recordsSet;
          }
          
        public function findOne($id)
          {
             $databasekra23 = database::getConnection();
             $tableName = get_called_class();
             $sql = 'SELECT * FROM ' . $tableName . ' WHERE id =' . $id;
             $statement = $databasekra23->prepare($sql);
             $statement->execute();
             $class = static::$modelName;
             $statement->setFetchMode(PDO::FETCH_CLASS,$class);
             $recordsSet  =  $statement->fetchAll();
             return $recordsSet;
          }
    }
?>
