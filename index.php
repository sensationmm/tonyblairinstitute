<?php
	$staticPath = '/static/';

	$bodyID = 'home';

	include 'header.php';
?>

	<div class="body">
		<header class="banner banner-home animate" style="background-image:url(<?php echo $staticPath; ?>assets/images/desktop_header.jpeg);">
			<div class="page-title animate">Our Mission</div>

			<article class="banner-text animate">
				<h1>Making Globalisation Work for All</h1>
				<p>The Tony Blair Institute for Global Change aims to make globalisation work for the many rather than the few. We do this by helping countries, their people and their governments, to reduce poverty, inequality, extremism and conflict.</p>

				<div class="read-more"><a href="/static/about.php">Read more</a></div>
			</article>
		</header>

		<nav class="pillars animate">
			<a href="/static/pillar.php"><div class="pillar pillar1"><div>Effective<br />Government</div></div></a>
			<a href="/static/pillar.php"><div class="pillar pillar2"><div>Middle East<br />Stability</div></div></a>
			<a href="/static/pillar.php"><div class="pillar pillar3"><div>Counter<br />Extremism</div></div></a>
			<a href="/static/pillar.php"><div class="pillar pillar4"><div>Policy<br />Solution</div></div></a>
		</nav>

		<div class="sections content-pad">

			<section class="section section-text-right animate">
				<div class="section-image" style="background-image:url(<?php echo $staticPath; ?>assets/images/Homepage_About.jpg);"></div>
				<div class="section-text">
					<h2>About Us</h2>
					<p>The Tony Blair Institute for Global Change is a not-for-profit organisation dedicated to making globalisation work for the many, not the few. </p>
					<div class="read-more"><a href="/static/about.php">Read more</a></div>
				</div>
			</section>

			<section class="section section-text-left animate">
				<div class="section-image" style="background-image:url(<?php echo $staticPath; ?>assets/images/Homepage_Work.jpeg);"></div>
				<div class="section-text">
					<h2>Work with us</h2>
					<p>We are a team united by the desire to face the hardest challenges across the world today. Join us if you too want to make globalisation work for the many not the few.</p>
					<div class="read-more"><a href="/static/careers.php">Read more</a></div>
				</div>
			</section>
		</div>

		<div class="latest-news">
			<div class="section-header animate">Latest News</div>

			<div class="news-article content-pad animate">
				<div class="news-article-image" style="background-image:url(<?php echo $staticPath; ?>assets/images/news-holder.jpg);"></div>
				<div class="news-article-text">
					<div class="news-article-date">04.05.2016</div>
					<div class="news-article-title">Only a strong centre can defeat the populist surge</div>
					<p>Only a strong and revitalised centre can defeat the populist surge.</p>
					<div class="read-more"><a href="/static/news-article.php">Read more</a></div>
				</div>
			</div>

			<div class="news-article content-pad animate">
				<div class="news-article-image" style="background-image:url(<?php echo $staticPath; ?>assets/images/news-holder.jpg);"></div>
				<div class="news-article-text">
					<div class="news-article-date">04.05.2016</div>
					<div class="news-article-title">Only a strong centre can defeat the populist surge</div>
					<p>Only a strong and revitalised centre can defeat the populist surge.</p>
					<div class="read-more"><a href="/static/news-article.php">Read more</a></div>
				</div>
			</div>
		</div>

		<?php include 'footer.php'; ?>