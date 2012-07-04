<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<?php include("templates.php"); ?>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title>Denver Dr. Kevin Schmidt Pain Management</title>
	<meta name="description" content="">
	<meta name="author" content="">

	<meta name="viewport" content="width=device-width,initial-scale=1">

	<link href='css/global.css?v=3' rel='stylesheet' type='text/css'>
	<link href='css/bootstrap.css' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="css/templates.css?v=2">
	<link rel="stylesheet" type="text/css" href="css/modules.css?v=2">

</head>
<body class="blueflame"> 

	<!-- add height and width. html duh. position them where they belong.  -->

	<div class="navWrapper">


<?php

	echoTemplate("nav", array('align' => 'center','buttons'=>
	array(
		'Home'=>'',
		'My Practice'=>'',
		'Conditions'=>array(
			'Back Pain'=>'',
			'Neck Pain'=>'',
			'Hip Pain'=>'',
			'Knee Pain'=>'',
			'Chronic Pain'=>''
		),
		'Treatments'=>array(
			'Fluoroscopically-Guided Spine Injection'=>array(
				'Kyphoplasty'=>'',
				'Cervical Epidural Steroid Injection'=>'',
				'Radiofrequency Ablation'=>''
			),
			'Neromodulation'=>array(
				'Spinal Cord Stimulation'=>'',
				'Peripheral Nerve Stimulation'=>'',
				'Pulsed Radio Frequency'=>''
			),
			'Ultrasound-guided Peripheral Joint & Nerve Interventions'=>''
		),
		'Referrals'=>'',
		'FAQ'=>'',
		'Contact'=>''
		
		)));
?>


	</div>

	

	<div class="headerWrapper">
			<header class="primary">

				<h1>Dr. Kevin Schmidt, <label>M.D., M.A., Pain Medicine Fellow; Interventional Psychiatrist</label></h1>
				
				<div id="contact-btn-toolbar"class="btn-toolbar">
					<div class="btn-group">
						<button class='btn btn-info btn-provider dropdown-toggle' data-toggle='dropdown'><strong>Health Care Providers</strong>
						 <label>Please click here</label></button>
						<ul class="dropdown-menu">
				            <li><a href="#"> Ask a secure question</a></li>
				            <li><a href="#">Health Care Provider Sign In</a></li>
				            <li class="divider"></li>
				            <li><a href="#">Request a referral</a></li>
			  

			          </ul>
		          	</div>
		      		<div class="btn-group">
						<button class='btn btn-info btn-patient dropdown-toggle' data-toggle='dropdown'><strong>Patients</strong>
							<label>Please click here</label></button>
						<ul class="dropdown-menu">
				            <li><a href="#">Make An Appointment</a></li>
				            <li class="divider"></li>
				            <li><a href="#">Contact Info</a></li>
				            <li><a href="#">Office Location</a></li>
			          </ul>
	          		</div>
	        	</div>
	</div>

	<div class="blueWrapper"> </div>
	<div class="bannerWrapper">      
		<?php
	
	echoTemplate("columnLayout", array(
		"class"=>"floatfix primary",
		"columns"=>array(
			array("contents" => fillTemplate("pictureLink", array('class'=> 'banner_link', 'contents'=>'Comprehensive Pain Management', 'align'=>'centerBottom'))),
			array("contents" => fillTemplate("pictureLink", array('class'=> array('banner_link', 'middle_link'), 'contents'=>'Sports & Musculoskeletal Medicine', 'align'=>'centerBottom'))),
			array("contents" => fillTemplate("pictureLink", array('class'=> array('banner_link', 'middle_link'), 'contents'=>'Occupational Medicine', 'align'=>'centerBottom'))),
			array("contents" => fillTemplate("pictureLink", array('class'=> array('banner_link', 'right_link'), 'contents'=>'Electrodiagnostic Medicine', 'align'=>'centerBottom')))

			)));
			?>


		</header>
	</div>
	<div class="contentWrapper floatfix">

<?php

	echoTemplate("columnLayout", array(
		"class"=>"primary",
		"columns"=>array(
			array("contents" => fillTemplate("pictureLink", array('class'=> 'quick_link', 'contents'=>'Referrals', 'align'=>'leftCenter'))),
			array("contents" => fillTemplate("pictureLink", array('class'=> 'quick_link','contents'=>'FAQ', 'align'=>'leftCenter'))),
			array("contents" => fillTemplate("pictureLink", array('class'=> 'quick_link', 'contents'=>'Share your clinical questions', 'align'=>'leftCenter'))),
			array("contents" => fillTemplate("pictureLink", array('class'=> 'quick_link', 'contents'=>'Write a review', 'align'=>'leftCenter')))
			)));
?>
	<div class="content primary">


		<article class="fleft">
			<h1>Pain Management Denver Colorado</h1>

		</article>

		<div class="bio fleft">
			<div class="frame">
				<img height=179 width=150 src='images/drschmidt.jpg' />
			</div>
		</div>

		<form class="fleft">
			<header>
				<h6>Appointments & Questions</h6>
			<input type=text name=firstname value='First name'/>
			<input type=text name=lastname value='Last name'/>
			<input type=text name=email value='Email address'/>
			<label>
				What is a description of your question or concern?
			</label>
			<textarea>

			</textarea>
			<buttun type=submit />
		</form>


	</div>


	</div>
	<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>