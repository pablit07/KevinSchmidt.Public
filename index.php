<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<?php include("templates.php"); ?>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title></title>
	<meta name="description" content="">
	<meta name="author" content="">

	<meta name="viewport" content="width=device-width,initial-scale=1">

	<link href='css/global.css' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="css/templates.css">

</head>
<body>

<?php
	echoTemplate("columnLayout", array(
					"name" => "TitleBar",
					"columns" => 
						array(
								array(
									"contents" => "<div>&nbsp;</div>"
								))));

	echoTemplate("nav", array('buttons'=>
	array(
		'name1'=>'',
		'name2'=>'',
		'name3'=>'',
		'name4'=>'',
		'name5'=>'',
		'name6'=>'',
		'name7'=>''
		
		)));
	
	echoTemplate("columnLayout", array(
		"columns"=>array(
			array("contents" => "<div>&nbsp;</div>"),
			array("contents" => "<div>&nbsp;</div>"),
			array("contents" => "<div>&nbsp;</div>")
			)));

	echoTemplate("columnLayout", array(
		"columns"=>array(
			array("contents" => "<div>&nbsp;</div>"),
			array("contents" => "<div>&nbsp;</div>"),
			array("contents" => "<div>&nbsp;</div>"),
			array("contents" => "<div>&nbsp;</div>")
			)));

	echoTemplate("columnLayout", array(
		"columns"=>array(
			array("contents" => "<div>&nbsp;</div>"),
			array("contents" => fillTemplate("columnLayout",
				array("columns"=>array(
					array("contents" => "<div>&nbsp;</div>"),
					array("contents" => "<div>&nbsp;</div>")
			)))))));
?>



</body>
</html>