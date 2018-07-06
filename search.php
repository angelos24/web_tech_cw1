<?php
$mysqli = new mysqli('localhost' , 'scott' ,'tiger','courses');
     
    if (isset($_REQUEST['search'])){
         
        $searchq1 = $_REQUEST['search'];
        

        $query =$mysqli->query("SELECT * FROM course  WHERE 
        title  LIKE '%$searchq1%' LIMIT 10") or die ('Could not Search') ;
     

        
      
    }
    



?>
    <!DOCTYPE html>
    <html>

    <head>
        <title>Napier Course Database</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link href="style2.css" rel="stylesheet" type="text/css" media="all" />
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="autocomplete.js"></script>

    </head>

    <body>

        <div class="header">
            <h1>Napier Course Database</h1>
        </div>
        <div class="mail-form ">
            <form action="search.php" method="post">
                <input type="search" autocomplete="off" name="search" id="keyword" placeholder="Search...." required="" />
                <div id="results"></div>
                <br>
                <br>
                <br>
                <input type="submit" name="submit" value="submit">
            </form>

        </div>
        <br>
        <hr>
        <br>
        <div id="result">
            <h1>Results</h1>
            <?php if(mysqli_num_rows($query)>0) {
        while ($row = $query->fetch_assoc()){
		 echo "<div><h3><a href=details.php?search=<?=$row[id] <b></b>$row[title]<b> - </b>$row[award] <b> - </b>$row[id]</h3></a></div>";
            echo"<p>$row[summary]</p>";
 
        }}
            else {
                echo "<h2>No Course Found</h2>";
            }
    ?>
        </div>



        <div class="footer">
            <p>© 2016 Napier Course Database. All Rights Reserved | Design by Angelos Athanasakos </p>
        </div>

    </body>

    </html>