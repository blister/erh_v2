<?php
global $App, $Painfree;

if ( $App->htmx && ! $App->htmx_boosted && file_exists("{$App->BASE_PATH}/templates/views/{$App->view}.php") ) {
	// If we are an htmx request and the "view" variable exists in the top-level
	// templates folder, render that as an HTMX snippet.
	//
	// If we are an htmx request and there is a "sub-view" defined that lives
	// inside a folder, render _THAT_ instead of the full top-level snippet.
	//
	// In _this_ application, we're overriding $App->id to act as our default
	// "sub-view" route, but you should feel free to write whatever type of 
	// routing architecture that you want.
	//
	// This example requires that a top-level /templates/views/{$view}.php file 
	// exists **AND** a top-level /templates/views/{$view}/{$id}.php file to
	// exist for this magic to occur. 
	//
	// Each application built with PHPainfree should design their routing and
	// template relationships however best suits that product.
	if ( file_exists("{$App->BASE_PATH}/templates/views/{$App->view}/{$App->id}.php") ) {
		include_once "views/{$App->view}/{$App->id}.php";
	} else {
		include_once "views/{$App->view}.php";
	}
} else { 
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title><?= $Painfree->safe($App->title()); ?></title>

		<link rel="icon" type="image/x-icon" href="/images/favicon.ico" />

		<link rel="stylesheet" href="https://unpkg.com/normalize.css">
		<link rel="stylesheet" href="https://unpkg.com/magick.css">

		<!-- htmx -->
		<script src="https://unpkg.com/htmx.org@1.9.5"></script>

		<!-- github buttons -->
		<script async defer src="https://buttons.github.io/buttons.js"></script>

		<!-- Prism (syntax highlighting in <code> blocks) -->
		<link href="/css/prism.min.css" rel="stylesheet" />
		<script src="/js/prism.min.js"></script>

		<!-- font awesome --> 
		<script src="https://kit.fontawesome.com/377fddedbd.js" crossorigin="anonymous"></script>

		<!-- Dynamically load our css/js resources by "view" -->
		<!-- View-specific CSS -->
		<?= $Painfree->load_css($App->view); ?> 
		
		<!-- View-specific JS -->
		<?= $Painfree->load_js($App->view); ?> 

		<!-- Special PHPainfree demo development CSS -->
		<?= $Painfree->load_css('painfree_development'); ?> 
	</head>
	<body id="app-body" class="">
		<main>
<?php
		include $Painfree->load_view('header');
		include $Painfree->load_view($App->view, '404');
		include $Painfree->load_view('footer');
?>
		
		</main>

<?php
	// TODO: If you're going to use a debug template in a production environment,
	// you will want to do a permissions check here to only show it to people with
	// "developer" permissions in your product.
	if ( isset($_ENV['ENVIRONMENT']) && $_ENV['ENVIRONMENT'] === 'development' ) {
		//include $Painfree->load_view('debug');
	}
?>


	</body>
</html>

<?php
} // end of normal render mode

