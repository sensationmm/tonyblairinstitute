		<aside class="newsletter content-pad animate">
			<div class="newsletter-header">
				<h3>Sign up<br />to our<br />newsletter</h3>
				<p>Receive regular updates from the Tony Blair Institute for Global Change</p>
			</div>
			<div class="form newsletter-form">
				<form class="form-newsletter" autocomplete="off" method="POST" id="subscribe_form" action="/static/news.php">
					<div class="form-half">
						<input class="js-subscribe-name" type="text" id="subscribe_name" name="subscribe_name" placeholder="First Name" />
					</div>
					<div class="form-half">
						<input class="js-subscribe-name" type="text" id="subscribe_lastname" name="subscribe_lastname" placeholder="Second Name" />
					</div>
					<div class="form-full">
						<input class="js-subscribe-email subscribe-block-email" type="email" id="subscribe_email" name="subscribe_email" placeholder="Email Address" />
					</div>
					<div class="form-full interested">
						I'm interested in
					</div>

					<div class="form-half">
						<input class="js-subscribe-option js-subscribe-government" type="checkbox" id="subscribe_government" value="government" name="subscribe_government" />
						<label class="checkbox-label" for="subscribe_government">
							<span>Effective Government</span>
						</label>
					</div>

					<div class="form-half">
						<input class="js-subscribe-option js-subscribe-middleeast" type="checkbox" id="subscribe_middleeast" value="middleeast" name="subscribe_middleeast" />
						<label class="checkbox-label" for="subscribe_middleeast">
							<span>Middle East Stability</span>
						</label>
					</div>

					<div class="form-half">
						<input class="js-subscribe-option js-subscribe-extremism" type="checkbox" id="subscribe_extremism" value="extremism" name="subscribe_extremism" />
						<label class="checkbox-label" for="subscribe_extremism">
							<span>Counter Extremism</span>
						</label>
					</div>

					<div class="form-half">
						<input class="js-subscribe-option js-subscribe-policy" type="checkbox" id="subscribe_policy" value="policy" name="subscribe_policy" />
						<label class="checkbox-label" for="subscribe_policy">
							<span>Policy Solutions</span>
						</label>
					</div>
					<div class="form-submit"><button type="submit" id="subscribe_submit">Subscribe</button></div>
				</form>
				<div class="newsletter-success"><p>You have successfully subscribed to our newsletter.</p></div>
			</div>
		</aside>

		<footer>
			<div class="social">
				<div class="social-icon facebook"><a href="">Facebook</a></div>
				<div class="social-icon twitter"><a href="">Twitter</a></div>
				<div class="social-icon vimeo"><a href="">Vimeo</a></div>
			</div>

			<nav class="main">
				<ul>
				<li><a href="/static/about.php">About</a></li>
				<li><a href="/static/news.php">News</a></li>
				<li><a href="/static/careers.php">Careers</a></li>
				<li><a href="/static/contact.php">Contact</a></li>
				</ul>
			</nav>

			<nav class="footer">
				<ul>
				<li><a href="/static/page.php">Privacy Policy</a></li>
				<li><a href="/static/page.php">Terms &amp; Conditions</a></li>
				<li><a href="/static/page.php">Cookies</a></li>
				</ul>
			</nav>

			<p class="small">The Tony Blair Institute is a company limited by guarantee and registered in England number 06198959. 
				<br />Company number 10505963. Registered office: 50 Broadway, London, SW1H 0BL</p>
		</footer>
	</div>
	
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script type="text/javascript" src="compiled/tbi.min.js"></script>

</body>
</html>