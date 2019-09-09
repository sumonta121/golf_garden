<!DOCTYPE html>
<html lang="en">
<head>
@include('partiles.top_head_css_link')

<style>
.rightnav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 99999999;
    top: 0;
    right: 0;
    background-color: #FFFFFF;
	border:2px #fdd670 solid;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
	margin-top:70px;
}

.rightnav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
    color:#FFFFFF;
}
.closebtn:hover {
    color: #CCCCCC;
    text-decoration:none;
}
.sidenav1 {
    color: #FFFFFF;
	font-size:16px;
	text-align:center;
	background:#009933;
	padding-top:5px;
	padding-bottom:5px;
    text-decoration:none;
}

@media screen and (max-height: 450px) {
  .rightnav {padding-top: 15px;}
  .rightnav a {font-size: 18px;}
}
</style>

</head>
<body>
<div class="container-fluid">
  @include('partiles.top_menu')
  <div class="row" style="padding-top:50px;">
    <div class="col-md-2 hidden-sm  hidden-xs sidenav" style="padding-left:0px;">
      <ul class="mtree transit" style="width:245px; background:#FFFFFF;">
        <li> <a style="background:#FFFFFF; font-weight:normal; font-size:14px; color:#000000; padding-top:10px;" href="#"> Offer
          <input style="background:#FFFFFF; border:1px #fdd670 solid; padding-top:1px; padding-left:5px; padding-right:5px; padding-bottom:1px;" name="" value="5" type="button">
          </a> </li>
        <li> <a style="background:#FFFFFF; font-weight:normal; font-size:14px; color:#000000; padding-top:10px;" href="#"> Product Request </a> </li>
        <li style="border-bottom:1px #dacfcf solid; padding-top:5px; padding-bottom:10px;"> </li>
        <li style="padding-top:10px;"> </li>

		@foreach($categories as $categories)
		@php $catgoryidByname = App\Sub_category::where('category_id', $categories->id)->orderBy('id', 'desc')->get(); @endphp
        <li><a category-id="{{ $categories->id }}" class="category_click" style="background:#FFFFFF; font-weight:normal; font-size:14px; color:#000000; padding-top:10px;" href="#"><i style="background:#FFFFFF; font-size:18px;" class="fa fa-child" aria-hidden="true"></i> {{ $categories->name }}</a>
          <ul>
		  @php foreach ($catgoryidByname as $subcategories) { @endphp
            <li><a sub-category-id="{{ $subcategories->id }}" class="Sub_category_click" style="background:#FFFFFF; color:#000000;" href="#">{{ $subcategories->name }}</a></li>
		 @php } @endphp
          </ul>
        </li>
		@endforeach


      </ul>
    </div>
    <div class="col-md-10 col-sm-12 col-xs-12 main category_Bysub_category subcategory_Bysub_subcategory search_product_Value"  style="padding-left:20px; padding-right:0px; min-height:700px; border-left:1px #ecc766 solid;">
      <div style="border-left:1px #ecc766 solid; height:100%; min-height:700px;">
        <div class="row" style="margin-top:10px; margin-left:0px;">
          <div align="center"> </div>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
          <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">

			  @foreach($sliders as $sliders)
              <div class="item {{ $loop->index == 0 ? 'active' : '' }}"> <img style="width:100%;" src="{{asset('images/slider/' . $sliders->image)}}" alt="{{$sliders->name}}"> </div>
              @endforeach

            </div>
            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left"></span> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#myCarousel" data-slide="next"> <span class="glyphicon glyphicon-chevron-right"></span> <span class="sr-only">Next</span> </a> </div>
        </div>
        <div class="row" align="center" style="padding-top:10px; margin-left:0px;">
          <div class="col-md-6" style="padding-left:0px; padding-right:3px;"> <img class="img-responsive" src="http://sundarbanbd.com/SAIFUL_DEMO/POPY_BAZAR/uploads/1550902787.png"/></div>
          <div class="col-md-6" style="padding-right:0px; padding-left:3px;"> <img class="img-responsive" src="http://sundarbanbd.com/SAIFUL_DEMO/POPY_BAZAR/uploads/1550902790.png"/></div>
        </div>
        <div class="row" style="margin-top:30px; margin-left:0px;">
          <div align="center">
            <h3>Our Product Category</h3>
          </div>
          <div class="container" style="padding-top:10px;">
            <div class="row form-group product-chooser">
              @foreach($categories2 as $categories2)
              <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                <div class="product-chooser-item selected">
                  <div class="col-xs-8 col-sm-8 col-md-12 col-lg-12" align="center"> <span class="title" style="color:#000000;"> <a style="color:#000000; text-decoration:none;" category-id="{{ $categories->id }}" class="category_click" href="#">{{ $categories2->name }}  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <i class="fa fa-child" aria-hidden="true"></i> </a> </span> </div>
                  <div class="clear"></div>
                </div>
              </div>
              @endforeach
            </div>
          </div>
        </div>
        <div class="row" align="center" style="padding-top:10px; margin-left:0px;">
          <div class="col-md-6" style="padding-left:0px; padding-right:3px;"> <img class="img-responsive" src="http://sundarbanbd.com/SAIFUL_DEMO/POPY_BAZAR/uploads/1550902843.png"/></div>
          <div class="col-md-6" style="padding-right:0px; padding-left:3px;"> <img class="img-responsive" src="http://sundarbanbd.com/SAIFUL_DEMO/POPY_BAZAR/uploads/1550902846.png"/></div>
        </div>
        <div class="row" align="center" style="padding-top:10px; margin-left:0px;">
          <h3 style="padding-bottom:20px;">How to order from Poppy is the market?</h3>
          <div class="col-md-12" style="padding-left:0px; padding-right:3px;"> <a target="_blank" href="https://www.youtube.com/channel/UChtJe3R0ih5JjtpNZJ4vyaQ?view_as=subscriber"> <img class="img-responsive" style="height:360px; width:100%;" src="http://sundarbanbd.com/SAIFUL_DEMO/POPY_BAZAR/uploads/1551595894.jpg"/> </a> </div>
        </div>
        <style>
				.del{
				 text-decoration:line-through;
				 color:#000000;
				 }
				</style>
        <div class="row" style="margin-top:10px; margin-left:0px;">
          <div align="center">
            <h3>Great Offer</h3>
          </div>
          <div class="container">
            <div class="slider_in">
              <div id="owl-carousel" class="owl-carousel owl-theme">
                @foreach($great_offerproducts as $great_offerproduct)
                <div class="item" style="border:#fdd670 1px solid; padding-bottom:10px;">
                  <div class=""><a href="{{ route('Product_details', $great_offerproduct->slug) }}"> <img style="height:200px;" src="{{asset('images/products/' . $great_offerproduct->image)}}" alt=""></a>
                    <div style="font-size:14px; text-align:center; padding-top:20px;">{{$great_offerproduct->title}}</div>
                    <div style="font-size:14px; text-align:center; padding-top:20px;"> {{$great_offerproduct->price}} <del class="del">{{$great_offerproduct->offer_price}} </del> </div>
                    <div style="border:1px #fdd670 solid; padding:5px; margin-right:10px; margin-left:10px; font-size:16px; text-align:center;"> 
					  <a product-id="{{ $great_offerproduct->id }}"  class="cart_store hidden-lg hidden-md" style="cursor:pointer;"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart </a> 
					  <a onClick="openNav()" product-id="{{ $great_offerproduct->id }}"  class="cart_store hidden-sm hidden-xs" style="cursor:pointer;"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart </a>
					  </div>
                  </div>
                </div>
                @endforeach
              </div>
            </div>
          </div>
        </div>
        <div class="row" align="center" style="padding-top:20px; margin-left:0px;">
          <section id="count_parallax" class="parallax" style="background-image: url('http://sundarbanbd.com/SAIFUL_DEMO/POPY_BAZAR/frontend/image/banner-corporate-page.jpg');" data-stellar-background-ratio="0.6" data-stellar-vertical-offset="20">
            <div class="" style="background-color: rgba(100, 100, 10, 0.68);">
              <div class="container">
                <div style="padding-top:40px; padding-left:30px; font-weight:bold;"><i style="color:#FFFFFF; font-size:62px;" class="fa fa-briefcase" aria-hidden="true"></i></div>
                <div style="padding-top:10px; color:#FFFFFF; padding-left:40px; font-size:16px;">Are you a business owner?</div>
                <div style="padding-top:5px; padding-left:40px; color:#FFFFFF; font-size:16px;">Become corporate customer</div>
                <div style="padding-top:20px; color:#FFFFFF; font-size:16px;" align="center">
                  <div class="col-md-1"></div>
                  <div class="col-md-4"> <i style="color:#FFFFFF; padding-left:0px; font-size:62px;" class="fa fa-money" aria-hidden="true"></i><br/>
                    Special corporate value</div>
                  <div class="col-md-3"> <i style="color:#FFFFFF; padding-left:0px; font-size:62px;" class="fa fa-phone" aria-hidden="true"></i><br/>
                    24 hours Support</div>
                  <div class="col-md-3"><i style="color:#FFFFFF; font-size:62px;" class="fa fa-ambulance" aria-hidden="true"></i><br/>
                    Acceptable free delivery</div>
                </div>
                <br/>
                <br/>
                <div style="margin-top:20px; color:#FFFFFF; font-size:16px;" align="center">
                  <div class="col-md-2"></div>
                  <div class="col-md-3"> </div>
                  <div class="col-md-3" style="margin-top:20px; margin-bottom:50px;"><br/>
                  </div>
                  <div class="col-md-3"></div>
                </div>
              </div>
            </div>
          </section>
        </div>
        <div class="row" style="background:#f7f7f7; margin-left:0px;">
          <div style="padding-bottom:55px; background:#f7f7f7;">
            <div style="padding-top:10px;font-weight:bold; border-left:1px #ecc766 solid; background:#f7f7f7;">
              <div class="col-md-4" style="padding-left:0px;"><img style="height:40px;" src="http://sundarbanbd.com/SAIFUL_DEMO/POPY_BAZAR/frontend/image/one_hour.png">1 hour delivery <img style="height:40px;" src="http://sundarbanbd.com/SAIFUL_DEMO/POPY_BAZAR/frontend/image/delevery.png">cash on delivery</div>
              <div class="col-md-8" style="text-align:right;" align="right" >Please provide <img style="height:40px;" src="http://sundarbanbd.com/SAIFUL_DEMO/POPY_BAZAR/frontend/image/1.png"> <img style="height:40px;" src="http://sundarbanbd.com/SAIFUL_DEMO/POPY_BAZAR/frontend/image/2.png"> <img style="height:40px;" src="http://sundarbanbd.com/SAIFUL_DEMO/POPY_BAZAR/frontend/image/3.png"> <img style="height:40px;" src="http://sundarbanbd.com/SAIFUL_DEMO/POPY_BAZAR/frontend/image/4.png"> <img style="height:40px;" src="http://sundarbanbd.com/SAIFUL_DEMO/POPY_BAZAR/frontend/image/5.png"> </div>
            </div>
            <div style="padding-top:30px; color:#FFFFFF; font-size:16px; background:#f7f7f7;">
              <div style="padding-bottom:20px; padding-top:20px;"><img style="height:35px; width:200px;" class="img-responsive" src="http://sundarbanbd.com/SAIFUL_DEMO/POPY_BAZAR/uploads/1550983445.png" title="" alt=""/></div>
              <div class="col-md-8" align="left" style="color:#000000; font-size:13px; border-left:1px #ecc766 solid; background:#f7f7f7;">Poppy Market Bangladesh's first online-based shops. Byastataya on the sidelines of the society in its essentials to the people who are able to shop from home anayasei target market started with Poppy. "Save time, save costs," Poppy market with the slogan citizens engaged in trying to get rid of their daily harassment. This service is currently confined to the country, but we hope that soon this service will scatter throughout the country.
                <div class="row" style="color:#000000; padding-top:20px; background:#f7f7f7; font-size:13px; padding-left:0px;">
                  <div class="col-md-4">
                    <div style="border-bottom:1px #ededed solid; font-size:15px; font-weight:bold;">Customer service</div>
                    <div style="padding-top:5px;"><a style="color:#000000;" href="http://sundarbanbd.com/SAIFUL_DEMO/POPY_BAZAR/Contact.html">Contact Us</a></div>
                    <div style="padding-top:5px; padding-bottom:40px;"><a style="color:#000000;" href="http://sundarbanbd.com/SAIFUL_DEMO/POPY_BAZAR/Others/index/Frequently_asked_questions.html">Frequently asked questions</a></div>
                  </div>
                  <div class="col-md-4" >
                    <div style="border-bottom:1px #ededed solid; font-size:15px; font-weight:bold;">Poppy market</div>
                    <div style="padding-top:5px;"><a style="color:#000000;" href="http://sundarbanbd.com/SAIFUL_DEMO/POPY_BAZAR/Others/index/Privacy_Policy.html">Privacy Policy</a></div>
                    <div style="padding-top:5px; padding-bottom:40px;"><a style="color:#000000;" href="http://sundarbanbd.com/SAIFUL_DEMO/POPY_BAZAR/Others/index/Terms_of_Use.html">Rules of Use</a></div>
                  </div>
                  <div class="col-md-4" >
                    <div style="border-bottom:1px #ededed solid; font-size:15px; font-weight:bold;">For business</div>
                    <div style="padding-top:5px; padding-bottom:40px;"><a style="color:#000000;" href="http://sundarbanbd.com/SAIFUL_DEMO/POPY_BAZAR/Others/index/Corporate.html">Corporate </a></div>
                  </div>
                </div>
              </div>
              <div class="col-md-4" style="border-left:1px #ededed solid; background:#f7f7f7;">
                <div align="right" style="padding-right:0px; background:#f7f7f7;"> <img style="height:60px;" src="http://sundarbanbd.com/SAIFUL_DEMO/POPY_BAZAR/frontend/image/lp_getandroidapp.png"> <img style="height:60px;" src="http://sundarbanbd.com/SAIFUL_DEMO/POPY_BAZAR/frontend/image/lp_getappleapp.png"> </div>
                <div align="right" style="padding-right:0px; color:#000000; padding-top:5px;"> <img style="height:30px;" src="http://sundarbanbd.com/SAIFUL_DEMO/POPY_BAZAR/frontend/image/call.png"> <span style="font-size:24px;"> 01853951775 </span><br/>
                  Or saifulbd943@gmail.com<br/>
                  <a style="color:#FFFFFF;" href="#" class="faa fa fa-facebook"></a> <a style="color:#FFFFFF;" href="#" class="faa fa fa-twitter"></a> <a style="color:#FFFFFF;" href="#" class="faa fa fa-youtube"></a> <a style="color:#FFFFFF;" href="#" class="faa fa fa-instagram"></a> <br/>
                  &nbsp; <br/>
                  &nbsp; </div>
              </div>
            </div>
          </div>
        </div>
        
        <div class="row cart-box" id="Normal" style="margin-left:0px; margin-right:0px;">
			  <ul class="nav navbar-nav">
				<li class="dropdown"> <a style="background:#0000FF; border:1px #0000FF solid;" onClick="openNav()" class="draggable dropdown-toggle btn btn-primary btn-circle btn-xl" data-toggle="dropdown" role="button" aria-expanded="false"> <span style="color:#FFFFFF; padding-top:10px;" class="glyphicon glyphicon-shopping-cart"></span></a> <span  class="cart-items-count"><span class="notification-counter cart_row_amount">
				  BDT-1000
				  </span></span> </li>
			  </ul>
			</div>
		<!--Cart Nav start-->		
		<div id="mySidenav" class="rightnav">
		  <a href="javascript:void(0)" style="color:#000000;" class="closebtn" onClick="closeNav()">&times;</a>
		  <div class="sidenav1">Our Order Lists</div>
		  <div class="cart_html_view_list">
		  
			<table class="table table-condensed">
			
			<tbody>
			
			  
			  <tr style="border-bottom:1px #fee29b solid;">
				<td><img style="height:50px; padding-top:10px;" src=""></td>
				<td style="">name</td>
				<td style="padding-top:15px;"> 
				<select class="form-control cartupdate cartupdate2" data-id="" style="width:60px;" id="qty" name="qty">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						
				  </select></td>
				<td style="padding-top:25px;">
            						    1000
            						   
            						  
            						  </td>
				<td style="padding-top:20px;"><i data-id="" style="font-size:24px; text-align:center; color:#000000;" class="fa fa-times deletecart" aria-hidden="true"></i></td>
			  </tr>
			  
			 
			
			  <tr style="border:1px #fee29b solid; margin-top:20px;">
				<td colspan="5" style="color:#000000; text-align:right;">
				
				<a style="color:#000000; font-size:16px;" href="">Checkout</a>
				
				
				</td>
			  </tr>
			 
			
			</tbody>
		  </table>
		  
		  </div>
		  
			  
			
		</div>
		<!--Cart Nav end-->	
        
      </div>
    </div>
  </div>
