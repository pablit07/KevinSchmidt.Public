<?php

	function echoClass($data) {
		if (!isset($data)) { return; }

		if (isset($data['class'])) {
			if (is_array($data['class'])) {

				echo implode(' ', $data['class']);
			} else { echo $data['class']; }
		}
	};

	function echoTemplate($name, $data) {
		include("templates/$name.html.php");
	};

	function fillTemplate($name, $data) {
		ob_start();
		echoTemplate($name, $data);
		return ob_get_clean();
	};

?>

<html>
	<head>
		<link rel="stylesheet" href="templates.css" type="text/css">
	</head>

	<body class="full">

		<div style="width: 1040px; margin: 0 auto;">

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
	</body>
<html>
