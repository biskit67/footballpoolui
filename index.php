<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Weather Scraper</title>

    <!-- Bootstrap -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">	
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">	
<style>
	html, body {
		height:100%;
	}
	
	.container {
		background-image:url("images/background.jpe");
		width:100%;
		height:100%;
		background-size:cover;
		background-position:center;
		padding-top:150px;
	}
	
	.center {
		text-align:center;
	}
	
	.white {
		color:white;
	}
	
	p {
		padding-top:15px;
		padding-bottom:15px;
	}
	
	button {
		margin-top:20px;
	}
</style>

</head>
<body>

	<div class="container">
	
	   <div class="row">
	   
			<div class="col-md-6 col-md-offset-3 center">
			
			  <h1 class="center white">Weather Predictor</h1>
			  
			  <p class="lead center white">  Enter your city and you get the weather</p>
				
			  <form>
			  
				<div class="form-group">
				
					<input type="text" class="form-control" name="city" id="city" placeholder="Eg. Miami, Tulsa, Havana"/>
				
				</div>

				<button class="btn btn-success btn-lg">Find My Weather</button>
			  </form>
			  
			  
			  </div>
			
			</div>
			
		</div>
		
	</div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
	</body>
</html>