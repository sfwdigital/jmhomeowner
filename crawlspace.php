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
		<?php include 'header.php'; ?>
		<div class="grid-container">
			<div class="grid-x align-middle">
				<!-- Left Side -->
				<div class="cell medium-10">
					<div class="grid-container">
						<div class="grid-x">
							<div class="cell">
								<form>
									<div class="grid-container">
										<div class="grid-x">
											<fieldset class="cell auto">
												<legend>Floor Joist Size</legend>
												<select>
													<option value="2x6">2 x 6</option>
													<option value="2x8">2 x 8</option>
												</select>
											</fieldset>
										</div>
										<div class="grid-x grid-padding-x">
											<div class="cell auto">
												<h4>Crawl Space Ceiling Area</h4>
											</div>
										</div>
										<div class="grid-x grid-padding-x">
											<div class="medium-12 cell">
												<label>Width <small>(in.)</small>
													<input id="ceiling_width" type="number" required="">
												</label>
											</div>
											<div class="medium-12 cell">
												<label>Length <small>(in.)</small>
													<input id="ceiling_length" type="number" required="">
												</label>
											</div>
										</div>
										<div class="grid-x">
											<div class="cell auto">
												<p><small>*Note: Recommendations are based on vented crawl spaces only.</small></p>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<!-- end Left Side -->
				<!-- Right Side -->
				<div class="cell medium-14">
					<!-- Show template-1 AND tip -->
					<?php include 'template-1.php'; ?>		
				</div>
			</div>
			<?php include 'nav.php'; ?>
		</div>
		<script src="node_modules/foundation-sites/dist/js/foundation.min.js"></script>
		<script src="js/app.js"></script>
		<script src="js/js-min.js"></script>
	</body>
</html>
