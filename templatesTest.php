<!doctype html >
<html>
	<head>
		<?php include("templates.php"); ?>
		<link rel="stylesheet" href="css/templates.css?v=2" type="text/css">
		<link rel="stylesheet" href="css/global.css" type="text/css">
	</head>

	<body class="">

		<div class="full">

		<div class="" style="width: 1040px; margin: 0 auto;">
 <!--    Samples
		<?php 
			echo fillTemplate("button",
				array(
					"name" => "info",
					"text" => "Patients",
					"class" => array("one", "two")
				)
			);
		?>

		<?php 
			echoTemplate("button",
				array(
					"name" => "info",
					"text" => "Patients",
					"class" => array("one", "two")
				)
			);
		?>

		<?php
			echoTemplate("columnLayout",
				array(
					"name" => "Specialization",
					"columns" =>
						array(
							0 => 
								array(
									"contents" => "<span>friendly</span>"
								)
						),
					"fullHeight" => false
				)
			);
		?>
-->
		<?php
			echoTemplate("columnLayout",
				array(
					"name" => "Specialization",
					"columns" =>
						array(
							0 => 
								array(
									"contents" => "<span>friendly</span>"
								),
							1 => 
								array(
									'contents' => "<div class=''>neighborhood</div>",
									'class' => "center"
								),
							2 => 
								array(
									'contents' => fillTemplate("button",
													array(
														"name" => "info",
														"text" => "Patients",
														"class" => array("one", "two")
													))
								),
							3 => 
								array(
									'contents' => fillTemplate("columnLayout",
													array(
														"name" => "Specialization",
														"columns" =>
															array(
																0 => 
																	array(
																		"contents" => "<span>friendly</span>",
																		"class" => "vCenter"
																	),
																1 => 
																	array(
																		'contents' => "<div class=''>neighborhood</div>"
																	),
																2 => 
																	array(
																		'contents' => fillTemplate("button",
																						array(
																							"name" => "info",
																							"text" => "Patients",
																							"class" => array("one", "two")
																						))
																	)	
															),
														"class" => "contentBlock"
													))
								)
						),
					"class" => "contentBlock",
					"fullHeight" => true
				)
			);
		?>

<?php

	$nav = array(
			'align' => 'center'
			,'buttons' =>
				array(
					"Home" => ""
					,"Friends" => ""
					,"Relatives" => 
						array(
							"Katie" => ""
							,"Sue" => ""
						)
					,"Enemies" =>
						array(
							"Boris" => ""
							,"Natalia" => ""
						)
				)
			);

	echoTemplate("nav", $nav);

?>


<?php 

	$options = array(
		'align' => 'centerBottom'
		,'contents' => '<h1>Hope</h1>'
	);
	echoTemplate("pictureLink", $options);

$options = array(
		'class' => array('specialties', 'sports')
		//,'align' => 'leftCenter'
		,'contents' => '<h1>Dope</h1>'
	);
	echoTemplate("pictureLink", $options);
	/*echoTemplate("fancyButton", 
		array(
			'contents' => 'Mumbly jumbly'
		));*/
?>
<?php

	$nav = array(
			'align' => 'center'
			,'buttons' =>
				array(
					"Home" => "http://www.google.com"
					,"Friends" => "http://paul.com"
					,"Relatives" => 
						array(
							"Katie" => ""
							,"Sue" => ""
						)
					,"Enemies" =>
						array(
							"Boris" => ""
							,"Natalia" => ""
						)
				)
			);

	echoTemplate("nav", $nav);

?>
		</div>
	</body>
<html>
