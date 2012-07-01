
<div class="<?php echo 'columnLayout columnLayout'.sizeof($data['columns']);?> <?php echoClass($data); ?> <?php echo (isset($data['fullHeight']) && $data['fullHeight'])? 'fullHeight' : ''; ?>">
	
	<?php
		$i =0;
		foreach ($data['columns'] as $column) {
			
			?>
				<div class="inner inner<?php echo ++$i?> <?php echoClass($column); ?>">
					<?php echo $column['contents']; ?>

				</div>
			<?php
		}
	?>

</div>