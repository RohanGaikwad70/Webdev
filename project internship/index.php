<!DOCTYPE html>
<html>
<head>
	<title>Online Shopping Recommendation System</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<style>
		body {
		  background-image: url("img/back.jpg");
		  background-size: cover;
		  background-repeat: no-repeat;
		  background-position: center center;
		}

		.container {
			margin-bottom:15rem;
			background-image: url('background.jpg');
			background-size: cover;
			background-position: center;
			height: 100vh;
			display: flex;
			flex-direction: column;
			align-items: center;
			justify-content: center;
		}

		.search-bar {
			margin-top: 2rem;
			max-width: 650px;
			width: 90%;
			box-shadow: 0 2px 6px rgba(0,0,0,0.1);
			background-color: #f1f1f1;
			border-radius: 20px;
			padding: 5px;
			display: flex;
			flex-direction: row;
			align-items: center;
		}

		.search-bar input[type=text] {
			flex: 1;
			padding: 10px;
			border: none;
			background: transparent;
			font-size: 1.2rem;
		}

		.search-bar input[type="text"]::placeholder {
			font-size: 1.2rem;
			color: #999;
		}
h1{
	font-size:5.5rem;
	margin-bottom: 2.5rem;
}


	</style>
</head>



<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
		<div class="nav">
			<a class="navbar-brand" href="#">
			    <img src="img/logo.jpg" alt="Logo" width="30" height="30" class="d-inline-block align-top">
			    Recommendo
		  	</a>
		  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		    	<span class="navbar-toggler-icon"></span>
		  	</button>
		  	<div class="collapse navbar-collapse" id="navbarNav">
		    	<ul class="navbar-nav ml-auto">
		      		<li class="nav-item">
		        		<a class="nav-link" href="#">Home</a>
		      		</li>
		      		<li class="nav-item">
		        		<a class="nav-link" href="#">About</a>
		      		</li>
		      		<li class="nav-item">
		        		<a class="nav-link" href="#">Login</a>
		      		</li>
				
		    	</ul>
		  	</div>
		</div>
	</nav>
	<style>
		.zvMe7b{
			display:none;
		}
		.u30d4{
			background-color:white;
			border:1px solid green;
			padding: 10px;
			width: 49%;
			display: inline-flex;
			flex-wrap: wrap;
			min-height: 195px;
		}
	</style>
		<h1 class="text-center  "> Recommendation System</h1>
		<center>
			<form class="search-bar" action="#" method="post">
				<input type="text" name="search" placeholder="Search for products...">
				<button type="submit" class="btn btn-primary ml-3"><i class="fa fa-search"></i></button>
			</form>
		</center>
		<?php
			if(isset($_POST['search'])){
				$search=urlencode(trim($_POST['search']));
				if($search){
					$html=file_get_contents("https://www.google.com/search?tbm=shop&q=$search");
					$htmlf=explode('<div class="xcR77">',$html);
					// $htmldata=explode("",$htmlf[1]);
					$cntchk=count($htmlf);
					$ii=0;
					foreach($htmlf as $key=>$values){
						if($ii > 1 && $ii < ($cntchk-3)){
							?>
								<?php echo $values; ?>
								
							<?php
						}
						$ii++;
					}
				}
			}
		?>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
	<script>
	$(window).on("load",function(){
		$(document).find(".rgHvZc a").each(function(){
			var sdfg=$(this).attr("href");
			$(this).attr("href","https://www.google.com"+sdfg);
			$(this).attr("target","_blank");
		});
	});	
	</script>
