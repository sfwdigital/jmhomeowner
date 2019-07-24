<!doctype html>
<html class="no-js" lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Johns Manville - FYI: Find Your Insulation</title>
		<link rel="stylesheet" href="css/app.css">
		<script src="node_modules/jquery/dist/jquery.min.js"></script>
	</head>
	<body>
		<header>
			<div class="grid-x">
				<div class="cell medium-10">
					<h1>Details</h1>
					<p>Enter project details below.</p>
				</div>
			</div>
		</header>
		<div class="grid-x">
			<!-- Left Side -->
			<div class="cell medium-10">
				<div class="grid-container">
					<div class="grid-x">
						<div class="cell">
							<h4>Attic Area</h4>
							<p>Enter multiple entries if attic layout is not a standard rectangle like the example above or if known, enter the square footage.</p>
							<form>
								<div class="grid-container">
									<div class="grid-x">
										<fieldset class="cell auto">
											<legend>Stud Size</legend>
											<select>
												<option value="2x4">2 x 4</option>
												<option value="2x6">2 x 6</option>
											</select>
										</fieldset>
									</div>
									<div class="grid-x">
										<fieldset class="cell auto">
											<legend>Cavity Width</legend>
											<select>
												<option value="2x4">16 in.</option>
												<option value="2x6">24 in.</option>
											</select>
										</fieldset>
									</div>
									<div class="grid-x grid-padding-x">
										<div class="cell auto">
											<h4>Interior Wall Area</h4>
											<p>Walls that border another interior room.</p>
										</div>
									</div>
									<div class="grid-x grid-padding-x">
										<div class="medium-12 cell">
											<label>Height <small>(in.)</small>
												<input id="interior-height" type="number" required="">
											</label>
										</div>
										<div class="medium-12 cell">
											<label>Length <small>(in.)</small>
												<input id="interior-length" type="number" required="">
											</label>
										</div>
									</div>
									<div class="grid-x grid-padding-x">
										<div class="cell auto">
											<h4>Exterior Wall Area</h4>
											<p>Walls that border the exterior of the house.</p>
										</div>
									</div>
									<div class="grid-x grid-padding-x">
										<div class="medium-12 cell">
											<label>Height <small>(in.)</small>
												<input id="exterior-height" type="number" required="">
											</label>
										</div>
										<div class="medium-12 cell">
											<label>Length <small>(in.)</small>
												<input id="exterior-length" type="number" required="">
											</label>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
					<div class="grid-x">
						<div class="cell auto">
							<a href="/menu.php" class="button" title="Back">Back</a>
						</div>
					</div>
				</div>
			</div>
			<!-- end Left Side -->
			<!-- Right Side -->
			<div class="cell medium-14">
				<!-- Template 1 -->
				<div class="grid-container">
					<div class="grid-x grid-margin-x">
						<div class="cell medium-18">
							<div class="grid-x grid-margin-x">
								<div class="cell small-6 medium-6 rvalue-card text-center" style="background-color: #009340;"><!-- bg changes based on rvalue -->
									<h2>R-<strong>##</strong></h2>
								</div>
								<div class="cell small-18 meidum-18 product-description">
									<h5>Product Type Title</h5>
									<p>Product type description - Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean lorem enim, tristique.</p>
								</div>
							</div>
							<div class="grid-x grid-margin-x">
								<div class="cell small-6 medium-6 rvalue-card text-center" style="background-color: #009340;"><!-- bg changes based on rvalue -->
									<h2>R-<strong>##</strong></h2>
								</div>
								<div class="cell small-18 meidum-18 product-description">
									<h5>Product Type Title</h5>
									<p>Product type description - Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean lorem enim, tristique.</p>
								</div>
							</div>
						</div>
						<div class="cell medium-6">
							<img src="http://placehold.it/200x400" alt="Scale Model of Product" />
						</div>
					</div>
					<div class="grid-x grid-margin-x">
						<div class="cell medium-16">
							<div class="grid-x">
								<div class="cell medium-12">
									<h6>Interior</h6>
									<img src="http://placehold.it/350" alt="<?php echo $product_title; ?>" />
									<h4>Product Title</h4>
									<p><small>Product description - Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</small></p>
									<h6>Recommended Amount:</h6>
									<p><strong># Bags</strong></p>
								</div>
								<div class="cell medium-12">
									<h6>Exterior</h6>
									<img src="http://placehold.it/350" alt="<?php echo $product_title; ?>" />
									<h4>Product Title</h4>
									<p><small>Product description - Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</small></p>
									<h6>Recommended Amount:</h6>
									<p><strong># Bags</strong></p>
								</div>
							</div>
							<div class="grid-x">
								<div class="cell auto text-center">
									<h5>Est. Total: $$$$</h5>
								</div>
							</div>
						</div>
						<div class="cell medium-8">
							<h6>Project Checklist</h6>
							<ul>
								<li>List Item 1</li>
								<li>List Item 2</li>
								<li>List Item 3</li>
								<li>List Item 4</li>
							</ul>
							<h6>How to Guide</h6>
							<div class="responsive-embed">
								<iframe width="420" height="315" src="https://www.youtube.com/embed/mM5_T-F1Yn4" frameborder="0" allowfullscreen></iframe>
							</div>
							<h6>Estimate Project Total</h6>
							<p>$XXX.XX</p>
						</div>
					</div>
					<div class="grid-x align-right">
						<div class="cell shrink">
						<a href="#" class="button" title="Next">Next</a>
					</div>
				</div>		
			</div>
		</div>
		<script src="node_modules/foundation-sites/dist/js/foundation.min.js"></script>
		<script src="js/app.js"></script>
		<script src="js/js-min.js"></script>
	</body>
</html>
