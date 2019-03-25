
<style type="text/css">
	.more{
		background-color: #2fce98;
		color: #fff;
		margin-right:4%;
		transition: 0.5s;
	}
	.more:hover{
		background-color:#1cffb2;;
		color: #fff;
		margin-right:3%;
	}
	
</style>
<div class="super_container_inner">
		<div class="super_overlay"></div>

		<!-- Home -->

		<!-- Products -->
		<div class="container shadow bg-white rounded pt-2 pb-2">
		<div id="carouselExampleIndicators" class="carousel slide" style="margin-top:8%;" data-ride="carousel">
		  <ol class="carousel-indicators">
		    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		  </ol>
		  <div class="carousel-inner">
		    <div class="carousel-item active">
		      <img class="d-block w-100" src="<?= base_url();?>assets/images/1.jpg" alt="First slide" width="900px" height="400">	
		        <div class="carousel-caption d-none d-md-block">
			    <h5>New Style and class</h5>
			    <p>...</p>
			  </div>
		  </div>
		    <div class="carousel-item">
		      <img class="d-block w-100" src="<?= base_url();?>assets/images/2.jpg" alt="Second slide" width="900" height="400">
		    </div>
		    <div class="carousel-item">
		      <img class="d-block w-100" src="<?= base_url();?>assets/images/3.jpg" alt="Third slide"  width="900px" height="400">
		    </div>
		  </div>
		  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>
	</div>
		<div class="products">
			<div class="container">
					<div style="border-bottom: 2px solid #2fce98 "><h3>New Sales</h3></div>
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
							<a href="<?= site_url('user/tampil_all');?>" class="btn float-right more">GO Shopping</a>
			</div>
		</div>

		<!-- recomend -->
				<div class="products">
			<div class="container">
					<div style="border-bottom: 2px solid #2fce98 "><h3>Recomended</h3></div>
				<div class="row products_row">
								<?php foreach ($content_2 as $i) :?>
								<div class="card m-3 ipul" style="width: 15rem;">
								  <img class="card-img-top" src="<?= base_url();?>assets/images/<?= $i->foto ?>" alt="Card image cap" style="height: 220px;">
								  <div class="card-body">
								    <h5 class="card-title"><?= $i->nama ?></h5>
								    <p class="card-text">$ <?= $i->harga ?></p>
								    <a href="<?= site_url("user/detail/").$i->id;?>" class="btn float-right btn-outline-primary"><i class="fa fa-shopping-cart"></i></a>
							  </div>
						</div>
					<?php endforeach ?>
				</div>
				<div></div>
				<a href="" class="btn float-right more">GO Shopping</a>
			</div>
		</div>

		<!-- Boxes -->