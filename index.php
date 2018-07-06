
<!DOCTYPE html>
<html>

<head>
<title>Napier Course Database</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="autocomplete.js"></script>
<link href="style2.css" rel="stylesheet" type="text/css" media="all" />

 <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
 <script src="autocomplete.js"></script>
</head>

<body>

	<div class="header">
		<h1> Napier Course Database</h1>
		
	</div>
        
		<div class="mail-form shadow">
			<form  action="search.php" method="post">
				<input  type="search" autocomplete="off" name="search" id="keyword" placeholder="Search...." required="" />
				<div id="results"></div>
				<br>
				<br>
				<br>
				<input type="submit" name="submit" value="submit">
			</form>
		</div>
	
	<div class="footer">
	<p>© 2016 Napier Course Database. All Rights Reserved | Design by  Angelos Athanasakos </p>
	</div>
	

</body>
</html>