
<div class="<?php echo 'columnLayout columnLayout'.sizeof($data['columns']);?> <?php echoClass($data); ?> full <?php echo (isset($data['fullHeight']) && $data['fullHeight'])? 'fullHeight' : ''; ?>">
	
	<?php
		foreach ($data['columns'] as $column) {
			?>
				<div class="inner <?php echoClass($column); ?>">
					<?php echo $column['contents']; ?>

				</div>
			<?php
		}
	?>

</div>