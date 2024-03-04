<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
		echo $this->Html->css('index-css');
		echo $this->Html->css('bootstrap.min');
        echo $this->Html->script('jquery.min');
        echo $this->Html->script('bootstrap.min');
	?>
</head>
<body>
    <div class="container-fluid-xl">
		<?php echo $this->element('Components/header-index');?>
        <?php echo $this->fetch('content'); ?>
    </div>
</body>
</html>
