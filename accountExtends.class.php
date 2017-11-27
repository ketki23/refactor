<?php
class account extends model
    {
                  public $email = 'email';
                  public $fname = 'fname';
                  public $lname = 'lname';
                  public $phone =  'phone';
                  public $birthday = 'birthday';
                  public $gender= 'gender';
                  public $password = 'password';
                  static $tableName = 'accounts';
                  static $id = '7';
                  static $columnUpdate = 'birthday';
                  static $change ='1987-04-03';
    }
?>