</div>
</body>
</html>
<script src='http://cdnjs.cloudflare.com/ajax/libs/velocity/0.2.1/jquery.velocity.min.js'></script>
<script src="{{ asset('frontend/left_menu/mtree.js')}}"></script>
<script>
      //Jquery auto height

    $(document).ready(function(){
         $('#owl-carousel').owlCarousel({
            loop: true,
            margin: 50,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                    nav: true
                },
                600: {
                    items: 2,
                    nav: false
                },
                768: {
                    items: 3,
                    nav: false
                },
                1000: {
                    items: 3,
                    nav: true,
                    loop: true
                }
            }
        });
    });

    </script>
<script>
    function openNav() {
        document.getElementById("mySidenav").style.width = "300px";
		$("#Normal").addClass("hide");
    }
    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
		$("#Normal").removeClass("hide");
    }

<!--- Password view eys start --->
     $(".reveal3").mousedown(function() {
        $(".pwd3").replaceWith($('.pwd3').clone().attr('type', 'text'));
    })
    .mouseup(function() {
        $(".pwd3").replaceWith($('.pwd3').clone().attr('type', 'password'));
    })
    .mouseout(function() {
        $(".pwd3").replaceWith($('.pwd3').clone().attr('type', 'password'));
    });
<!--- Password view eys end --->
</script>


