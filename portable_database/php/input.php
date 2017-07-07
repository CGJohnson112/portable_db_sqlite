<?php 
//Only processif form isn't empty

 	   class MyDB extends SQLite3
   {
      function __construct()
      {
         $this->open('../db/test.db');
      }
   }
   $db = new MyDB();

   $name = $_POST['name'];
 

 	//insert our data
 	$sql = "INSERT INTO employees (name) VALUES ('$name')";
 	$insert = $db->query($sql);

 	//print response from mySQL
 	/*if($insert) {
 		echo "Success! Row ID: {$mysqli->insert_id}";
 	} else {
 		die("Error: {mysqli->errno} : {$mysqli->error}");
 	}*/

 	//close connection
 	
header('Location: http://localhost/portable_database/index.html');

?>


