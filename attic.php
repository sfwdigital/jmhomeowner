<?php
// include 'includes/header.php';
include 'includes/session.php';

// echo $rvalue = $_POST['rvalue'];
// echo $project = $_POST['project'];

?>

		<?php include 'header.php'; ?>
		<div class="grid-container">
			<div class="grid-x align-middle">
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
												<input type="radio" value="blow" name="insulation_type" value="Blow In" id="insulation_type_blowin" checked><label for="insulation_type_blowin" >Blow In</label>
												<input type="radio" value="batt" name="insulation_type" value="Batt" id="insulation_type_batt"><label for="insulation_type_batt">Batt</label>
											</fieldset>
										</div>
										<!-- only show if insulation_type = blowin -->
										<div class="grid-x">
											<fieldset class="cell auto">
												<legend>Adding to Existing Insulation?</legend>
												<input type="radio" name="insulation_adding" value="Yes" id="insulation_adding_yes"><label for="insulation_adding_yes">Yes</label>
												<input type="radio" name="insulation_adding" value="No" id="insulation_adding_no"><label for="insulation_adding_no">No</label>
											</fieldset>
										</div>
										<!-- end -->
										<!-- only show if insulation_adding = yes -->
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
										<!-- end -->
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<!-- end Left Side -->
				<!-- Right Side -->


				<div class="cell medium-14">
					<!-- If insulation_type = batt show Template 1 -->
					<!-- If insulation_type = blowin show Template 2 -->

					<div id="insulation_type">

						<?php include 'template-2.php'; ?>

					</div>
				</div>
			</div>
			<?php include 'nav.php';	?>
		</div>


		<script type="text/javascript">
			jQuery(function($) {

				$("input[name=insulation_type]").change(function(){
					var type = $('input[name=insulation_type]:checked').val();
					var blowlink = 'template-2.php';
					var battlink = 'template-1.php';
					if (type == 'blow'){
						$.fn.jminsulationtype(blowlink);
					}
					if (type == 'batt'){
						$.fn.jminsulationtype(battlink);
					}
				});

				$.fn.jminsulationtype = function(link) {
					$.ajax({
						type: "POST",
						url: link,
						// data: ({rvalue: rvalue, project: project}),
						success: function(response){
							$("#insulation_type").html(response);
						}
					});
				}

			});
		</script>
