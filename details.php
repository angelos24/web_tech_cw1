<?php
$mysqli = new mysqli('localhost' , 'scott' ,'tiger','courses');

         
     
 $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";       
    $number=strlen($actual_link); 
$id = substr($actual_link,$number-7);

        $query =$mysqli->query("SELECT * FROM course WHERE 
        id='$id'") or die ('Error');
              
 

?>


    <html lang="en">

    <head>

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>

    <body style="background-color:#577492">
        <div class="container-fluid">
            <div class="row">
                <div class="container">
                    <ul class="nav nav-pills well well-lg">
                        <li class="active"><a data-toggle="pill" href="#home">Home</a></li>
                        <li><a data-toggle="pill" href="#menu1">What You Will Learn</a></li>
                        <li><a href="index.php">Search</a></li>

                    </ul>

                    <div class="tab-content">
                        <div id="home" class="tab-pane fade in active">

                            <div class="row">


                                <div class="col-sm-12 text-center">
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-sm-7 col-sm-offset-1 well well-lg">
                                    <?php  while ($row = $query->fetch_assoc()){
            $career = $row['careers'];
            $href = $row['href'];
            $wyl = $row['wyl'];
            $level = $row['level'];
            $dept = $row['dept'];
            $subject = $row['subject'];
            
    
		 echo "<div><h1>$row[title]<b> - </b>$row[award] </h1><p> $row[summary]</p></div><br>" ;
         echo "<div><p>$row[overview]  </p></div><br>" ;
         

      
        }?>
                                </div>
                                <div class="<col-sm-3 col-sm-3 well well-lg">
                                    <h1> Careers</h1>
                                    <?php echo "<div>$career</div>";
                            
                                echo  "<h1>Course Details</h1><p> Subject: $subject <br> Department: $dept <br> Level : $level <br> Href: $href</p>" ;
                        
                        ?>
                               <br>
                                <h1>Contact us </h1>
                                <h5> Phone : 0333 9000 6040</h5>

                                </div>

                            </div>

                        </div>
                        <div id="menu1" class="tab-pane fade">
                            <div class="col-sm-12  well well-lg">
                                <h1>What You Will Learn</h1>
                                 <p><?php echo $wyl ?></p></div>

                        </div>
                        <div id="menu2" class="tab-pane fade">
                            <h3>Menu 2</h3>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                        </div>
                        <div id="menu3" class="tab-pane fade">
                            <h3>Menu 3</h3>
                            <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                        </div>
                    </div>
                </div>

            </div>


        </div>



    </body>

    </html>