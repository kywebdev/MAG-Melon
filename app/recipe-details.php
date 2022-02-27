<!doctype html>
<html lang="en">
    <head>
        <title>Recipe Details | Del Monte MAGnificent Melon</title>
        <?php include('includes/meta.php'); ?>
        <?php include('includes/favicon.php'); ?>
        <?php include('includes/styles.php'); ?>
    </head>
    <body class="recipe-details">
        <?php include('includes/browserupgrade.php'); ?>
        <?php include('includes/header.php'); ?>
        <main>
			<div class="hero">
				<picture>
					<source srcset="img/recipe-hero-mobile.jpg" media="(max-width: 1000px)">
					<img src="img/recipe-hero-desktop.jpg" alt="" />
				</picture>
			</div>
			<section class="recipe">
				<div class="page-wrapper">
					<h1>Grilled Prosciutto-Wrapped Melon with Hot Honey</h1>
					<div class="row">
						<div class="col-lg-4 col-md-6 ingredients">
							<p><strong>6 servings<br />
							Prep Time: 25 minutes<br />
							Cook Time: 10 minutes</strong></p>
							<p>Specialty Diet Compliance: Paleo, Dairy Free</p>
							<div class="ingredient-list">
								<p>1 Del Monte&reg; MAG Melon</p>
								<p>12 thin slices prosciutto</p>
								<p>¼ cup hot honey, gently warmed until runny if necessary</p>
								<p>Flaky sea salt and black pepper to taste</p>
							</div>
							<div class="ingredients__social">
								<div class="dropdown">
									<button class="dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<img src="img/sharing.svg" alt="" />
									</button>
									<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
										<a class="dropdown-item" href="#">Pinterest</a>
										<a class="dropdown-item" href="#">Facebook</a>
										<a class="dropdown-item" href="#">Twitter</a>
									</div>
								</div>
								<button onclick="window.print();">
									<img src="img/printer.svg" alt="" />
								</button>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 directions">
							<p><strong>Directions:</strong></p>
							<ol>
								<li>Cut melon in half and scoop out the seeds. Cut each melon half into 6 wedges and cut off the rind.</li>
								<li>Wrap each melon wedge with a slice of prosciutto and secure it with a toothpick.</li>
								<li>Prepare a medium-hot, two-zone charcoal grill fire or preheat a gas grill on medium heat for 10 minutes.</li>
								<li>Place melon wedges on grill and cook, turning occasionally, until there are grill marks on 3 sides. If using a charcoal grill, transfer melon wedges to cooler side of grill.</li>
								<li>Brush melon all over with hot honey and let caramelize for a few minutes, being careful not to let it burn.</li>
								<li>Transfer wedges to a serving plate and sprinkle with salt and pepper. Serve warm.</li>
							</ol>
						</div>
						<div class="col-lg-4 offset-lg-0 col-md-6 offset-md-3 nutrition-facts">
							<div>
								<img src="img/nutrition-facts.svg" alt="" />
							</div>
						</div>
					</div>
					<div class="recipe-video">
						<div class="video" id="recipe-video">
							<div class="content">
								<div id="player"></div>
								<iframe src="https://www.youtube.com/embed/NpEaa2P7qZI?enablejsapi=1" id="video" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
								<div class="video__poster">
									<picture class="video__poster__img">
										<source media="(max-width: 650px)" srcset="img/recipe-poster-mobile.png">
										<img src="img/recipe-poster-desktop.png" alt="">
									</picture>
									<button class="circular-btn play-btn">
										<img src="img/play.png" alt="" class="circular-btn__text" />
										<img src="img/play.svg" alt="" class="circular-btn__arrow" />
									</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="next-recipe">
				<div class="page-wrapper">
					<div class="next-recipe__container">
						<a href="">
							<h1>Next <br />Recipe</h1>
						</a>
						<a href="" class="next-recipe__img">
							<img src="img/next-recipe-leaf-1.svg" alt="" class="next-recipe__img__leaf-1" />
							<img src="img/next-recipe-leaf-2.svg" alt="" class="next-recipe__img__leaf-2" />
							<img src="img/next-recipe-leaf-3.svg" alt="" class="next-recipe__img__leaf-3" />
							<img src="img/leaf.svg" alt="" class="next-recipe__img__leaf-mobile" />
							<div class="next-recipe__img__circle">
								<picture>
									<source srcset="img/next-recipe-mobile.jpg" media="(max-width: 650px)">
									<img src="img/next-recipe-desktop.jpg" alt="" class="jarallax-img" />
								</picture>
							</div>
						</a>
					</div>
				</div>
			</section>
		</main>
		<?php include('includes/social.php'); ?>
        <?php include('includes/footer.php'); ?>
        <?php include('includes/scripts.php'); ?>
    </body>
</html>