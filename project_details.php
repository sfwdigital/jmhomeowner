<?php

$project_room = $_POST['project_room'];
session_start();
$_SESSION['progress'] = 'project_details';
// echo session_id();
// echo $_SESSION['progress'];
// echo $_SESSION['county'];
// echo $_SESSION['climate_zone'];
// echo $_SESSION['zipcode'];
// echo $_SESSION['city'];
// echo $_SESSION['state'];


if(isset($_SESSION['project'])){
	 $_SESSION['project'] = $project;
}else{
	 $project = $_POST['project'];
}



// set here based on selections
$rvalue = 'R-11';

include 'includes/header.php';
?>

<?php include 'header.php'; ?>
<div class="grid-container">
	<div class="grid-x align-middle">

		<!-- Left Side -->
		<?php include $project_room.'.php';?>
		<!-- end Left Side -->

		<!-- Right Side -->
		<div class="cell medium-14">
			<!-- If surface_type = wood show Template 1 -->
			<!-- If surface_type = concrete show Template 1 -->
			<!-- If surface_type = ceiling show Template 3 -->
			<div id="insulation_type">
			</div>
		</div>
	</div>
	<?php include 'nav.php';	?>
</div>
<?php include 'includes/footer.php'; ?>
