			<div class="grid-x">
				<div class="cell medium-10">
					<div class="grid-x">
						<div class="cell shrink">
							<a class="button" id="next-button" title="Back">Back</a>
						</div>
					</div>
				</div>
				<div class="cell medium-14">
					<div class="grid-x align-right">
						<div class="cell shrink">
							<a id="map-next" class="button" title="Next">Next</a>
						</div>
					</div>
				</div>
			</div>


			<script type="text/javascript">
			  jQuery(function($) {
					$( "#map-next" ).click(function() {
						console.log('etst');
						$("#insulationdata").load( "map.php" );
					});
			  });
			</script>
