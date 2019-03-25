
		<!-- Footer -->

		<footer class="footer">
			<div class="footer_content">
				<div class="container">
					<div class="row">
						
						<!-- About -->
						<div class="col-lg-4 footer_col">
							<div class="footer_about">
								<div class="footer_logo">
									<a href="#">
										<div class="d-flex flex-row align-items-center justify-content-start">
											<div class="footer_logo_icon"><img src="images/logo_2.png" alt=""></div>
											<div>Thing~Baby</div>
										</div>
									</a>		
								</div>
								<div class="footer_about_text">
									<p>Thing production colab with Alibaba Group,Thing baby make your day is easy</p>
								</div>
							</div>
						</div>

						<!-- Footer Links -->
						<div class="col-lg-4 footer_col">
							<div class="footer_menu">
								<div class="footer_title">Support</div>
								<ul class="footer_list">
									<li>
										<a href="#"><div>Alibaba Group</div></a>
									</li>
									<li>
										<a href="#"><div>Thing ~ Group</div></a>
									</li>
									<li>
										<a href="#"><div>ice~Group</div></a>
									</li>
								</ul>
							</div>
						</div>

						<!-- Footer Contact -->
						<div class="col-lg-4 footer_col">
							<div class="footer_contact">
								<div class="footer_title">Beri kami saran </div>
								<div class="newsletter">
									<form action="#" id="newsletter_form" class="newsletter_form">
										<input type="email" class="newsletter_input" placeholder="your coment" required="required">
										<button class="newsletter_button">+</button>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="footer_bar">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="footer_bar_content d-flex flex-md-row flex-column align-items-center justify-content-start">
								<div class="copyright order-md-1 order-2 " style="margin: auto;"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Thing ~</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</div>
		
</div>
<script type="text/javascript">
	$('.carousel').carousel()
</script>
<script src="<?= base_url() ?>assets/user_2/js/jquery-3.2.1.min.js"></script>
<script src="<?= base_url() ?>assets/user_2/styles/bootstrap-4.1.2/popper.js"></script>
<script src="<?= base_url() ?>assets/user_2/styles/bootstrap-4.1.2/bootstrap.min.js"></script>
<script src="<?= base_url() ?>assets/user_2/plugins/greensock/TweenMax.min.js"></script>
<script src="<?= base_url() ?>assets/user_2/plugins/greensock/TimelineMax.min.js"></script>
<script src="<?= base_url() ?>assets/user_2/plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="<?= base_url() ?>assets/user_2/plugins/greensock/animation.gsap.min.js"></script>
<script src="<?= base_url() ?>assets/user_2/plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="<?= base_url() ?>assets/user_2/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="<?= base_url() ?>assets/user_2/plugins/easing/easing.js"></script>
<script src="<?= base_url() ?>assets/user_2/plugins/progressbar/progressbar.min.js"></script>
<script src="<?= base_url() ?>assets/user_2/plugins/parallax-js-master/parallax.min.js"></script>
<script src="<?= base_url() ?>assets/user_2/js/custom.js"></script>
<script type="text/javascript">
  $('.carousel').carousel()
</script>
<script type="text/javascript">
  $(document).ready(function(){
    $(".ipul").hover(function(){
    $(this).attr('class','card m-3  shadow bg-white rounded');
  },function(){
    $(this).attr('class','card m-3');
  });
  $(".ipul_2").hover(function(){
    $(this).attr('class','card   shadow bg-white rounded');
  },function(){
    $(this).attr('class','card');
  });
});
</script>
<script type="text/javascript">
  
function getLokasi() {
  var $op = $("#sel1"), $op1 = $("#sel11");
  
  $.getJSON("<?php  echo site_url("user/provinsi") ?>",function(data){  
    $.each(data, function(i,field){  
    
       $op.append('<option value="'+field.province_id+'">'+field.province+'</option>'); 
       $op1.append('<option value="'+field.province_id+'">'+field.province+'</option>'); 

    });
    
  });
 
}

getLokasi();

$("#sel11").on("change", function(e){
  e.preventDefault();
  var option = $('option:selected', this).val();    
  $('#sel22 option:gt(0)').remove();
  $('#kurir').val('');

  if(option==='')
  {
    alert('null');    
    $("#sel22").prop("disabled", true);
    $("#kurir").prop("disabled", true);
  }
  else
  {        
    $("#sel22").prop("disabled", false);
    getKota1(option);
  }
});


