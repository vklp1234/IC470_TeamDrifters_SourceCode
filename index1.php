<!DOCTYPE html>
<html>
<head>
	<title>Experiment 1 page</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
</head>
<body>
<button id="sistec" class="btn btn-sm btn-primary">SISTEC</button>
<button id="Google"  class="btn btn-sm btn-danger">Google</button>
<br>
<div id="show">
	<h2>Welcome To searching Google, SISTec here.</h2>
</div>

<script type="text/javascript">
	$(document).on('click','button#sistec',function(){
		$("#show").html('<iframe src="https://www.sistec.ac.in/" width="70%" height="480" align="center"></iframe>');
	});
	$(document).on('click','button#Google',function(){
		$("#show").html('<iframe src="http://118.185.43.122/" width="70%" height="480" align="center"></iframe>');
	});
</script>

 
</body>
</html>