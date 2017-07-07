<?php
   class MyDB extends SQLite3
   {
      function __construct()
      {
         $this->open('../db/test.db');
      }
   }
   $db = new MyDB();

   $id = $_GET['id'];
   $sql =<<<EOF
      DELETE FROM employees WHERE id = {$id};
EOF;

  $delete = $db->query($sql);

   //$query = "DELETE FROM employees WHERE id = {$_POST['id']} LIMIT 1";
   //$db->query($query);


  



header('Location: http://localhost/portable_database/php/list.php');
?>
