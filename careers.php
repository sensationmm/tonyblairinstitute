<?php
	$staticPath = '/static/';

	$bodyID = 'careers';

	include 'header.php';
?>

	<div class="body">
		<header class="banner banner-home animate" style="background-image:url(<?php echo $staticPath; ?>assets/images/careersbckgdesk.jpeg);">
			<div class="page-title animate">Careers</div>

			<article class="banner-text animate">
				<h1>Working at the Institute</h1>
				<p>We are a team of 200 people united by the desire to face head on the hardest challenges across the world today. Join us if you too want to make globalisation work for the many not the few.</p>
			</article>
		</header>

		<div class="positions">
			<?php for ($i=0; $i<3; $i++) { ?>
			<article class="position animate">
				<div class="position-meta">
					<div class="meta-section">
						<div class="meta-section-header">Deadline</div>
						31st December 2017
					</div>

					<div class="meta-section">
						<div class="meta-section-header">Locations</div>
						Various
					</div>

					<div class="meta-section">
						<div class="meta-section-header">Area of Work</div>
						Effective Government
					</div>
				</div>

				<div class="position-about">
					<h2>Governor Advisor General Application</h2>
					<p>We are always looking to hear from speculative candidates with a proven track record of leadership and delivery in the public or private sectors to work as Governance Advisors around the world.</p>
					<div class="link"><a href="" title="Apply for Governor Advisor General Application position">Apply for this position</a></div>
				</div>
			</article>
			<?php } ?>
		</div>

		<?php include 'footer.php'; ?>