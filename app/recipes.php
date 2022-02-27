<!doctype html>
<html lang="en">
    <head>
        <title>Recipes | Del Monte MAGnificent Melon</title>
        <?php include('includes/meta.php'); ?>
        <?php include('includes/favicon.php'); ?>
        <?php include('includes/styles.php'); ?>
    </head>
    <body class="recipes-page">
        <?php include('includes/browserupgrade.php'); ?>
        <?php include('includes/header.php'); ?>
        <main>
			<div class="page-wrapper">
				<div class="text-right d-md-none">
					<button class="circular-btn next">
						<img src="img/next-recipe.png" alt="" class="circular-btn__text" />
						<img src="img/circular-btn-arrow.svg" alt="" class="circular-btn__arrow" />
					</button>
				</div>
				<div class="recipes-slider">
					<div class="slide">
						<div class="recipes-slider__img">
							<img src="img/recipe-circle.jpg" alt="" class="recipes-slider__img__recipe-img" />
							<img src="img/leaf.svg" alt="" class="recipes-slider__img__leaf" />
						</div>
						<div class="row recipes-slider__slide-content">
							<div class="col-md-8 recipes-slider__slide-content__recipe-name">
								<h1>Grilled <br />Prosciutto-<br />Wrapped <br />Melon <br />with Hot <br />Honey</h1>
							</div>
							<div class="col-md-3 offset-md-1 recipes-slider__slide-content__text">
								<button class="circular-btn next">
									<img src="img/next-recipe.png" alt="" class="circular-btn__text" />
									<img src="img/circular-btn-arrow.svg" alt="" class="circular-btn__arrow" />
								</button>
								<div class="text-center d-md-none">
									<a href="recipe-details.php" class="btn-green">View More</a>
								</div>
								<div>
									<h2>MAGnify the flavor of your recipes</h2>
									<p>It’s no surprise that a MAG<sup>&reg;</sup>nificent Melon makes for some seriously MAG<sup>&reg;</sup>nificent cantaloupe recipes. Versatile, nutritious and full of sweet flavor, DelMonte’s MAG<sup>&reg;</sup>nificent Melon is easy to incorporate into a quick breakfast, healthy snack, juicy salsa or a sweet dessert. Check out these tasty suggestions and get creative with your own ideas.</p>
								</div>
							</div>
						</div>
						<div class="text-center d-none d-md-block">
							<a href="recipe-details.php" class="btn-green">View More</a>
						</div>
					</div>
					<div class="slide">
						<div class="recipes-slider__img">
							<img src="img/recipe-circle.jpg" alt="" class="recipes-slider__img__recipe-img" />
							<img src="img/leaf.svg" alt="" class="recipes-slider__img__leaf" />
						</div>
						<div class="row recipes-slider__slide-content">
							<div class="col-md-8 recipes-slider__slide-content__recipe-name">
								<h1>Another <br />Delicious<br />Melon- <br />Inspired <br />Recipe</h1>
							</div>
							<div class="col-md-3 offset-md-1 recipes-slider__slide-content__text">
								<button class="circular-btn next">
									<img src="img/next-recipe.png" alt="" class="circular-btn__text" />
									<img src="img/circular-btn-arrow.svg" alt="" class="circular-btn__arrow" />
								</button>
								<div class="text-center d-md-none">
									<a href="recipe-details.php" class="btn-green">View More</a>
								</div>
								<div>
									<h2>MAGnify the flavor of your recipes</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec pharetra ultricies est nec venenatis. Vestibulum id laoreet eros. Vivamus porta eu ligula ac egestas. Phasellus pulvinar tellus lorem, in condimentum felis feugiat nec. Donec ut rhoncus ante. Proin venenatis, justo nec lobortis egestas, metus est interdum massa, ut suscipit ex dui vitae nunc. Etiam eleifend ullamcorper aliquet.</p>
								</div>
							</div>
						</div>
						<div class="text-center d-none d-md-block">
							<a href="recipe-details.php" class="btn-green">View More</a>
						</div>
					</div>
				</div>
			</div>
		</main>
		<?php include('includes/social.php'); ?>
        <?php include('includes/footer.php'); ?>
        <?php include('includes/scripts.php'); ?>
    </body>
</html>