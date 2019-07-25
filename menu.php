<?php include 'includes/header.php'; ?>

		<div class="grid-x">
			<!-- Left Side -->
			<div class="cell medium-12">
				<!-- Heading -->
				<div class="grid-x">
					<div class="cell auto">
						<h1>Project</h1>
						<p>Choose your project type below.</p>
					</div>
				</div>
				<!-- Content -->
				<div class="grid-container">
					<div class="grid-x">
						<div class="cell">

							<select>
							  <option value="attic">Attic</option>
							  <option value="bathroom">Bathroom<br /> Laundry<br /> Kitchen</option>
							  <option value="basement">Basement</option>
								<option value="bedroom">Bedroom<br /> Study<br /> Nursery</option>
							  <option value="crawlspace">Crawlspace</option>
								<option value="garage">Garage</option>
							</select>


						</div>
					</div>
					<div class="grid-x align-right">
						<div class="cell medium-18">
							<div class="room-card">
								<div class="card-heading">
									<h5>Room Title</h5>
								</div>
								<div class="card-content">
									<p>Room Description - Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean lorem enim, tristique.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="grid-x">
						<div class="cell auto">
							<a href="/index.php" class="button" title="Back">Back</a>
						</div>
					</div>
				</div>
			</div>
			<!-- end Left Side -->
			<!-- Right Side -->
			<div class="cell medium-12">
				<!-- Heading -->
				<div class="grid-x">
					<div class="cell auto">
						<h1>Your Location</h1>
						<p>Enter your zip code below to find your R-Value.</p>
					</div>
				</div>
				<!-- Content -->
				<div class="grid-container">
					<div class="grid-x">
						<div class="cell">
							<form>
								<div class="input-group">
									<input class="input-group-field" placeholder="Enter Zip Code..." type="text">
									<div class="input-group-button">
										<input type="submit" class="button" value="Submit">
										<input type="submit" class="button secondary" value="Find Me">
									</div>
								</div>
							</form>
						</div>
					</div>
					<div class="callout-bg text-center">
						<div class="grid-x">
							<div class="cell small-6 rvalue-heading">
								<h4>Zone</h4>
							</div>
							<div class="cell small-18 rvalue-heading">
								<h4>R-Value</h4>
							</div>
						</div>
						<div class="grid-x">
							<div class="cell auto">
								<h4>What is an R-Value?</h4>
								<p>It’s the capacity of insulation to resist heat flow.</p>
								<h4>Why is it important?</h4>
								<p>The higher the R-Value, the greater the insulating power. As R-Value increases, so does energy efficiency and home comfort. The colder, or warmer, the climate, the higher R-Value needed to maintain energy efficiency and comfort.</p>
							</div>
						</div>
					</div>
					<div class="grid-x text-center">
						<div class="cell auto">
							<img src="http://placehold.it/400x300" alt="Energy Star Recommendations by Zone" />
						</div>
					</div>
					<div class="grid-x align-right">
						<div class="cell shrink">
						<a href="#" class="button" title="Next">Next</a>
					</div>
				</div>
			</div>
		</div>

		<?php include 'includes/footer.php'; ?>
