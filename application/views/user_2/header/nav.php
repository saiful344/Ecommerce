
<!-- Menu -->

<div class="menu">

	<!-- Search -->
	<div class="menu_search">
		<form action="#" id="menu_search_form" class="menu_search_form">
			<input type="text" class="search_input" placeholder="Search Item" required="required">
			<button class="menu_search_button"><img src="<?= base_url() ?>assets/user_2/images/search.png" alt=""></button>
		</form>
	</div>
	<!-- Navigation -->
	<div class="menu_nav">
		<ul>
			<li><a href="#">Women</a></li>
			<li><a href="#">Men</a></li>
			<li><a href="#">Kids</a></li>
			<li><a href="#">Home Deco</a></li>
			<li><a href="#">Contact</a></li>
		</ul>
	</div>
	<!-- Contact Info -->
	<div class="menu_contact"> 
		<div class="menu_social">
			<ul class="menu_social_list d-flex flex-row align-items-start justify-content-start">
				<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
			</ul>
		</div>
	</div>
</div>

<div class="super_container">

	<!-- Header -->

	<header class="header">
		<div class="header_overlay"></div>
		<div class="header_content d-flex flex-row align-items-center justify-content-start">
			<div class="logo">
				<a href="#">
					<div class="d-flex flex-row align-items-center justify-content-start">
						<div><img src="<?= base_url() ?>assets/user_2/images/logo_1.png" alt=""></div>
						<div><a href="<?= site_url("user");?>" class="btn"><span>Thing~<span class="text-primary">baby</span></span></a></div>
					</div>
				</a>	
			</div>
			<div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
			<nav class="main_nav">
				<ul class="d-flex flex-row align-items-start justify-content-start">
					<li class="active"><a href="#">Women</a></li>
					<li><a href="#">Men</a></li>
					<li><a href="#">Kids</a></li>
					<li><a href="#">Home Deco</a></li>
					<li><a href="#">Contact</a></li>
				</ul>
			</nav>
			<div class="header_right d-flex flex-row align-items-center justify-content-start ml-auto">
				<!-- User -->
				<div class="user"><a href="#"><div><img src="<?= base_url() ?>assets/user_2/images/user.svg" alt="https://www.flaticon.com/authors/freepik"><div>1</div></div></a></div>
				<!-- Cart -->
				<div class="user"><a href="<?= site_url("user/cart")?>"><div><img class="svg" src="<?= base_url() ?>assets/user_2/images/cart.svg" alt="https://www.flaticon.com/authors/freepik"><div> <?php
											$text_cart_url = "<span class='qty'>";
									        $text_cart_url .=$this->cart->total_items() ."</span>";
									      ?>
									      <?= $text_cart_url?></div></div></a></div>
				<!-- Phone -->
								<!-- Search -->
				<div class="header_search">
					<form action="#" id="header_search_form">
						<input type="text" class="search_input" placeholder="Search Item" required="required">
						<button class="header_search_button"><img src="<?= base_url() ?>assets/user_2/images/search.png" alt=""></button>
					</form>
				</div>

			</div>
		<a href="<?= site_url("login/logout")?>"><i class="fa fa-sign-out"></i></a>
		</div>
	</header>