<style type="text/css">
.gambar img{
	width: 70px;
}
</style>
<div class="super_container_inner">
		<div class="super_overlay"></div>

		<!-- Home -->

		<!-- Products -->

	<div class="products">		
	<div class="container">
	<!-- section -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
					<div class="col-md-12 mt-4">
						<div class="order-summary clearfix">
							<div class="section-title">
								<h3 class="title">Order Review</h3>
							</div>
							<table class="shopping-cart-table table">
								<thead>
									<tr>
										<th>Product</th>
										<th></th>
										<th class="text-center">Price</th>
										<th class="text-center">Quantity</th>
										<th class="text-center">Weight</th>
										<th class="text-center">Total</th>
										<th class="text-right"></th>
									</tr>
								</thead>
								<tbody>
									<?php $sum=0; foreach ($this->cart->contents() as $items) :?>
									<tr>
										<td class="gambar"><img src="<?= base_url();?>assets/images/<?= $items['image'];?>" alt=""></td>
										<td class="details">
											<a href="#"><?= $items['name']?></a>
											<ul>
												<li><span>Size: XL</span></li>
												<li><span><?= $items['berat']?></span></li>
											</ul>
										</td>
										<td class="price text-center"><strong>$<?php echo $this->cart->format_number($items['price']); ?></strong><br><del class="font-weak"><small>$40.00</small></del></td>
										<td class="qty text-center">
											<a href="<?= site_url("User/kurang_cart/").$items['rowid']."/".$items['qty']."/".$items['id'];?>" class="btn">-</a>
											<?= $items['qty']?>
											<a href="<?= site_url("User/edit_cart/").$items['rowid']."/".$items['qty']."/".$items['id'];?>" class="btn">+</a>
										</td>
										<td class="price text-center"><?= $items['total']?></td>
										<td class="total text-center"><strong class="primary-color">$<?php echo $this->cart->format_number($items['subtotal']); ?></strong></td>
										<td class="text-right"><a href="<?= site_url("User/delete_cart/").$items['rowid'];?>" class="main-btn icon-btn"><i class="fa fa-close"></i></a></td>
										<?php $sum += $items['total'];?>
									</tr>
								<?php endforeach ?>
								</tbody>
								<tfoot>
									<tr>
										<th class="empty" colspan="4"></th>
										<th>Weight</th>
										<td colspan="2"><?= $sum ?></td>
									</tr>
									<tr>
										<th class="empty" colspan="4"></th>
										<th>TOTAL</th>
										<th colspan="2" class="total">$<?php echo $this->cart->format_number($this->cart->total()); ?></th>
									</tr>
								</tfoot>
							</table>
							<div class="pull-right">
								<a href="<?= site_url("User/payment")?>" class="btn btn-primary">Payment</a>
								<a href="<?= site_url("User/cart_trash")?>" class="btn btn-danger">Remove</a>
								<a href="<?= site_url("User")?>" class="btn btn-success">Belanja</a>
							</div>
						</div>

					</div>
				</div>
			</div>
</div>
</div>
</div>
