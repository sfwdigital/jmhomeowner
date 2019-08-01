
<?php
session_start();
echo $_SESSION['city'];
echo $_SESSION['state'];
echo $_SESSION['county'];
echo $_SESSION['zipcode'];
echo $_SESSION['climate_zone'];
include 'includes/header.php';
?>




		<div class="grid-x project-location">
			<!-- Left Side -->
			<div class="cell medium-12">
				<!-- Heading -->
				<div class="grid-x">
					<div class="cell auto left-title">
						<div class="title-text">
							<h1>Project</h1>
							<p>Choose your project type below.</p>
						</div>
						<div class="title-back"></div>
					</div>
				</div>
				<!-- Content -->
				<div class="grid-container project">
					<div class="grid-x">
						<div class="cell">

								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1189 776.26" class="thehouse">
									<g id="bathroom" class="room" data-room-title="Bathroom Laundry Kitchen" data-room-text="Insulating these rooms can protect them from the dangers of moisture and humidity,as well as regulate room temperature and control sound." >
										<rect x="75" y="250" width="260" height="240"/>
										<text x="120" y="340">Bathroom</text>
										<text x="120" y="380">Laundry</text>
										<text x="120" y="420">Kitchen</text>
									</g>

									<g id="basement" class="room" data-room-title="Basement" data-room-text="With the right insulation, you can help save up to 25% of total heat typically lost by an uninsulated basement.">
										<rect x="75" y="520" width="260" height="225"/>
										<text x="120" y="650">Basement</text>
									</g>
									<g id="bedroom" class="room" data-room-title="Bedroom Study Nursury" data-room-text="In places of relaxation, our Formaldehydefree<sup>&trade;</sup> insulation can help dampen sound and control temperatures for the optimal	indoor experience.">
										<polygon points="620 240 620 490 360 490 360 360 360 45 620 240"/>
										<text x="400" y="340">Bedroom</text>
										<text x="400" y="380">Study</text>
										<text x="400" y="420">Nursury</text>
									</g>
									<g id="attic" class="room" data-room-title="Attic" data-room-text="Insulating your attic is vital because a large amount of heat can be lost through the roof, reducing energy efficiency.">
										<polygon points="335,50 335,220 110,220"/>
										<text x="210" y="190">Attic</text>
									</g>
									<g id="crawlspace" class="room" data-room-title="Crawlspace" data-room-text="These are unfinished, accessible areas below the first floor of a building. Insulating them correctly can protect your home from the effects of rapid outdoor temperature change.">
										<rect x="365" y="520" width="260" height="130"/>
										<text x="400" y="585">Crawlspace</text>
									</g>
								 <g id="garage" class="room" data-room-title="Garage" data-room-text="Stop outside air from infiltrating your home by insulating the walls between the house and the garage.">
										<rect x="650" y="340" width="310" height="150"/>
										<text x="750" y="420">Garage</text>
									</g>
									<defs>
									<clipPath id="clip-path">
										<rect class="cls-1" x="985.92" y="372.05" width="162.64" height="125.36"/>
									</clipPath>
								</defs>
								<g id="Layer_2" data-name="Layer 2">
									<g id="Layer_1-2" data-name="Layer 1">
										<g class="cls-2">
											<path class="cls-3" d="M1067.31,473.21a19.83,19.83,0,1,1,19.82,19.87A19.84,19.84,0,0,1,1067.31,473.21Z"/>
											<path class="cls-3" d="M935.86,469.64c-2-12.47-11.58-21.89-24.7-21.89s-24.27,9.46-25.2,22.08a46.35,46.35,0,0,0-.09,6.44.72.72,0,0,1-.26.61.76.76,0,0,1-.64.17,39.55,39.55,0,0,1-8-2.73c-5.79-2.62-5-6.07-5.24-11.4s.14-5.32,1.94-6.49,2.33-1.24,2.33-2.83V447c0-3.18.14-3.6,2.17-5.71a66.69,66.69,0,0,1-.16-11.92,14.94,14.94,0,0,1,3.1-8.7,181.28,181.28,0,0,1,11.17-18.1c-.55.62-1.83-.34-4.07-2.12s-2.2-3.87-1.37-3.89,8.17.29,9.06.29,1.44.48,1.44,1.16c0,0,25.46-7.53,51.77-7.17,58,.81,70.67,4.54,105.42,20.07,24.09,10.76,29.4,14.73,47.7,19.54l6.82.89c20.28,8.19,23.9,18.76,23.9,18.76a17.9,17.9,0,0,1,6.3,6.74s-.51,9.74-.92,17.41-12.39,7.86-25.8,7.87a.74.74,0,0,1-.75-.73c0-1.82-.1-6.62-.34-9.86-1-12.66-9.85-22.69-24.32-22.69s-22.48,8.87-24.43,20.35c-.89,5.2-1.4,11.6-1.54,13.32a.47.47,0,0,1-.47.44L937.52,482a.46.46,0,0,1-.46-.45A85.82,85.82,0,0,0,935.86,469.64Z"/>
											<path class="cls-4" d="M1068,422.09c-7.5-4-15-7.39-18.7-9.06-32.19-14.54-51.24-17.23-76-18.3-32.62-1.41-41.57-.28-53.52,2.23-11.28,2.36-16.89,4.82-18.08,5.39a.48.48,0,0,0-.28.39c-.75,9.36-1.28,10.94,11,14.78,12.92,4,37,6,69,7.75s63.37,5,73.92,6,21.34,2.48,23.2,2.62,2.62-.28,0-4.49-4.39-4.73-8.79-7C1068.66,421.69,1068,422.09,1068,422.09Z"/>
											<path class="cls-4" d="M976.54,394.87l4.83,30.4c1.5,5.68,2.12,9.78,2.12,9.78l1,16.32s-.32,9-1,15.49v1.81s-.16,2.29-.62,6.95v2.07"/>
											<line class="cls-4" x1="980.9" y1="395.13" x2="987.21" y2="425.6"/>
											<line class="cls-4" x1="972.32" y1="394.69" x2="976.05" y2="424.95"/>
											<line class="cls-4" x1="1111.78" y1="481.05" x2="1106.29" y2="481.54"/>
											<line class="cls-4" x1="1068.51" y1="482.67" x2="1061.25" y2="481.37"/>
											<path class="cls-4" d="M1045.21,418c4.78,0,7.52,3.81,7.52,6.6s-1,4.19-5.61,4.19-4.92-2.91-4.92-6.9S1042.77,418,1045.21,418Z"/>
											<path class="cls-4" d="M1056.45,431.37c1.24,2,2.39,6.77,2.56,11.63a147,147,0,0,1-2.11,25.33c-1.5,7.33-3.44,7.59-7.85,7.59,0,0-33.53-.3-66.18-.3-41.2,0-41.69.3-43.27-6.48-1.53-6.53-3.34-16.15-16.92-22.37-4.55-2.08-4-7-4.62-16.28a7.73,7.73,0,0,1,.51-3.3c.64-1.62,1.76-4.29,3.36-7.43,0,0,5.52-15.5,10.41-24.88"/>
											<path class="cls-4" d="M1074.56,473.21a12.58,12.58,0,1,1,12.57,12.6A12.59,12.59,0,0,1,1074.56,473.21Z"/>
											<path class="cls-4" d="M1133,450.49a88,88,0,0,0-20-5.49s-10-10.89-10.73-14.58"/>
											<path class="cls-4" d="M1078.65,433.91c13.88,1.36,21.87,2.71,21.87,2.71"/>
											<path class="cls-4" d="M1134.28,466.63a38.38,38.38,0,0,1-2.69,7.05"/>
											<path class="cls-4" d="M1004.43,436.86c-.39-2.4-2.28-3.46-8.08-4.08s-6.76.17-6.27,2.63,1.34,3.7,7.12,4.21S1004.74,438.77,1004.43,436.86Z"/>
											<path class="cls-4" d="M1068,422.09a116,116,0,0,1,5,11.15"/>
											<path class="cls-4" d="M970.28,397.62c-3-.32-6-.57-9-.77l5.11,24.7"/>
											<line class="cls-4" x1="953.5" y1="396.45" x2="956.5" y2="420.79"/>
											<line class="cls-4" x1="1044.69" y1="428.39" x2="1045.14" y2="430.3"/>
										</g>
										<path class="cls-5" d="M984,501.37l34.65-.09,76.23,0c27.73,0,38.64.08,59.43.11l14.19.14,10.94.18,9.53.25-9.53.25-10.94.18-14.19.13c-20.79,0-31.7.08-59.43.12l-76.23,0L984,502.61Z"/>
										<path class="cls-5" d="M1092.28,492.22l7.58-.1,7.76,0h8.9l8.9.07c2.85,0,5.5,0,7.77.1,1.13.05,2.18.05,3.1.13l2.4.19c1.32.13,2.08.24,2.08.24s-.76.12-2.08.25l-2.4.19c-.92.08-2,.08-3.1.13-2.27.1-4.92.06-7.77.1l-8.9.08h-8.9l-7.76,0-7.58-.09Z"/>
										<line class="cls-5" x1="985.21" y1="493.44" x2="1086.51" y2="493.44"/>
										<path class="cls-6" d="M1025,313.31,966.12,187.45l-1-2.19H641.18l-7.86-65-.4-3.35H509.34L351.76,1.65,349.52,0,245.18,76.3,1.56,254.46,0,255.6v33.49l12.47,3.39,34.09,9.3,0,62.45v84.44l0-.05-.64,327.64H363.55V662.6h290l-.5-142,334.25-1.45v-181l23.84-.06h14.29V314.08ZM46.58,297.84,16.37,289.6l30.21-22.32ZM333.27,744.46H76.14V519.92H333.27Zm0-257.14H76.13V251.56H333.27Zm0-267.25-221.09-.69L333.27,54.82ZM364.59,53.31l.53.09L617.66,241.61V487.32l-253.07-.09ZM618.87,630.49,364.72,631V519.92H618.87Zm338.6-143.18-304.75,0V342.83l304.75-.63ZM650.08,319.94V266.3l33.45,25.07Zm15.25-7L696.23,287l.5-30.89L513.11,120.69H629.55l8.26,68.38H962.68l58,123.9Z"/>
										<polygon class="cls-7" points="696.23 287.04 696.73 256.15 513.11 120.69 629.55 120.69 637.81 189.07 962.68 189.07 1020.67 312.97 665.33 312.97 696.23 287.04"/>
										<polygon class="cls-7" points="683.53 291.37 650.08 319.94 650.08 266.3 683.53 291.37"/>
									</g>
								</g>
								</svg>

						</div>
					</div>
					<div class="grid-x align-right">
						<div class="cell medium-18">
							<div class="room-card">
								<div class="card-heading">
									<h5></h5>
								</div>
								<div class="card-content">
									<p>Select a room.</p>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
			<!-- end Left Side -->
			<!-- Right Side -->
			<div class="cell medium-12">
				<!-- Heading -->
				<div class="grid-x">
					<div class="cell auto right-title">
						<div class="title-text">
							<h1>Your Location</h1>
							<p>Enter your zip code below to find your R-Value.</p>
						</div>
						<div class="title-back"></div>
					</div>
				</div>
				<!-- Content -->
				<div class="grid-container location">
					<div class="grid-x">
						<div class="cell">
							<form>
								<div class="input-group">
									<input class="input-group-field" id="location-field" placeholder="Enter Zip Code..." type="text" value="R-11">
									<div class="input-group-button">
										<input type="submit" class="button" value="Submit">
										<!-- <input type="submit" class="button secondary" value="Find Me"> -->
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
							<img src="images/r-value-map.png" alt="Energy Star Recommendations by Zone" />
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php include 'nav.php';?>
</div>
<?php include 'includes/footer.php'; ?>
