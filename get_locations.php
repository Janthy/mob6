<?php
ini_set('display_errors', 0); // 0 = uit, 1 = aan
error_reporting(E_ALL);


 require 'config.php';

try {
        $db = new PDO($dsn, $username, $password);
        $db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
         
        $sth = $db->query("SELECT * FROM locations");
        $locations = $sth->fetchAll();
        header("Content-type: application/json"); 
        echo json_encode( $locations );
		
}

catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
?>    
 