<!doctype html>
<html lang="en">
    <head>
        <title>Videos | Del Monte MAGnificent Melon</title>
        <?php include('includes/meta.php'); ?>
        <?php include('includes/favicon.php'); ?>
        <?php include('includes/styles.php'); ?>
    </head>
    <body class="videos-page">
        <?php include('includes/browserupgrade.php'); ?>
        <?php include('includes/header.php'); ?>
        <main>
			<section class="intro">
				<div class="page-wrapper">
					<div class="row">
						<div class="col-lg-7 col-md-6">
							<h1>Video <br />Content <br />Page</h1>
						</div>
						<div class="col-lg-4 col-md-5 offset-md-1">
							<div class="intro__text-container">
								<p>Growing a MAG<sup>&reg;</sup>nificent Melon takes hard work and special training. But finding one at a retailer near you is easy.</p>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="video-grid">
				<div class="page-wrapper">
					<div class="row no-gutters">
						<div class="col-lg-3 col-md-4 col-sm-6">
							<a href="" class="video-grid__video" data-toggle="modal" data-target="#videoModal">
								<img src="img/video-thumb-1.jpg" alt="">
								<div class="play">
									<img src="img/play-circle.svg" alt="" />
								</div>
							</a>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<a href="" class="video-grid__video" data-toggle="modal" data-target="#videoModal">
								<img src="img/video-thumb-2.jpg" alt="">
								<div class="play">
									<img src="img/play-circle.svg" alt="" />
								</div>
							</a>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<a href="" class="video-grid__video" data-toggle="modal" data-target="#videoModal">
								<img src="img/video-thumb-1.jpg" alt="">
								<div class="play">
									<img src="img/play-circle.svg" alt="" />
								</div>
							</a>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<a href="" class="video-grid__video" data-toggle="modal" data-target="#videoModal">
								<img src="img/video-thumb-2.jpg" alt="">
								<div class="play">
									<img src="img/play-circle.svg" alt="" />
								</div>
							</a>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<a href="" class="video-grid__video" data-toggle="modal" data-target="#videoModal">
								<img src="img/video-thumb-2.jpg" alt="">
								<div class="play">
									<img src="img/play-circle.svg" alt="" />
								</div>
							</a>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<a href="" class="video-grid__video" data-toggle="modal" data-target="#videoModal">
								<img src="img/video-thumb-1.jpg" alt="">
								<div class="play">
									<img src="img/play-circle.svg" alt="" />
								</div>
							</a>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<a href="" class="video-grid__video" data-toggle="modal" data-target="#videoModal">
								<img src="img/video-thumb-2.jpg" alt="">
								<div class="play">
									<img src="img/play-circle.svg" alt="" />
								</div>
							</a>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<a href="" class="video-grid__video" data-toggle="modal" data-target="#videoModal">
								<img src="img/video-thumb-1.jpg" alt="">
								<div class="play">
									<img src="img/play-circle.svg" alt="" />
								</div>
							</a>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<a href="" class="video-grid__video" data-toggle="modal" data-target="#videoModal">
								<img src="img/video-thumb-1.jpg" alt="">
								<div class="play">
									<img src="img/play-circle.svg" alt="" />
								</div>
							</a>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<a href="" class="video-grid__video" data-toggle="modal" data-target="#videoModal">
								<img src="img/video-thumb-2.jpg" alt="">
								<div class="play">
									<img src="img/play-circle.svg" alt="" />
								</div>
							</a>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<a href="" class="video-grid__video" data-toggle="modal" data-target="#videoModal">
								<img src="img/video-thumb-1.jpg" alt="">
								<div class="play">
									<img src="img/play-circle.svg" alt="" />
								</div>
							</a>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6 add-block">
							<a href="">
								<div class="add-link">
									<div class="play">
										<img src="img/add.svg" alt="" />
									</div>
								</div>
							</a>
						</div>
					</div>
				</div>
			</section>
			<div class="modal video-modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="videoModal" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered modal-xl" role="document">
					<div class="modal-content">
						<div class="modal-body">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
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
				</div>
			</div>
			<?php include('includes/recipes-scrolling-animation.php'); ?>
		</main>
		<?php include('includes/social.php'); ?>
        <?php include('includes/footer.php'); ?>
        <?php include('includes/scripts.php'); ?>
    </body>
</html>