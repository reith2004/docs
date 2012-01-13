<!doctype html>
<html>
	<head>
		<meta charset="utf-8">

		<title>Laravel - A Framework For Web Artisans</title>

		<?php echo Asset::styles(); ?>
		<?php echo Asset::scripts(); ?>
	</head>
	<body>
		<div class="container">

			<div class="row">
				<div class="span3">
					<h3>Tables of Contents</h3>
					<?php
						$markdown = IoC::resolve('markdown');
						echo $markdown->transform(File::get(VIEW_PATH.'contents.md'));
					?>
				</div>
				<div class="span9">
					<?php echo $contents; ?>
				</div>
			</div>

			<ul>
				<li><a href="http://laravel.com">Official Website</a></li>
				<li><a href="http://forums.laravel.com">Laravel Forums</a></li>
				<li><a href="http://github.com/laravel/laravel">GitHub Repository</a></li>
			</ul>

		</div>
	</body>

</html>
