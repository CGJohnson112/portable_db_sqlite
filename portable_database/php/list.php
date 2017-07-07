<html>
<head>

</head>
<body>

<?php
   class MyDB extends SQLite3
   {
      function __construct()
      {
         $this->open('../db/test.db');
      }
   }
   $db = new MyDB();
  

   $sql =<<<EOF
      SELECT * FROM employees ORDER BY id, name;
EOF;

   $ret = $db->query($sql);

   echo "<table border = 1>
   <tr>
   <th>ID</th>
   <th>Name</th>
   <th>Delete entry?</th>

   </tr>";
   while($row = $ret->fetchArray(SQLITE3_ASSOC) ){
      echo "<tr>";
      echo "<td>". $row['id'] . "</td>";
      echo "<td> ". $row['name'] . "</td>";
      echo "<td><a href='delete.php? id={$row['id']}'><input type='submit' value='Delete?'></input></a></td>";
      echo "</tr>";
      
   }
   echo "</table>";
   
   $db->close();
?>
</body>
</html>