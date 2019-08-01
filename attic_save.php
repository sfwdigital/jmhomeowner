<?php
session_start();


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
													<input type="number" class="width" required="">
												</label>
											</div>
											<div class="medium-12 cell">
												<label>Length <small>(in.)</small>
													<input type="number" class="length" required="">
												</label>
											</div>
										</div>
										<div class="grid-x grid-padding-x">
											<div class="medium-18 cell">
												<label>Square Footage <small>(optional)</small>
													<input type="text" id="squarefeet">
												</label>
											</div>
										</div>
										<div class="grid-x">
											<fieldset class="cell auto">
												<legend>Insulation Type</legend>
												<input type="radio" value="blow" name="insulation_type" value="Blow In" id="insulation_type_blowin" ><label for="insulation_type_blowin" >Blow In</label>
												<input type="radio" value="batt" name="insulation_type" value="Batt" id="insulation_type_batt" checked><label for="insulation_type_batt">Batt</label>
											</fieldset>
										</div>
										<!-- only show if insulation_type = blowin -->
										<div class="grid-x blow-insulation">
											<fieldset class="cell auto">
												<legend>Adding to Existing Insulation?</legend>
												<input type="radio" name="insulation_adding" value="yes" id="insulation_adding_yes"><label for="insulation_adding_yes">Yes</label>
												<input type="radio" name="insulation_adding" value="no" id="insulation_adding_no" checked><label for="insulation_adding_no">No</label>
											</fieldset>
										</div>
										<!-- end -->
										<!-- only show if insulation_adding = yes -->
										<div class="grid-x grid-padding-x blow-depth">
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


					</div>
				</div>
			</div>
			<?php include 'nav.php';	?>
		</div>
		<?php include 'includes/footer.php'; ?>

		<script src="js/jm-js.js"></script>

		<script type="text/javascript">
			jQuery(function($) {

				$( ".blow-depth" ).hide();
				$( ".blow-insulation" ).hide();


				$(document).ready(function(){
					var link = 'template-1.php'
					$.fn.jminsulationtype(link);
		    });

				$.fn.updateTotal = function() {
				  var width = parseInt($('.width').val());
				  var length = parseInt($('.length').val());
				  if (isNaN(width) || isNaN(length)) {
				    $('#squarefeet').val('Both inputs must be numbers');
				  } else {
						var squarefootage = (((width * length)/12)/12).toFixed(2);
						$('#squarefeet').val(squarefootage);
				  }
				};

				$.fn.jminsulationtype = function(link, squarefootage) {
					var project = '<?php echo $project ?>';
					var rvalue = '<?php echo $rvalue?>';
					$.ajax({
						type: "POST",
						url: link,
						data: ({squarefootage: squarefootage, project: project, rvalue: rvalue}),
						success: function(response){
							$("#insulation_type").html(response);
						}
					});
				}

				$.fn.extra_insulation = function(link) {
					var type = $('input[name=insulation_adding]:checked').val();
					if (type == 'yes'){
						$( ".blow-depth" ).show('fast');
					}
					if (type == 'no'){
						$( ".blow-depth" ).hide('fast');
					}
				};

				$.fn.insulation_type = function(link) {
					var type = $('input[name=insulation_type]:checked').val();
					var blowlink = 'template-2.php';
					var battlink = 'template-1.php';
					var squarefootage = $('#squarefeet').val();
					if (type == 'blow'){
						$.fn.jminsulationtype(blowlink, squarefootage);
						$( ".blow-insulation" ).show('fast');
					}
					if (type == 'batt'){
						$.fn.jminsulationtype(battlink, squarefootage);
						$( ".blow-insulation" ).hide('fast');
					}
				};

				$('.width').focusout(function() {
			    $.fn.updateTotal();
					$.fn.insulation_type();
				});

				$('.length').focusout(function() {
					$.fn.updateTotal();
					$.fn.insulation_type();
				});

				$("input[name=insulation_type]").change(function(){
					$.fn.updateTotal();
					$.fn.insulation_type();
				});

				$("input[name=insulation_adding]").change(function(){
					$.fn.extra_insulation();
				});

			});
		</script>
