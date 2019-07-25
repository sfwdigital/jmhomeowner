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
												<input type="radio" name="surface_type" value="ceiling" id="surface_type_ceiling"><label for="surface_type_ceiling">Ceiling</label>
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
										<div class="grid-x grid-padding-x">
											<div class="cell auto">
												<h4>Basement Wall Area</h4>
											</div>
										</div>
										<div class="grid-x grid-padding-x">
											<div class="medium-12 cell">
												<label>Height <small>(in.)</small>
													<input id="ceiling_height" type="number" required="">
												</label>
											</div>
											<div class="medium-12 cell">
												<label>Length <small>(in.)</small>
													<input id="ceiling_length" type="number" required="">
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
					<!-- If surface_type = wood show Template 1 -->
					<!-- If surface_type = concrete show Template 1 -->
					<!-- If surface_type = ceiling show Template 3 -->
					<?php include 'template-1.php'; ?>
				</div>
			</div>
			<?php include 'nav.php'; ?>
		</div>
		<?php include 'includes/footer.php'; ?>
