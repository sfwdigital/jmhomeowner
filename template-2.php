<?php

$squarefootage = $_POST['squarefootage'];

// session_start();
// include 'includes/session.php';

?>
					<!-- Template 2 -->
					<div class="grid-container">
						<div class="grid-x grid-margin-x">
							<div class="cell medium-18">
								<div class="product-description-wrapper">
									<div class="grid-x grid-margin-x align-middle" data-equalizer>
										<div class="cell small-6 medium-6 rvalue-card text-center" style="background-color: #009340;" data-equalizer-watch><!-- bg changes based on rvalue -->
											<h2>R-<strong>11</strong></h2>
										</div>
										<div class="cell small-18 meidum-18 product-description" data-equalizer-watch>
											<h5>Product Type Title</h5>
											<p><small>Product type description - Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean lorem enim, tristique. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean lorem enim, tristique.</small></p>
										</div>
									</div>
								</div>
							</div>
							<div class="cell medium-6">
								<img src="http://placehold.it/340" alt="Scale Model of Product" />
							</div>
						</div>
						<div class="grid-x grid-margin-x">
							<div class="cell medium-16">
								<div class="main-product-card">
									<div class="grid-x grid-padding-x">
										<?php
											include('_db_connect.php');
											// $rsltb = $db->prepare("SELECT * FROM products WHERE `r_value` = 'R-38' AND `square_feet` = '64'");
											$rslt_a = $db->prepare("SELECT * FROM products WHERE `product_id` = '28'");
											$rslt_a->execute();
											for($i=0; $rsltrow_a = $rslt_a->fetch(); $i++){
												if (is_numeric($squarefootage)) {
													$amount_of_product_a = $squarefootage / $rsltrow_a['square_feet'];
													$price_a = $rsltrow_a['price']*	floor($amount_of_product_a);
												}else{
													$amount_of_product_a = 0;
													$price_a = '';

												}
												echo'
												<div class="cell medium-12">
													<h6>Interior</h6>
													<img src="http://placehold.it/350x200" alt="<?php echo $product_title; ?>" />
													<h4>'.$rsltrow_a['name'].'</h4>
													<p><small>Product description - '.$rsltrow_a['description'].'</small></p>
													<h6>Recommended Amount:</h6>
													<p><strong>'.floor($amount_of_product_a).'</strong></p>
												</div>
												';
											};

											$rslt_b = $db->prepare("SELECT * FROM products WHERE `product_id` = '54'");
											$rslt_b->execute();
											for($i=0; $rsltrow_b = $rslt_b->fetch(); $i++){
												if (is_numeric($squarefootage)) {
													$amount_of_product_b = $squarefootage / $rsltrow_b['square_feet'];
													$price_b = $rsltrow_b['price']*	floor($amount_of_product_b);
												}else{
													$amount_of_product_b = 0;
													$price_b = '';
												}
												echo'
												<div class="cell medium-12">
													<h6>Interior</h6>
													<img src="http://placehold.it/350x200" alt="<?php echo $product_title; ?>" />
													<h4>'.$rsltrow_b['name'].'</h4>
													<p><small>Product description - '.$rsltrow_b['description'].'</small></p>
													<h6>Recommended Amount:</h6>
													<p><strong>'.floor($amount_of_product_b).'</strong></p>
												</div>
												';
											};
											if ($price_a != '' && $price_b != ''){
												$totalprice = $price_a+$price_b;
											}else{
												$totalprice = '';
											}
										?>
									</div>
								</div>
								<div class="product-card-price">
									<div class="grid-x">
										<?php
											if($totalprice != ''){
												echo '<h6>Est. Total: $'.$totalprice.'.00</h6>';
											}else{
												echo'';
											}
										?>
									</div>
								</div>
							</div>

							<div class="cell medium-8">
								<div class="project-card">
									<div class="project-card-content">
										<h6>Project Checklist</h6>
										<ul>
											<li>List Item 1</li>
											<li>List Item 2</li>
											<li>List Item 3</li>
											<li>List Item 4</li>
										</ul>
										<hr />
										<h6>How to Guide</h6>
									</div>
									<div class="responsive-embed">
										<iframe width="420" height="315" src="https://www.youtube.com/embed/mM5_T-F1Yn4" frameborder="0" allowfullscreen></iframe>
									</div>
									<div class="project-card-content">
										<?php
											if($totalprice != ''){
												echo '<h6>Estimate Project Total</h6>
															<p><strong>$'.$totalprice.'.00</strong></p>';
											}else{
												echo'';
											}
										?>
									</div>
								</div>
							</div>
						</div>

					</div>
