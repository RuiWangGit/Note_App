<html>
<head>
	<title>Ajax Notes</title>

	<!-- <link rel="stylesheet" type="text/css" href="../assets/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
 -->

	


	<!--To use Jquery -->
	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css">
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js">
	</script>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js">
	</script>

	<!-- To use bootstrap -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="../assets/css/style.css" rel="stylesheet">
	<link href="../assets/css/bootstrap.min.css" rel="stylesheet">
	<script src="../assets/js/bootstrap.min.js"></script>	


	<script>
		$(document).ready(function(){

			 $(document).on('submit', 'form', function(){
			 		console.log("111");
                        $.ajax({
                                url: $(this).attr('action'),
                                type: "post",
                                data: $(this).serialize()
                                }
                        ).done(function(response){
                        		console.log('112');
                                $('#results').html(response);
                        })
                        return false;
             });

              $(document).on('click', '#to-delete', function(){
			 		console.log("222");
                        $.ajax({
                                url: $(this).attr('href'),
                                type: "post",
                                data: $(this).serialize()
                                }
                        ).done(function(response){
                        		console.log('223');
                                $('#results').html(response);
                        })
                        return false;
             });




			 $(document).on("change", "div.note textarea", function(){
                        $(this).parent().submit();
              });

		});


	</script>
	


</head>


<body>
	
	

	<nav class="navbar navbar-default navbar-static-top">
		<div class="container">
			<h3 class="navbar-text nav-left">Note App</h3>
			<!-- <p class="navbar-text nav-left"><a href="#" class="navbar-link">Home</a></p>
			<p class="navbar-text pull-right"><a href="/signin" class="navbar-link">Sign in</a></p> -->
		</div>
	</nav>


<body>

	<div class="container" id="main">
		
		

		<div id="results">
			     <?php require('partial.php'); ?>
		</div>

		

	</div>
		



</body>
</html>