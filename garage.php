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
												<legend>Surface Type</legend>
												<input type="radio" name="surface_type" value="wood_frame" id="surface_type_wood"><label for="surface_type_wood">Wood Frame</label>
												<input type="radio" name="surface_type" value="concrete_block" id="surface_type_concrete"><label for="surface_type_concrete">Concrete Block Wall</label>
											</fieldset>
										</div>
										<div class="grid-x">
											<fieldset class="cell auto">
												<legend>Stud Size</legend>
												<select>
													<option value="2x4">2 x 4</option>
													<option value="2x6">2 x 6</option>
												</select>
											</fieldset>
										</div>
										<!-- only show if surface_type = concrete -->
										<div class="grid-x">
											<fieldset class="cell auto">
												<legend>Converting to a living space?</legend>
												<input type="radio" name="living_space" value="yes" id="living_space_yes"><label for="living_space_yes">Yes</label>
												<input type="radio" name="living_space" value="no" id="living_space_no"><label for="living_space_no">No</label>
											</fieldset>
										</div>
										<!-- end -->
										<div class="grid-x grid-padding-x">
											<div class="cell auto">
												<h4>Interior Garage Wall Area</h4>
												<p>Walls that border the interior of the house.</p>
											</div>
										</div>
										<div class="grid-x grid-padding-x">
											<div class="medium-12 cell">
												<label>Height <small>(in.)</small>
													<input id="interior_height" type="number" required="">
												</label>
											</div>
											<div class="medium-12 cell">
												<label>Length <small>(in.)</small>
													<input id="interior_length" type="number" required="">
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
					<!-- IF surface_type = concrete AND living_space = no show Template 3 AND show Tip -->
					<!-- IF surface_type = concrete AND living_space = yes show Template 1 -->
					<!-- IF surface_type = wood show Template 3 -->
					<?php include 'template-3.php'; ?>
				</div>
			</div>
			<?php include 'nav.php'; ?>
		</div>
		<?php include 'includes/footer.php'; ?>
