<?php
	$staticPath = '/static/';

	$bodyID = 'news';

	include 'header.php';
?>

	<div class="body">
		<header>
			<div class="page-title animate">News</div>
		</header>

		<article class="latest-news animate">
			<div class="news-article content-pad">
				<div class="news-article-image" style="background-image:url(<?php echo $staticPath; ?>assets/images/news-holder.jpg);"></div>
				<div class="news-article-text">
					<div class="news-article-date">04.05.2016</div>
					<div class="news-article-title"><h1>Only a strong centre can defeat the populist surge</h1></div>
					<p>Only a strong and revitalised centre can defeat the populist surge.</p>
					<div class="read-more"><a href="/static/news-article.php">Read more</a></div>
				</div>
			</div>
		</article>

		<div class="news-list content-pad">
			<div>
			<?php for($i=0; $i<9; $i++) { ?>
			<article class="news-item animate">
				<div class="news-article-image" style="background-image:url(<?php echo $staticPath; ?>assets/images/news-holder.jpg);"></div>
				<div class="news-article-text">
					<div class="news-article-date">04.05.2016</div>
					<div class="news-article-title"><h2>Only a strong centre can defeat the populist surge3</h2></div>
					<p>Only a strong and revitalised centre can defeat the populist surge.
						<?php if($i%2 == 0) echo ' Only a strong and revitalised centre can defeat the populist surge.'; ?>
					</p>
					<div class="read-more"><a href="/static/news-article.php">Read more</a></div>
				</div>
			</article>
			<?php } ?>
			</div>
			<div class="news-list-more more-next"></div>
		</div>

		<?php include 'footer.php'; ?>