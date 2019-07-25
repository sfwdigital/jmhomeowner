<?php include 'includes/header.php'; ?>

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
					</div>
				</div>
				<!-- end Left Side -->
				<!-- Right Side -->
				<div class="cell medium-14">
					<?php include 'template-1.php'; ?>
				</div>
			</div>
			<?php include 'nav.php'; ?>
		</div>
		<?php include 'includes/footer.php'; ?>