<script type="text/javascript">


$('.cart_store').on('click', function(e){
		var product_id = $(this).attr('product-id');
		var urlmgs = "{{ route('carts.store') }}";
		alert(ok);
		$.ajax({
			url:urlmgs,
			type:"POST",
			data:{product_id:product_id},
      		dataType:'html',
			success:function(data){
				$(".cart_html_view_list").html(data);
			}
		});
		e.preventDefault();
});



$(".header_search_keyup").on('keyup', function() {
	var header_search_value = $(this).val();
	
	$.ajax({
		url : "{{ route('Product_search') }}",
		type : "GET",
		data : {header_search_value:header_search_value},
		dataType : 'html',
		success : function(data) {
			$(".search_product_Value").html(data);
		}
	});
	
});

$('.category_click').on('click', function(e){
		var category_id = $(this).attr('category-id');
		var urlmgs = "{{ route('Cat_details') }}";
		$.ajax({
			url:urlmgs,
			type:"GET",
			data:{category_id:category_id},
      		dataType:'html',
			success:function(data){
				$(".category_Bysub_category").html(data);
			}
		});
		e.preventDefault();
});

$('.Sub_category_click').on('click', function(e){
		var Sub_category_id = $(this).attr('sub-category-id');
		
		var urlmgs = "{{ route('Sub_cat_details') }}";
		$.ajax({
			url:urlmgs,
			type:"GET",
			data:{Sub_category_id:Sub_category_id},
      		dataType:'html',
			success:function(data){
				$(".subcategory_Bysub_subcategory").html(data);
			}
		});
		e.preventDefault();
});

</script>
