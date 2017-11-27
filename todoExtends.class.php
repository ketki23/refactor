<?php
class todo extends model
    {
                   public $owneremail = 'owneremail';
                   public $ownerid = 'ownerid';
                   public $createddate = 'createddate';
                   public $duedate = 'duedate';
                   public $message = 'message';
                   public $isdone = 'isdone';
                   static $tableName = 'todos';
                   static $id = '5';
                   static $columnUpdate = 'owneremail';
                   static $change ='jane@njit.edu';
    }
?>

