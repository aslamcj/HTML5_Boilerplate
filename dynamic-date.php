<!doctype html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>The HTML5 Boilerplate</title>
		<meta name="description" content="HTML5 Boilerplate template">
		<meta name="author" content="Aslam">
		<link rel="stylesheet" href="css/styles.css?v=1.0">
		<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js">
		</script>
		<![endif]-->
	</head>
	<body>
		<?php
			function daysFromNow($days){
				$added = ($days * 24 * 3600) + time();
				return date("Y-m-d", $added);
			}
		?>

		<li>
			<label for="startdate">Please start my subscription on:
			</label>
			<input type="date" min="<?php echo(daysFromNow(1)); ?>"
			max="<?php echo(daysFromNow(91)); ?>" id="startdate"
			name="startdate" required aria-required="true"
			placeholder="<?php echo(daysFromNow(1)); ?>">
		</li>
	</body>
</html>


	