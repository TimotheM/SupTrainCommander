<?php
	require("vendor/autoload.php");
?><!doctype html>
<html xml:lang="fr" lang="fr">
   	<head>
        	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        	<meta http-equiv="content-language" content="fr"/>
        	<meta name="language" content="fr"/>
        	<meta name="viewport" content="width=device-width, initial-scale=1.0">
        	<title>Accueil :: SupTrainCommander</title>
			<link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
        	<link rel="stylesheet" type="text/css" href="vendor/zurb/foundation/dist/foundation.min.css">
        	<link rel="stylesheet" type="text/css" href="css/app.css"/>
        	<script type="text/javascript" src="vendor/components/jquery/jquery.min.js"></script>
        	<script type="text/javascript" src="js/app.js"></script>
        	<!--[if lt IE 9]>
            		<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
        	<![endif]-->
    	</head>
        	<body>
					<?php require_once('require/header.block.php'); ?>

					<section>
						<div class="row" id="corps">
							<div class="small-12 medium-12 large-12 columns">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga, quam.</p>
							</div>
						</div>
					</section>

					<?php require_once('require/footer.block.php'); ?>

            		<script src="vendor/zurb/foundation/dist/foundation.min.js"></script>
            		<script>$(document).foundation();</script>
        	</body>
</html>