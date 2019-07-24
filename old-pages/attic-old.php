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
									<div class="grid-x grid-padding-x">
										<div class="medium-12 cell">
											<label>Width <small>(in.)</small>
												<input type="number" required="">
											</label>
										</div>
										<div class="medium-12 cell">
											<label>Length <small>(in.)</small>
												<input type="number" required="">
											</label>
										</div>
									</div>
									<div class="grid-x grid-padding-x">
										<div class="medium-18 cell">
											<label>Square Footage <small>(optional)</small>
												<input type="text">
											</label>
										</div>
									</div>
									<div class="grid-x">
										<fieldset class="cell auto">
											<legend>Insulation Type</legend>
											<input type="radio" name="insulation_type" value="Blow In" id="insulation_type_blowin"><label for="insulation_type_blowin">Blow In</label>
											<input type="radio" name="insulation_type" value="Batt" id="insulation_type_batt"><label for="insulation_type_batt">Batt</label>
										</fieldset>
									</div>
									<!-- only show if insulation_type=blowin -->
									<div class="grid-x">
										<fieldset class="cell auto">
											<legend>Adding to Existing Insulation?</legend>
											<input type="radio" name="insulation_adding" value="Yes" id="insulation_adding_yes"><label for="insulation_adding_yes">Yes</label>
											<input type="radio" name="insulation_adding" value="No" id="insulation_adding_no"><label for="insulation_adding_no">No</label>
										</fieldset>
									</div>
									
									<!-- only show if adding=yes -->
									<div class="grid-x grid-padding-x">
										<div class="medium-12 cell">
											<label>Avg. Depth <small>(in.)</small>
												<input type="number">
											</label>
										</div>
										<div class="medium-12 cell">
											<small>Enter the depth of the layer of insulation you are adding on top of.</small>
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
									<div class="grid-x grid-padding-x">
										<div class="medium-12 cell">
											<label>Width <small>(in.)</small>
												<input type="number" required="">
											</label>
										</div>
										<div class="medium-12 cell">
											<label>Length <small>(in.)</small>
												<input type="number" required="">
											</label>
										</div>
									</div>
									<div class="grid-x grid-padding-x">
										<div class="medium-18 cell">
											<label>Square Footage <small>(optional)</small>
												<input type="text">
											</label>
										</div>
									</div>
									<div class="grid-x">
										<fieldset class="cell auto">
											<legend>Insulation Type</legend>
											<input type="radio" name="insulation_type" value="Blow In" id="insulation_type_blowin"><label for="insulation_type_blowin">Blow In</label>
											<input type="radio" name="insulation_type" value="Batt" id="insulation_type_batt"><label for="insulation_type_batt">Batt</label>
										</fieldset>
									</div>
									<!-- only show if insulation_type=blowin -->
									<div class="grid-x">
										<fieldset class="cell auto">
											<legend>Adding to Existing Insulation?</legend>
											<input type="radio" name="insulation_adding" value="Yes" id="insulation_adding_yes"><label for="insulation_adding_yes">Yes</label>
											<input type="radio" name="insulation_adding" value="No" id="insulation_adding_no"><label for="insulation_adding_no">No</label>
										</fieldset>
									</div>
									
									<!-- only show if adding=yes -->
									<div class="grid-x grid-padding-x">
										<div class="medium-12 cell">
											<label>Avg. Depth <small>(in.)</small>
												<input type="number">
											</label>
										</div>
										<div class="medium-12 cell">
											<small>Enter the depth of the layer of insulation you are adding on top of.</small>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
					<div class="grid-x">
						<div class="cell auto">
							<a href="/index.php" class="button" title="Back">Back</a>
						</div>
					</div>
				</div>
			</div>
			<!-- end Left Side -->
			<!-- Right Side -->
			<div class="cell medium-14">
				<!-- Template 2 -->
				<div class="grid-container">
					<div class="grid-x grid-margin-x">
						<div class="cell small-6 rvalue-card text-center" style="background-color: #009340;"><!-- bg changes based on rvalue -->
							<h2>R-<strong>##</strong></h2>
						</div>
						<div class="cell small-18 medium-10 product-description">
							<h5>Product Type Title</h5>
							<p>Product type description - Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean lorem enim, tristique.</p>
						</div>
						<div class="cell medium-6">
							<img src="http://placehold.it/200x300" alt="Scale Model of Product" />
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
