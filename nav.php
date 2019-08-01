
<?php
session_start();
$project_room = $_POST['project_room'];
$_SESSION['project_room'] = $_POST['project_room'];



// $_SESSION['progress'];
if ($_SESSION['progress'] == 'project'){
	$back_btn = '/';
	$next_btn = 'project_details.php';
}
if ($_SESSION['progress'] == 'project_details'){
	$back_btn = 'project.php';
	$next_btn = '/map.php';
}
if ($_SESSION['progress'] == 'map'){
	$back_btn = 'project_details.php';
}

echo'
<div class="grid-x">
	<div class="cell auto">
		<a class="button" id="back-button" title="Back">Back</a>
	</div>
	<div class="cell shrink align-right">';
	if ($_SESSION['progress'] != 'map'){
		echo	'<a id="next-button" class="button" title="Next">Next</a>';
	}
		echo'
	</div>
</div>
';

?>


<script type="text/javascript">
  jQuery(function($) {

		$( "#back-button" ).click(function() {
			var link = '<?php echo $back_btn; ?>';
			var project_room = '<?php echo $_SESSION['project_room']; ?>'
			console.log(project_room);
			$.fn.jminsulation(link, project_room);
		});


		$( "#next-button" ).click(function() {
			var link = '<?php echo $next_btn; ?>';
			if( $('#room-field').length )         // use this if you are using id to check
			{
				var project_room = $('#room-field').val();
			}else{
				var project_room = '<?php echo $_SESSION['project_room']; ?>'
			}

			$.fn.jminsulation(link, project_room);
		});


		$.fn.jminsulation = function(link, project_room) {
			$.ajax({
				type: "POST",
				url: link,
				data: ({project_room: project_room}),
				success: function(response){
					$("#insulationdata").html(response);
				}
			});
		}







  });
</script>
