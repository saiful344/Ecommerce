<style type="text/css">
	.atas{
		height: 140px;
	}
</style>
<div class="atas"></div>
<div class="product">
			<div class="container">
				<div class="row">
					
					<!-- Product Image -->
					<div class="col-lg-6">
						<div class="product_image_slider_container">
							<div id="slider" class="flexslider">
								<ul class="slides">
<!-- 									<li>
										<img src="<?= base_url();?>assets/images/<?= $content['foto'] ?>" />
									</li> -->
<!-- 									<li>
										<img src="images/product_image_1.jpg" />
									</li>
									<li>
										<img src="images/product_image_1.jpg" />
									</li>
									<li>
										<img src="images/product_image_1.jpg" />
									</li>
									<li>
										<img src="images/product_image_1.jpg" />
									</li>
									<li>
										<img src="images/product_image_1.jpg" />
									</li>
									<li>
										<img src="images/product_image_1.jpg" />
									</li>
									<li>
										<img src="images/product_image_1.jpg" />
									</li> -->
								</ul>
							</div>
							<div class="carousel_container">
								<div id="carousel" class="flexslider">
									<ul class="slides">
										<li>
											<div><img src="<?= base_url();?>assets/images/<?= $content['foto'] ?>" /></div>
										</li>
<!-- 										<li>
											<div><img src="images/product_2.jpg" /></div>
										</li>
										<li>
											<div><img src="images/product_3.jpg" /></div>
										</li>
										<li>
											<div><img src="images/product_4.jpg" /></div>
										</li>
										<li>
											<div><img src="images/product_5.jpg" /></div>
										</li>
										<li>
											<div><img src="images/product_6.jpg" /></div>
										</li>
										<li>
											<div><img src="images/product_7.jpg" /></div>
										</li>
										<li>
											<div><img src="images/product_8.jpg" /></div>
										</li> -->
									</ul>
								</div>
								<div class="fs_prev fs_nav disabled"><i class="fa fa-chevron-up" aria-hidden="true"></i></div>
								<div class="fs_next fs_nav"><i class="fa fa-chevron-down" aria-hidden="true"></i></div>
							</div>
						</div>
					</div>

					<!-- Product Info -->
					<div class="col-lg-6 product_col">
						<div class="product_info">
							<div class="product_name"><?= $content['nama'] ?></div>
							<div class="product_category">In <a href="category.html"><?= $content['jenis'] ?></a></div>
							<div class="product_rating_container d-flex flex-row align-items-center justify-content-start">
								<div class="rating_r rating_r_4 product_rating"><i></i><i></i><i></i><i></i><i></i></div>
								<div class="product_reviews">4.7(5665665)</div>
								<div class="product_reviews_link"><a href="#">Reviews</a></div>
							</div>
							<div class="product_price">$ <?= $content['harga'] ?> </div>
							<div class="product_size">
								<div class="product_size_title mt-3">Select Size</div>
								<ul class="d-flex flex-row align-items-start justify-content-start">
									<li>
										<input type="radio" id="radio_1" disabled name="product_radio" class="regular_radio radio_1">
										<label for="radio_1" class="mr-2">XS</label>
									</li>
									<li>
										<input type="radio" id="radio_2" name="product_radio" class="regular_radio radio_2" checked>
										<label for="radio_2" class="mr-2">S</label>
									</li>
									<li>
										<input type="radio" id="radio_3" name="product_radio" class="regular_radio radio_3">
										<label for="radio_3" class="mr-2">M</label>
									</li>
									<li>
										<input type="radio" id="radio_4" name="product_radio" class="regular_radio radio_4">
										<label for="radio_4" class="mr-2">L</label>
									</li>
									<li>
										<input type="radio" id="radio_5" name="product_radio" class="regular_radio radio_5">
										<label for="radio_5" class="mr-2">XL</label>
									</li>
									<li>
										<input type="radio" id="radio_6" disabled name="product_radio" class="regular_radio radio_6">
										<label for="radio_6" class="mr-2">XXL</label>
									</li>
								</ul>
							</div>
							<div class="product_text">
								<p><?= $content['deskripsi'] ?></p>
							</div>
							<div class="product_buttons">
								<?php echo form_open('User/add_cart');?>
								<div class="row">
								<input type="hidden" name="id" value="<?= $content['id']?>">
									<div class="form-group col-md-3">
									<span class="text-uppercase">QTY: </span>
									<input class="form-control" min="0" type="number" name="qty">	
									</div>			
									<div class="mt-3">	
										<button type="submit" class="btn btn-outline-primary ml-2"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
										<button type="button" class="btn btn-outline-secondary">Like</button>
										</div>
									</div>

								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
