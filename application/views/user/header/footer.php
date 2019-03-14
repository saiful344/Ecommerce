
	<!-- FOOTER -->
	<footer id="footer" class="section section-grey">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- footer widget -->
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="footer">
						<!-- footer logo -->
						<div class="footer-logo">
							<a class="logo" href="#">
		            <img src="./img/logo.png" alt="">
		          </a>
						</div>
						<!-- /footer logo -->

						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna</p>

						<!-- footer social -->
						<ul class="footer-social">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
						</ul>
						<!-- /footer social -->
					</div>
				</div>
				<!-- /footer widget -->

				<!-- footer widget -->
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="footer">
						<h3 class="footer-header">Ip_prod</h3>
						<ul class="list-links">
							<li><a href="#">Sintes</a></li>
							<li><a href="#">My Wishlist</a></li>
						</ul>
					</div>
				</div>
				<!-- /footer widget -->

				<div class="clearfix visible-sm visible-xs"></div>

				<!-- footer widget -->
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="footer">
						<h3 class="footer-header">Product</h3>
						<ul class="list-links">
							<li><a href="#">OL_shop</a></li>
							<li><a href="#">News_ol</a></li>
							<li><a href="#">Company_pro</a></li> 	
						</ul>
					</div>
				</div>
				<!-- /footer widget -->

				<!-- footer subscribe -->
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="footer">
						<h3 class="footer-header">Saran</h3>
						<p>Saran anda akan membuat kami menjadi lebih baik lagi </p>
						<form>
							<div class="form-group">
								<input class="input" placeholder="Enter Email Address">
							</div>
							<button class="primary-btn">Send</button>
						</form>
					</div>
				</div>
				<!-- /footer subscribe -->
			</div>
			<!-- /row -->
			<hr>
			<!-- row -->
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<!-- footer copyright -->
					<div class="footer-copyright">
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
<!-- 						Copyright &copy;<script>document.write(new Date().getFullYear());</script>Thing-baby ||  by <a href="https://colorlib.com" target="_blank">Ip_prod</a>
 -->						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					</div>
					<!-- /footer copyright -->
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</footer>
	<!-- /FOOTER -->

	<!-- jQuery Plugins -->
	<script src="<?= base_url();?>assets/user/js/jquery.min.js"></script>
	<script src="<?= base_url();?>assets/user/js/bootstrap.min.js"></script>
	<script src="<?= base_url();?>assets/user/js/slick.min.js"></script>
	<script src="<?= base_url();?>assets/user/js/nouislider.min.js"></script>
	<script src="<?= base_url();?>assets/user/js/jquery.zoom.min.js"></script>
	<script src="<?= base_url();?>assets/user/js/main.js"></script>

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
