
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
