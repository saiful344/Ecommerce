
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
		<div class="container" style="margin-top: 8%;">
		<div class="row">
		<?php foreach ($content as $list) :?>
		  <div class="col-sm-3 mt-2 mb-2 ">
		    <div class="card ipul_2">
		      <div class="card-body">
		      	<img src="<?= base_url();?>assets/images/kategori/<?= $list->icon ?>" width="100"><h5 class="card-title float-right"><?= $list->nama ?></h5>
		      </div>
		      <a href="<?= site_url('user/list/').$list->nama ;?>" class="btn btn-light">Go shopping</a>
		    </div>
		  </div>
		<?php endforeach ?>
		</div>
	</div>
</div>