$("#sel1").on("change", function(e){
  e.preventDefault();
  var option = $('option:selected', this).val();    
  $('#sel2 option:gt(0)').remove();
  $('#kurir').val('');

  if(option==='')
  {
    alert('null');    
    $("#sel2").prop("disabled", true);
    $("#kurir").prop("disabled", true);
  }
  else
  {        
    $("#sel2").prop("disabled", false);
    getKota(option);
  }
});




$("#sel22").on("change", function(e){
  e.preventDefault();
  var option = $('option:selected', this).val();    
  $('#kurir').val('');
  

  if(option==='')
  {
    alert('null');    
    $("#kurir").prop("disabled", true);
  }
  else
  {        
    $("#kurir").prop("disabled", false);  

  }
});


$("#kurir").on("change", function(e){
  e.preventDefault();
  var option = $('option:selected', this).val();    
 $('#mode').val('');
  var origin = $("#sel2").val();
  var des = $("#sel22").val();
  var qty = $("#berat").val();


  if(qty==='0' || qty==='')
  {
    alert('null');
  }
  else if(option==='')
  {
    alert('null');        
  }
  else
  {                
    getOrigin(origin,des,qty,option);
    getHarga(origin,des,qty,option);
    $("#mode").prop("disabled",false);  
  }
});
$("#mode").on("change", function(e){
  e.preventDefault();
  var option = $('option:selected', this).val();    
  var origin = $("#sel2").val();
  var des = $("#sel22").val();
  var qty = $("#berat").val();
  var mode =$("#mode").val();


  if(qty==='0' || qty==='')
  {
    alert('null');
  }
  else if(option==='')
  {
    alert('null');        
  }
  else
  {                
    getHarga(origin,des,qty,option);
  }
});
function getOrigin(origin,des,qty,cour) {
  var $op = $("#hasil"); 
  var i, j, x = "";
  
  $.getJSON("<?php echo site_url('user/tarif/')?>"+origin+"/"+des+"/"+qty+"/"+cour, function(data){     
    $.each(data, function(i,field){  

      for(i in field.costs)
      {
      	 $op.append('<option value="'+field.costs[i].service+'"><b>'+ field.costs[i].service + "</b> : "+field.costs[i].description+'</option>'); 
         
      }
      $("#hasil").html(data);

    });
  });
 
}
function getHarga(origin,des,qty,cour) {
  var $op = $("#mode"); 
  var i, j, x = "";
  
  $.getJSON("<?php echo site_url('user/tarif/')?>"+origin+"/"+des+"/"+qty+"/"+cour, function(data){     
    $.each(data, function(i,field){  

      for(i in field.costs)
      {
          x += "<option>" +"<b>"+ field.costs[i].service + "</b> : "+field.costs[i].description;

           for (j in field.costs[i].cost) {
                x += " Harga:" +field.costs[i].cost[j].value +" Waktu : "+field.costs[i].cost[j].etd+""+field.costs[i].cost[j].note;
            }
          x += "</option>"
      }

      $op.html(x);

    });

    });
 
}

// function getOrigin(origin,des,qty,cour) {
//   var $op = $("#hasil"); 
//   var i, j, x = "";
  
//   $.getJSON("<?php echo site_url('user/tarif/')?>"+origin+"/"+des+"/"+qty+"/"+cour, function(data){     
//     $.each(data, function(i,field){  

//       for(i in field.costs)
//       {
//           x += "<p class='mb-0'><b>" + field.costs[i].service + "</b> : "+field.costs[i].description+"</p>";

//            for (j in field.costs[i].cost) {
//                 x += field.costs[i].cost[j].value +"<br>"+field.costs[i].cost[j].etd+"<br>"+field.costs[i].cost[j].note;
//             }
         
//       }

//       $op.html(x);

//     });
//   });
 
// }

function getKota1(idpro) {
  var $op = $("#sel22"); 
  
  $.getJSON("<?= site_url('user/kota/');?>" + idpro, function(data){      
    $.each(data, function(i,field){  
    

       $op.append('<option value="'+field.city_id+'">'+field.type+' '+field.city_name+'</option>'); 

    });
    
  });
 
}

  

function getKota(idpro) {
  var $op = $("#sel2"); 
  
  $.getJSON("<?= site_url('user/kota/');?>" + idpro, function(data){      
    $.each(data, function(i,field){  
    

       $op.append('<option value="'+field.city_id+'">'+field.type+' '+field.city_name+'</option>'); 

    });
    
  });
 
}


</script>
</body>
</html>