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

	<link href='css/global.css?v=3' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="css/templates.css?v=2">

</head>
<body class="both_backgrounds"> 

	<!-- add height and width. html duh. position them where they belong.  -->

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
			array("contents" => fillTemplate("pictureLink", array('class'=> 'banner_link', 'contents'=>'Comprehensive Pain Management', 'align'=>'centerBottom'))),
			array("contents" => fillTemplate("pictureLink", array('class'=> array('banner_link', 'middle_left_link'), 'contents'=>'Sports & Musculoskeletal Medicine', 'align'=>'centerBottom'))),
			array("contents" => fillTemplate("pictureLink", array('class'=> array('banner_link', 'middle_right_link'), 'contents'=>'Occupational Medicine', 'align'=>'centerBottom'))),
			array("contents" => fillTemplate("pictureLink", array('class'=> array('banner_link', 'right_link'), 'contents'=>'Electrodiagnostic Medicine', 'align'=>'centerBottom')))

			)));

	echoTemplate("columnLayout", array(
		"columns"=>array(
			array("contents" => fillTemplate("pictureLink", array('class'=> 'quick_link', 'contents'=>'Move it around', 'align'=>'leftCenter'))),
			array("contents" => fillTemplate("pictureLink", array('class'=> 'quick_link','contents'=>'Move it around', 'align'=>'leftCenter'))),
			array("contents" => fillTemplate("pictureLink", array('class'=> 'quick_link', 'contents'=>'Move it around', 'align'=>'leftCenter'))),
			array("contents" => fillTemplate("pictureLink", array('class'=> 'quick_link', 'contents'=>'Move it around', 'align'=>'leftCenter')))
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