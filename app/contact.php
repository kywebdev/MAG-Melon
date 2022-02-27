<!doctype html>
<html lang="en">
    <head>
        <title>Contact | Del Monte MAGnificent Melon</title>
        <?php include('includes/meta.php'); ?>
        <?php include('includes/favicon.php'); ?>
        <?php include('includes/styles.php'); ?>
    </head>
    <body class="contact">
        <?php include('includes/browserupgrade.php'); ?>
        <?php include('includes/header.php'); ?>
        <main>
			<div class="hero">
				<div class="page-wrapper">
					<h1>Let's Chat</h1>
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
									<label for="phone" class="sr-only">Phone Number</label>
									<input type="tel" id="phone" placeholder="Phone Number" />
								</div>
							</div>
							<div class="col-md-6 form-group">
								<div>
									<label for="reason" class="sr-only">Reason for Contact</label>
									<input type="text" id="reason" placeholder="Reason for Contact" />
								</div>
							</div>
							<div class="col-md-6 form-group">
								<div>
									<label for="country" class="sr-only">Country</label>
									<select id="country">
										<option selected disabled>Country</option>
										<option>United States</option>
										<option>Canada</option>
										<option>France</option>
										<option>Japan</option>
										<option>Austrailia</option>
									</select>
								</div>
							</div>
							<div class="col-12 form-group tall">
								<div>
									<label for="message" class="sr-only">Additional Comments</label>
									<textarea id="message" placeholder="Additional Comments"></textarea>
								</div>
							</div>
							<div class="col-md-9 form-check">
								<input type="checkbox" class="form-check-input" id="exampleCheck1">
								<label class="form-check-label" for="exampleCheck1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus quis velit volutpat, commodo diam quis, rutrum odio. Ut luctus ante leo, congue aliquet metus efficitur non. Aliquam scelerisque massa eget augue ultricies congue. Aliquam vel velit sit amet lectus efficitur tempor. In hac habitasse platea dictumst. Maecenas sodales tincidunt ipsum sed consectetur. Proin convallis scelerisque ultricies. Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed volutpat cursus mauris, a viverra ipsum mollis quis.</label>
							</div>
							<div class="col-md-3 form-group text-center text-md-right">
								<div class="submit">
									<input type="submit" id="submit" value="Send" />
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
			<section class="contact-info">
				<div class="page-wrapper">
					<div class="text-center">
						<p><strong>Please feel free to contact the Consumer Affairs Department directly.<br />
						<a href="mailto:consumers@freshdelmonte.com">consumers@freshdelmonte.com</a></strong></p>
						<p>305-520-8668<br />
						Del Monte Fresh Produce N.A., Inc.<br />
						P.O. Box 149222<br />
						Coral Gables, FL 33114-9222 USA</p>
					</div>
				</div>
			</section>
		</main>
        <?php include('includes/social.php'); ?>
		<?php include('includes/footer.php'); ?>
        <?php include('includes/scripts.php'); ?>
    </body>
</html>