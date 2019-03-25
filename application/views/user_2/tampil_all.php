
<div class="super_container_inner">
		<div class="super_overlay"></div>

		<!-- Home -->

		<div class="products">
			<div class="container pt-3">
			<nav aria-label="breadcrumb" style="">
			  <ol class="breadcrumb">
			    <li class="breadcrumb-item"><a href="<?= site_url();?>">Home</a></li>
			    <li class="breadcrumb-item active" aria-current="page">All</li>
			  </ol>
			</nav>
				<div class="row products_row">
								<?php foreach ($content as $i) :?>
								<div class="card m-3 ipul " style="width: 15rem;">
								  <img class="card-img-top" src="<?= base_url();?>assets/images/<?= $i->foto ?>" alt="Card image cap" style="height: 220px;">
								  <div class="card-body">
								    <h5 class="card-title"><?= $i->nama ?></h5>
								    <p class="card-text">$ <?= $i->harga ?></p>
								    <a href="<?= site_url("user/detail/").$i->id;?>" class="btn float-right btn-outline-primary"><i class="fa fa-shopping-cart"></i></a>
							  </div>
						</div>
					<?php endforeach ?>

				</div>
			</div>
		</div>

		<!-- recomend -->