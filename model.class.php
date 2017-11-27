<?php
class model
    {
              static $columnString;
              static $valueString;
           
              public function save()
               {
                 if (static::$id == '')
                  {
                   $databasekra23=database::getConnection();
                   $array = get_object_vars($this);
                   static::$columnString = implode(', ', $array);
                   static::$valueString = implode(', ',array_fill(0,count($array),'?'));
                   $sql = $this->insert();
                   $stmt=$databasekra23->prepare($sql);
                   $stmt->execute(static::$data);
                  }

                 else
                  {
                   $databasekra23=database::getConnection();
                   $array = get_object_vars($this);
                   $sql = $this->update();
                   $stmt=$databasekra23->prepare($sql);
                   $stmt->execute();
                  }
               }

               private function insert()
                {
                    $databasekra23=database::getConnection();
                    $sql = "Insert into ".static::$tableName." (". static::$columnString . ") values(". static::$valueString . ") ";
                    return $sql;
                }

               private function update()
                {
                    $databasekra23=database::getConnection();
                    $sql = "Update ".static::$tableName. " set ".static::$columnUpdate."='".static::$change."' where id=".static::$id;
                    return $sql;
                }
                                
               public function delete()
                {
                    $databasekra23=database::getConnection();
                    $sql = 'Delete From '.static::$tableName.' WHERE id='.static::$id;
                    $stmt=$databasekra23->prepare($sql);
                    $stmt->execute();
                    echo'Deleted record which has ID :'.static::$id;
                }          
    }
?>

