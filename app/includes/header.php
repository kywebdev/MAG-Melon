<header>
	<div class="header-wrapper">
		<div class="logo d-none d-md-inline-block">
			<a href="index.php">
				<img src="img/delmonte-logo.svg" alt="" />
			</a>
		</div>
		<div class="mag-logo d-none d-md-inline-block">
			<a href="index.php">
				<img src="img/mag-logo-desktop.svg" alt="" />
			</a>
		</div>
		<div class="navigation">
			<div class="nav-container">
				<div class="logo d-md-none">
					<a href="index.php">
						<img class="logo-mobile" src="img/mag-logo-mobile.svg" alt="" />
					</a>
				</div>
				<a href="" class="mobile-nav-toggle" href="">
					<img class="burger-icon" src="img/burger-icon.svg" />
					<img class="close-icon" src="img/close-icon.svg" />
				</a>
				<nav class="navbar">
					<ul>
						<li>
							<a href="index.php">Home</a>
						</li>
						<li>
							<a href="about.php">About Us</a>
						</li>
						<li>
							<a href="recipes.php">Recipes</a>
						</li>
						<li>
							<a href="promotions.php">Promotions</a>
						</li>
						<li>
							<a href="where-to-buy.php">Where to Buy</a>
						</li>
						<li>
							<a href="videos.php">Videos</a>
						</li>
					</ul>
				</nav>
				<div class="search">
					<div class="search-container">
						<form action="search-results.php">
							<label for="search" class="sr-only">Search the site</label>
							<div>
								<input type="search" class="form-control" id="search" placeholder="Search the site" />
							</div>
						</form>
						<!--<button>
							<img src="img/search.svg" alt="" />
						</button>-->
					</div>
				</div>
			</div>
		</div>
	</div>
</header>
<div class="mobile-nav">
	<div class="mobile-nav-container">
		<div class="mobile-footer">
			<ul class="mobile-footer__social">
				<li>
					<a href="">
						<img src="img/instagram.svg" alt="" />
					</a>
				</li>
				<li>
					<a href="">
						<img src="img/facebook.svg" alt="" />
					</a>
				</li>
				<li>
					<a href="">
						<img src="img/pinterest.svg" alt="" />
					</a>
				</li>
				<li>
					<a href="">
						<img src="img/twitter.svg" alt="" />
					</a>
				</li>
				<li>
					<a href="">
						<img src="img/linkedin.svg" alt="" />
					</a>
				</li>
			</ul>
			<nav class="mobile-footer__nav">
				<ul>
					<li>
						<a href="">Credits</a>
					</li>
					<li>
						<a href="">Cookies</a>
					</li>
					<li>
						<a href="">Privacy Policy</a>
					</li>
					<li>
						<a href="">Terms and Conditions</a>
					</li>
					<li>
						<a href="contact.php">Contact Us</a>
					</li>
				</ul>
			</nav>
			<p class="mobile-footer__copyright">HONEYGLOW and WHEN WE SAY SWEET, WE MEAN SWEET are trademarks of Del Monte International GmbH &copy; 2021 All rights reserved.</p>
		</div>
	</div>
</div>
<div class="modal search-modal fade hidden-md-up" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModal" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-body">
				<form action="search-results.php">
					<label for="search-mobile" class="sr-only">Search the site</label>
					<input type="search" class="form-control" id="search-mobile" placeholder="Search the site" />
				</form>
			</div>
		</div>
	</div>
</div>