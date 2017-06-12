<?php
	$staticPath = '/static/';

	$bodyID = 'page';

	include 'header.php';
?>

	<div class="body">
		<header>
			<div class="page-title">Not Found</div>

			<div class="page-header">
				<h1>Sorry! That page cannot be found</h1>

			</div>
		</header>

		<article class="main-article content-pad text-page">
			<p>Please use the navigation on the left to find what you were looking for.</p>
			<p>Alternatively, click here to <a href="/" title="Return to the Homepage">return to the homepage</a>.</p>
		</article>

		<?php include 'footer.php'; ?>