<?php
include('./database.php');
include('./table.php');
include('./accounts.php');
include('./todoExtends.php');
include('./accountExtends.php');
include('./collection.php');
include('./model.php');
include('./todos.php');


 echo '<h1>Select all records from Accounts Table</h1>';//displaying all records for accounts table
             $log = accounts::create();
             $output = $log->findAll();
             HtmlTable::displayTable($output);
             
           
             echo '<h1>Select record from Accounts Table where ID is : 10</h1>';//displaying the records from accounts table with id=10
             $output = $log->findOne(10);
             HtmlTable::displayTable($output);
             
             echo '<h1>Select record from Todos Table where ID:3<h1>';//displaying the records from todos table with id=3
             $output = $log->findOne(3);
             HtmlTable::displayTable($output);
            
             echo '<h1>Inserting a row in accounts table</h1>'; //inserting the records in account table
             $obj = new account;
             $obj->save();
             $log = accounts::create();
             $output = $log->findAll();
             HtmlTable::displayTable($output);
             
             echo '<h1>Inserting a row in todos table</h1>';//inserting the records in todos table
             $obj = new todo;
             $obj->save();
             $log = todos::create();
             $output= $log->findAll();
             HtmlTable::displayTable($output);
             
             echo '<h1>Updating birthday in accounts Table</h1>';//updating the accounts table
             $obj = new account;
             $obj->save();
             $log = accounts::create();
             $output = $log->findOne(7);
             HtmlTable::displayTable($output);
             
             echo '<h1>Updating owneremail Column in todos Table</h1>';//updating the todos table
             $obj = new todo;
             $obj->save();
             $log = todos::create();
             $output = $log->findOne(5);
             HtmlTable::displayTable($output);
             
             echo '<h1>Delete record from Todos Table</h1>';//deleting the record from todos table
             $obj = new todo;
             $obj->delete();
             $log = todos::create();
             $output = $log->findOne(7);
             
             echo '<h1>Delete record from accounts Table</h1>';//deleting the record from todos table
             $obj = new todo;
             $obj->delete();
             $log = todos::create();
             $output = $log->findOne(5);
?>
