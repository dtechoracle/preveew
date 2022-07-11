<?php 
if (isset($_GET['veew'])) {
	$link = $_GET['link'];

	$newlink = rand(0000, 9999);
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>VEEW</title>
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
<link href="font_awesome/fontawesome-4.3.0.min.css" rel="stylesheet">
    <link href="bootstrap-4.4.1-dist\css\bootstrap.min.css" rel="stylesheet">
    <style>
		*{
			margin: 0;
			padding: 0;
		}
		.header{
			background: -webkit-linear-gradient(#457fca, #5691c8);
 		 	-webkit-text-fill-color: transparent;
			height: 500px !important;
		}

		.header h1{
			font-size: 3em;
			background: -webkit-linear-gradient(#000000, #2f0743);
  			-webkit-background-clip:  text;
 		 	-webkit-text-fill-color: transparent;
			font-family: 'Josefin Sans', sans-serif;
			text-align: center;
			padding-top: 50px;
			height: 100px;
		}

		.space{
			padding-top: 50px;
			background-color: #0d0d0d;
		}

		.frame{
			height: 500px;
			margin-top: 20px;
			width: 100%;
			z-index: -1;
		}
		/*input[type=url] {
  			width: 130px;
  			background-image: url('searchicon.png');
  			background-position: 10px 10px; 
  			background-repeat: no-repeat;
  			padding: 0;
  			margin-top: 20px;
  			-webkit-transition: width 0.4s ease-in-out;
  			transition: width 0.4s ease-in-out;
		}

input[type=url]:focus {
  width: 100%;
}*/

		.sub {
			margin-top: 0;
		}

		.enter{
			margin-top: 200px;
		}

		@media screen and (max-width: 600px) {
  		.enter {
  			margin-top: 0;
  		}
  	}

	.shrt{
		border-bottom-left-radius: 100px;
		border-top-left-radius: 100px;
	}

	.pdf{
		position: absolute;
		border-top-left-radius: 100px;
		border-bottom-left-radius: 100px;
		left: 19.5px;
	}

	.side{
		top: 400px;
		position: fixed;
		left: 1150px;
	}

	@media screen and (max-width: 600px) {
  		.side {
  		top: 400px;
		position: fixed;
		left: 250px;
  		}
  	}
	</style>
</head>
<body style="background-color: whitesmoke;">
<h1>pre-VEEW</h1>
<div class="container">
	<!-- <?php echo $newlink; ?> -->
	<form action="index.php" method="GET">
		<div class="row">
			<div class="col-md-6 enter">
	<input class="form-control" type="url" name="link" placeholder="Enter url to preview.....">
	<br>
	<input class="btn btn-outline-primary sub form-control" data type="submit" name="veew">
</div>
</form>
<div class="col-md-6">
<iframe src="<?php echo $link ?>" class="form-control frame"></iframe>
</div>
</div>
</container>
<div class="side" style="position: absolute;">
<div class="pdf btn btn-outline-primary">web to pdf</div>
<br>
<br>
<div class="shrt btn btn-outline-success">link shortener</div>
</div>
</body>
</html>