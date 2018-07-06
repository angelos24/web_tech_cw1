<!DOCTYPE html>
<html>
<body>

<?php
 
 
//echo "Trying to connect to mysql server....<br>";
// Create connection
function getDbConnection()
{
try {
    $db = new PDO("mysql:host=localhost;dbname=courses;charset=utf8", 'scott', 'tiger');
    // set the PDO error mode to exception
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   // echo "Connected1 successfully ....<br>";
    }
catch(PDOException $e)
    {
    //echo "Connection1 failed: " . $e->getMessage();
    }
return  $db;
}

//echo "Trying to query1   mysql server  database  world....<br>";
function searchForKeyword($keyword) 
{

 $db = getDbConnection();
    $stmt = $db->prepare("SELECT title as title FROM course WHERE title LIKE ? ORDER BY title");

    $keyword = $keyword . '%';
    $stmt->bindParam(1, $keyword, PDO::PARAM_STR, 100);

    $isQueryOk = $stmt->execute();
  
    $results = array();
    //echo "Trying to HAVE RESULTS1 FROM    mysql server  database  courses....<br>";
    if ($isQueryOk) {
      $results = $stmt->fetchAll(PDO::FETCH_COLUMN);
    } else {
      trigger_error('Error executing statement.', E_USER_ERROR);
    }

    $db = null; 

    return $results;
}


?> 

 


</body>
</html>

 
