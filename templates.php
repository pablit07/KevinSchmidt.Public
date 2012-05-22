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
	
	function getAlignClass_pictureLink($data) {
		if (!(isset($data) && isset($data['align']))) { return ""; }

		$a = $data['align'];

		return $a;
	};

	function getAlignClass($data) {
		if (!(isset($data) && isset($data['align']))) { return ""; }

		$a = $data['align'];

		if ($a === 'center') {
			return "alignCenter";
		}
		if ($a === 'left') {
			return "alignLeft";
		}
		if ($a === 'right') {
			return "alignRight";
		}
	};

	function drawMenu($buttons) {

		echo "<ul>";

		foreach ($buttons as $text => $url) {
			echo "<li>";
			if (is_array($url)) {
					// Sub Menu
				echo "<a class='contains' href=''>";
				echo "<span class=''>$text</span>";
				echo "<span class='caret' ></span>";
				drawMenu($url);
				echo "</a>";
			} else {
					// Node
			?>
					<a href="<?php echo $url; ?>"><?php echo $text; ?></a>
			<?php
			}
			echo "</li>";
		}
		
		echo "</ul>";
	}
?>
