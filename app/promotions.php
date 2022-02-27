<!doctype html>
<html lang="en">
    <head>
        <title>Promotions | Del Monte MAGnificent Melon</title>
        <?php include('includes/meta.php'); ?>
        <?php include('includes/favicon.php'); ?>
        <?php include('includes/styles.php'); ?>
    </head>
    <body class="promotions">
        <?php include('includes/browserupgrade.php'); ?>
        <?php include('includes/header.php'); ?>
        <main>
			<section class="hero">
				<div class="page-wrapper">
					<div class="row">
						<div class="col-lg-6 col-md-8 hero__img">
							<img src="img/promotions.png" alt="" />
						</div>
						<div class="col-lg-6 col-md-4">
							<div class="hero__text">
								<div>
									<img src="img/magnificent.svg" alt="" />
									<h1>Deals</h1>
									<p>There are so many reasons to love our MAG<sup>&reg;</sup>nificent Melon. Here are a few more: special offers and extra-sweet deals.</p>
									<button class="btn-green" data-toggle="modal" data-target="#couponModal">See Deals</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<div class="modal coupon-modal fade" id="couponModal" tabindex="-1" role="dialog" aria-labelledby="couponModal" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered" role="document">
					<div class="modal-content">
						<div class="modal-body">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
							<div class="coupon-img">
								<img src="img/coupon.jpg" alt="" />
							</div>
							<div class="download-btn text-center">
								<button type="button" class="btn-green">Download</button>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="modal form-modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModal" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered modal-xl" role="document">
					<div class="modal-content">
						<div class="modal-body">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
							<div class="form-text">
								<p class="form-heading">Get in Touch…</p>
								<p>Questions, comments, concerns - we want to hear it all! We are always interested in hearing from our customers on how we can improve.</p>
							</div>
							<form>
								<div class="row">
									<div class="col-md-6 form-group">
										<div>
											<label for="fname" class="sr-only">First Name</label>
											<input type="text" id="fname" placeholder="First Name" />
										</div>
									</div>
									<div class="col-md-6 form-group">
										<div>
											<label for="lname" class="sr-only">Last Name</label>
											<input type="text" id="lname" placeholder="Last Name" />
										</div>
									</div>
									<div class="col-md-6 form-group">
										<div>
											<label for="email" class="sr-only">Email Address</label>
											<input type="email" id="email" placeholder="Email Address" />
										</div>
									</div>
									<div class="col-md-6 form-group">
										<div>
											<label for="fav-fruit" class="sr-only">Favorite Fruit</label>
											<select id="fav-fruit">
												<option selected disabled>Favorite Fruit</option>
												<option>Pineapple</option>
												<option>Strawberry</option>
												<option>Blueberry</option>
												<option>Apple</option>
												<option>Watermelon</option>
											</select>
										</div>
									</div>
									<div class="col-md-6 form-group">
										<div>
											<label for="age" class="sr-only">Age</label>
											<input type="text" id="age" placeholder="Age" />
										</div>
									</div>
									<div class="col-md-6 form-group">
										<div>
											<label for="city" class="sr-only">City</label>
											<input type="text" id="city" placeholder="City" />
										</div>
									</div>
									<div class="col-md-6 form-group">
										<div>
											<label for="state" class="sr-only">State</label>
											<select id="state">
												<option selected disabled>State</option>
												<option>Pennsylvania</option>
												<option>New York</option>
												<option>California</option>
												<option>Florida</option>
												<option>Texas</option>
											</select>
										</div>
									</div>
									<div class="col-md-6 form-group">
										<div class="submit">
											<input type="submit" id="submit" value="Send" />
										</div>
									</div>
								</div>
							</form>
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