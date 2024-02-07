<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
		echo $this->Html->css('bootstrap.min');
        echo $this->Html->script('jquery.min');
        echo $this->Html->script('bootstrap.min');
	?>
</head>
<body>
	<div class="container-fluid">
        
	</div>
    <div class="container-fluid">
        <?php echo $this->fetch('content'); ?>
    </div>
</body>
</html>
