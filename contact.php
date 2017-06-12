<?php
	$staticPath = '/static/';

	$bodyID = 'contact';

	include 'header.php';
?>

	<div class="body">
		<header>
			<div class="page-title animate">Contact Us</div>
		</header>

		<article class="contact content-pad animate">
			<div class="contact-type contact-general">
				<h2>General Enquiries</h2>
				info@institute.global
			</div>

			<div class="contact-type contact-media">
				<h2>Media Enquiries</h2>
				mediabids@institute.global
			</div>

			<div class="contact-type contact-postal">
				<h2>Postal Address</h2>
				PO Box 60519<br />
				London<br />
				W2 7JU
			</div>
		</article>

		<div class="social share animate">
			<div class="social-icon vimeo"><a href="" title="Share on Vimeo">Share on Vimeo</a></div>
			<div class="social-icon twitter"><a href="" title="Share Twitter">Share Twitter</a></div>
			<div class="social-icon facebook"><a href="" title="Share on Facebook">Share on Facebook</a></div>
		</div>

		<?php include 'footer.php'; ?>