<!doctype html>
<html>
	<head>
		<meta charset="utf-8">

		<title>Laravel - A Framework For Web Artisans</title>

		<?php echo Asset::styles(); ?>
		<?php echo Asset::scripts(); ?>
	</head>
	<body style="padding-top: 60px;">

		<div class="navbar navbar-fixed" data-scrollspy="scrollspy">

		  <div class="navbar-inner">

		    <div class="container">

		      <a class="brand" href="./index.html">Laravel</a>

		      <ul class="nav">

		        <li><a href="#"><em>{ A Web Framework for Web Artisan }</em></a></li>

		      </ul>

		    </div>

		  </div>

		</div>


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

		</div>

	    <footer>
			<div class='container'>

				<p>
					<a href="http://laravel.com" class="btn small primary">Official Website</a> | <a href="http://forums.laravel.com" class="btn small primary">Laravel Forums</a> | <a href="http://github.com/laravel/laravel" class="btn small primary">GitHub Repository</a>
				</p>

			</div>
	    </footer>

	</body>

</html>
