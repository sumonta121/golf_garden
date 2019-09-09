
<!DOCTYPE html>
<html>
<head>@include('admin.partiles.top_head')
</head>
<!--<link rel="stylesheet" href="{{asset('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css')}}">-->
<link rel="stylesheet" href="{{asset('https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css')}}" />	 
<link rel="stylesheet" href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.1/css/bootstrap-select.css')}}">
<body>
<div class="main-wrapper"> @include('admin.partiles.top_header')
  
  @include('admin.partiles.left_menu')
  <div class="page-wrapper">
    <div class="content container-fluid">
      <div class="row">
        <div class="col-xs-4">
          <h4 class="page-title">Setup Booking Schedule</h4>
        </div>
      </div>
      <div class="row staff-grid-row">
        <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
          <div> @if ($errors->any())
            <div class="alert alert-danger">
              <button type="button" class="close" data-dismiss="alert">&times;</button>
              <ul>
                @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
                @endforeach
              </ul>
            </div>
            @endif
            @if (Session::has('failed'))
            <div class="alert alert-danger"> <a type="button" class="close" data-dismiss="alert">&times;</a>
              <p>{{ Session::get('failed') }}</p>
            </div>
            @endif </div>
            @if (Session::has('success'))
            <div class="alert alert-success"> <a type="button" class="close" data-dismiss="alert">&times;</a>
              <p>{{ Session::get('success') }}</p>
            </div>
            @endif </div>
        </div>
		
		    <style>							
				.style-two {
					border: 0;
					height: 1px;
					background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0));					
				}
			</style>
			
        <div style="padding-left:15px; padding-right:15px; margin-bottom:40px;">
          <div class="col-md-12 col-sm-6 col-xs-6 col-lg-12" align="right" style="background:#34444c; padding-top:5px; padding-bottom:5px;"> <a href="#AddModal" data-toggle="modal" style="padding-top:5px; padding-bottom:5px;"><i style="font-size:22px; color:#FFFFFF;" class="fa fa-plus" aria-hidden="true"></i></a> </div>
        </div>
        <!-- Add Modal Start -->
        <div class="modal" id="AddModal">
          <div class="modal-dialog">
            <div class="modal-content">
              <!-- Modal Header -->
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
				<div class="row" align="center"> 
				<img src="{{ asset('images/slider/' . $basic_info->logo) }}" width="40" height="40" alt="">
				<p><b style="font-size:18px;">{{ $basic_info->title }}</b></p>
				<p><b>Army Golf Club, Dhaka Cantonment</b></p>
					<span class="modal-title">Booking Setup</span>				
				</div>                
              </div>
			
              <div class="modal-body">
                <form method="post" enctype="multipart/form-data" action="{{ route('admin.booking.create') }}" />
                @csrf                					
				<!-- HTML -->
				<ul class="nav nav-tabs" id="myTabs" role="tablist">
					<li role="presentation" class="active"><a href="#step1" aria-controls="step1" role="tab" data-toggle="tab">Customer Info</a></li>
					<li role="presentation"><a href="#step2" aria-controls="step2" role="tab" data-toggle="tab">Payment Info</a></li>
				</ul>
				<div class="tab-content">					
					<div role="tabpanel" class="tab-pane active" id="step1">			
						
						<div class="form-group row">
							<label for="inputPassword" class="col-sm-4 col-form-label">Date</label>
							<div class="col-sm-8">
							  <input  type="text" class="form-control" name="from_date" id="datepicker" placeholder="Select From Date"  required autocomplete="off" readonly=""/>
							</div>
						  </div>						  
						  <input type="hidden" id="_token" value="{{ csrf_token() }}">
						 <div class="form-group row">
							<label for="inputPassword" class="col-sm-4 col-form-label">Booking NO</label>
							<div class="col-sm-8">
							  <input type="text" class="form-control" name="inv_id" id="inv_id" placeholder="Booking NO" 
							  value="<?php $dbValue = $invoice_no; echo $dbValue = str_pad($dbValue, 7, "0", STR_PAD_LEFT); ?>" required readonly="">
							</div>
						  </div>							  
						 						  	
						<div class="style-two" ></div>		
						<style>
						  .loading {																		 
							  position: absolute;
							  top: 50%;
							  left: 50%;
							  transform: translate(-50%, -50%);
							  -ms-transform: translate(-50%, -50%);		
							  z-index:1000000000;				  
							}		
						  </style>
						<div align="center" class="loading" id="loader" style="display:none;">
						   <img src="{{ asset('images/load.gif') }}" height="150"/>
					    </div>	
						<div class="row" align="center" style="font-size:15px;"><label>Availability check</label></div>						  		  
						 <div class="form-group row" style="padding-top:15px;">							
							<label for="inputPassword" class="col-sm-4 col-form-label">By Time</label>
							<div class="col-sm-8">
							  <select name="shift" id="shift_check" class="form-control" required>
							  	<option value="">Please Select</option>
								<option value="Day">Day</option>
								<option value="Night">Night</option>
							  </select>
							</div>
						  </div>		
						  
						 <div class="form-group row" >							
							<label for="inputPassword" class="col-sm-4 col-form-label">Booking Date</label>
							<div class="col-sm-8">							 
							  <input  type="text" class="form-control" name="available_check" id="datepicker3" placeholder="Availability Check"  required autocomplete="off"/>
							</div>
							<span id="alert_text" style="color:red; font-weight:800; padding-right:10px; font-size:14px;"></span>
							<span id="alert_text2" style="color:green; font-weight:800; padding-right:10px; font-size:14px;"></span>
						  </div>	
						  
						  
						 <div class="style-two" ></div>								
									  
						 <div class="form-group row" style="padding-top:15px;">							
							<label for="inputPassword" class="col-sm-4 col-form-label"> Customer Name</label>
							<div class="col-sm-8">					
							<select class="selectpicker " data-show-subtext="true" data-live-search="true"  name="user_id" id="user_id" required data-width="100%">
								<option value="">Select Customer</option>							
								@foreach($obj as $customer)
								<option value="{{ $customer->full_name }}" attr-id="{{ $customer->id }}" attr-cell="{{ $customer->mobile_number }}" attr-mail="{{ $customer->email }}" attr-address="{{ $customer->present_address }}" >{{ $customer->full_name }}</option>
								@endforeach				
							</select>
							</div>
						  </div>	
						  
	
						 
						 <div class="form-group row">							
							<label for="inputPassword" class="col-sm-4 col-form-label"> Customer ID</label>
							<div class="col-sm-8">
							   <input type="text" class="form-control" id="cust_id" name="cust_id" placeholder="Customer ID" required >
							</div>
						  </div>
						  						  
						  <div class="form-group row" >							
							<label for="inputPassword" class="col-sm-4 col-form-label"> Member Mobile </label>
							<div class="col-sm-8">
							   <input type="text" class="form-control" id="mobile_number" name="mobile_number" placeholder="Member Mobile Number" required>
							</div>
						  </div>
						  
						  <div class="form-group row" >							
							<label for="inputPassword" class="col-sm-4 col-form-label"> Member Mail </label>
							<div class="col-sm-8">
							   <input type="text" class="form-control" id="email" name="email" placeholder="Member email address" required>
							</div>
						  </div>
						  
						  <div class="form-group row" >							
							<label for="inputPassword" class="col-sm-4 col-form-label"> Member Address</label>
							<div class="col-sm-8">
							   <input type="text" class="form-control" id="mem_addres" name="mem_addres" placeholder="Member Address" required>
							</div>
						  </div>
						 
						 <div class="form-group row">							
							<label for="inputPassword" class="col-sm-4 col-form-label">Purpose</label>
							<div class="col-sm-8">
							  <select name="purpose" id="purpose" class="form-control" required>
							  	<option value="">Select Purpose</option>
								<option value="Official">Official</option>
								<option value="Personal">Personal</option>
							  </select>
							</div>
						  </div> 
						  
						   <div class="form-group row" >							
							<label for="inputPassword" class="col-sm-4 col-form-label">No of Guest</label>
							<div class="col-sm-8">
							   <input type="text" class="form-control" id="guest_amount" name="guest_amount" placeholder="Enter Guest Amount" required value="">
							</div>
						  </div>
						  
						 	<!--<div class="form-group row">
							<label for="inputPassword" class="col-sm-4 col-form-label">Booking Date</label>
							<div class="col-sm-8">
							  <input  type="text" class="form-control" name="book_date" id="datepicker2" placeholder="Select From Date"  required autocomplete="off"/>
							</div>
						  </div>-->
						  						  	
						<div class="style-two"></div>					
						<button type="button"  id="butsave" class="next-tab btn btn-info">Next</button>
					</div>
					
					
					<div role="tabpanel" class="tab-pane" id="step2">					
						  <div class="form-group row" >							
							<label for="inputPassword" class="col-sm-4 col-form-label"> Member Category</label>
							<div class="col-sm-8">
							 <select name="member_cat" id="member_cat" class="form-control" required>
							  <option value="">Select Category</option>	
								@foreach($expense as $eee)							
								 <option value="{{ $eee->column_1}}" 
								 <?php 
								 $i = 1;
								 $totalAmount = 0;
								 foreach($expense_detail as $v){
								 $auto_inc = $i++;		
								 if($v->table_name != 'column_1'){
								 	$varrrr = 'column_'.$auto_inc; 
									$totalAmount = $totalAmount +  $eee->$varrrr;	
								 }																 
								 ?>
								 attr_<?php echo $auto_inc;?>="<?php $var = 'column_'.$auto_inc; echo $eee->$var; ?>"
								 <?php 
								 }
								 ?>
								 totalamnt="<?php echo $totalAmount; ?>"
								 >{{ $eee->column_1 }}</option>	
							    @endforeach		
							  </select>
							</div>
						  </div>
						 
						 @foreach($expense_detail as $exp)	  
							 @if($exp->table_name != 'column_1')
							  <div class="form-group row" >							
								<label for="inputPassword" class="col-sm-4 col-form-label">{{ $exp->expense_name }}</label>
								<div class="col-sm-8">
								  <input  type="text" class="form-control" name="{{ $exp->table_name }}" id="{{ $exp->table_name }}" placeholder="Amount"  required autocomplete="off"/>
								</div>
							  </div>
							  @endif
						  @endforeach			  
						  
						  <div class="form-group row" >							
							<label for="inputPassword" class="col-sm-4 col-form-label">Total Amount</label>
							<div class="col-sm-8">
							  <input  type="text" class="form-control" name="total" id="total" placeholder="Total Amount"  required autocomplete="off"/>
							</div>
						  </div>
						  
						  <div class="form-group row" >							
							<label for="inputPassword" class="col-sm-4 col-form-label">Payment Mehod</label>
							<div class="col-sm-8">							
								 <label class="radio-inline"><input type="radio" name="method" id="method"  value="Card">Card</label>
								<label class="radio-inline"><input type="radio" name="method" id="method" value="Cash" checked>Cash</label>
								<label class="radio-inline"><input type="radio" name="method"  id="method" value="Online">Online</label> 
							</div>
						  </div>
						  				
						<button type="button" class="previous-tab btn btn-info">Previous</button>
						<button type="type" class="btn btn-success" id="button_disable">Submit</button>
					</div>
				</div>

	
                </form>
              </div>
              <!-- Modal footer -->
            </div>
          </div>
        </div>
		
        <!-- Add Modal End -->
        <div class="col-md-12 col-sm-6 col-xs-6 col-lg-12">
          <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
              <tr>
                <th>SL</th>
                <th>Name</th>
                <th>Mobile</th>
                <th>Reservation Date</th>
                <th>Booking Time</th>
                <th>Total Cost</th>
              </tr>
            </thead>
            <tbody>
			@foreach($book_list as $list)
              <tr>
			    <td>{{ $loop->iteration }}</td>
                <td>{{ $list->member_name }}</td>
                <td>{{ $list->member_cell }}</td>
                <td>{{ $list->date_of_reserv }}</td>
                <td>{{ $list->shift }}</td>
                <td>{{ number_format($list->total,0) }}</td>                
              </tr>   
			@endforeach			                
            </tbody>
            
          </table>
          
          <table cellspacing="0" cellpadding="0" border="0">
            <tbody>
              <tr>
                <td class="gutter"><div class="line number1 index0 alt2" style="display: none;">1</div></td>
                <td class="code"><div class="container" style="display: none;">
                    <div class="line number1 index0 alt2" style="display: none;">&nbsp;</div>
                  </div></td>
              </tr>
            </tbody>
          </table>
        </div>
       
      </div>
    </div>
  </div>
</div>
<div class="sidebar-overlay" data-reff="#sidebar"></div>
@include('admin.partiles.bottom_script')

</body>
</html>
							
				
		 <script type="text/javascript" src="{{asset('https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js')}}" ></script>							
		 <script type="text/javascript" src="{{asset('https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js')}}"></script>	 		
		 <script type="text/javascript" src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js')}}"></script>		  
		 <script type="text/javascript" src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.1/js/bootstrap-select.js')}}"></script>
		 
		 <script>
		 
			$(document).ready(function () { 		
			  $('#datepicker3, #shift_check').on('change',function(e){		
				e.preventDefault();		
				var _token 		= $('#_token').val();
				var shift_check = $('#shift_check').val();
				var datepicker3 = $('#datepicker3').val();
			
				if($('#shift_check').val() != '' && $('#datepicker3').val() != '' ){	 
				
				} else {					
					return false;
				}
							
				
				$("#loader").css('display', 'block');		
				$this = this; 		
				$.ajax({
					type: 'post',					
					url: '/admin/Booking/user_exists',
					data: {shift_check: shift_check, datepicker3: datepicker3, _token: _token},
					success: function(data){
					   if(data == 'ok'){						 
							$('#alert_text').text('This schedule is already booked. Please try another');
							$('#alert_text2').text(' ');
							$('#button_disable').attr('disabled','disabled');
							$("#loader").css('display', 'none');			
					   } else {					  
							$('#alert_text2').text('This schedule is available');
							$('#alert_text').text(' ');
							$('#button_disable').removeAttr('disabled','disabled');
							$("#loader").css('display', 'none');			
					   }
					} 
				});
			  });
			}); 	
			
			 $(document).ready(function () {
				   $('#member_cat').on('change',function(e){				   		
						 <?php 
						 $i = 1;
						 foreach($expense_detail as $v){
						 $increament = $i++;					 
						 ?>						
							<?php if($v->table_name != 'column_1'){?>		
								 var  column_<?php echo $increament;?>  =  $('option:selected', this).attr('<?php echo 'attr_'.$increament;?>');										
								 $('#<?php echo 'column_'.$increament;?>').val(column_<?php echo $increament;?>);	
							<?php }?>	
						 <?php 
						 }
						 ?>		
						 var grandtotall = $('option:selected', this).attr('totalamnt');							
						 $('#total').val(grandtotall);
					});
			  });

	
			  $(document).ready(function(){
				   $('<?php 
				    $o   	= 1;	
					$iii	= 0;
					$len	= count($expense_detail);
					foreach($expense_detail as $v){
				    $aut 	= $o++;						
						if($iii == 0){
							$comma = ',';
						} else if ($iii == $len - 1){
							$comma = '';
						}	
					$iii++;
					if($v->table_name != 'column_1'){
						echo '#column_'.$aut.$comma; 
					}
					}?>').on('keyup',function(e){		
						 <?php 
						 $i = 1;
						 foreach($expense_detail as $v){
						 $increament = $i++;					 
						 ?>						
							<?php if($v->table_name != 'column_1'){?>											
								 var  column_<?php echo $increament;?>  =  parseInt($('#column_<?php echo $increament;?>').val())||0;								
							<?php }?>	
						 <?php 
						 }
						 ?>			 			
				   		$('#total').val(
						<?php 
							$o   	= 1;	
							$iii	= 0;
							$len	= count($expense_detail);
							foreach($expense_detail as $v){
							$aut 	= $o++;						
								if($iii == 0){
									$comma = '+';
								} else if ($iii == $len - 1){
									$comma = '';
								}	
							$iii++;
							if($v->table_name != 'column_1'){
								echo 'column_'.$aut.$comma; 
							 }
							}
						?>						
						);
					});
			  });
			  
		/*	$(document).ready(function () {  
				 $("#cust_id").keyup(function () {  
					 var person = new Object();  
					 person.id = $('#id').val();               
					 $.ajax({  
						 url: 'http://gcms.issit.org/api/member_data',  
						 type: 'POST',  
						 dataType: 'json',  
						 data: person,  
						 success: function (data, textStatus, xhr) {  
							 console.log(data);  
						 },  
						 error: function (xhr, textStatus, errorThrown) {  
							 console.log('Error in Operation');  
						 }  
					 });  
				 });  
			 }); 
			 
			 
		*/
		 
		 
//	 $(document).ready(function() {  
//		  $('#butsave').on('click', function() {
//		  var user_id 		 = $('#user_id').val();
//		  var email 		 = $('#email').val();
//		  var mobile_number  = $('#mobile_number').val();
//		  var mem_addres 	 = $('#mem_addres').val();
//		  var purpose 		 = $('#purpose').val();
//		  var guest_amount 	 = $('#guest_amount').val();
//		  var datepicker2 	 = $('#datepicker2').val();				
//			$.ajax({          
//				url:"{{ route('admin.booking.create_session') }}",		
//				method:"POST",			
//				data: {user_id: user_id, email: email, mobile_number: mobile_number, purpose: purpose, guest_amount: guest_amount, datepicker2: datepicker2, mem_addres: mem_addres},
//				dataType:"json",
//				success:function(data)
//				{
//					alert('ok');
//				}
//			})
//		});
//	});	 
		 
		 
		 
		  $(document).ready(function () {
			   $('#user_id').on('change',function(e){		
					var user_id = $('option:selected', this).attr('attr-id');	
					var cell = $('option:selected', this).attr('attr-cell');	
					var mail = $('option:selected', this).attr('attr-mail');	
					var adrress = $('option:selected', this).attr('attr-address');				
					$('#cust_id').val(user_id);	
					$('#mobile_number').val(cell);	
					$('#email').val(mail);	
					$('#mem_addres').val(adrress);	
				});
    	  });	 
		 
		 $(document).ready(function () {
		  $("#datepicker").datepicker("setDate", "0");		
    	  });
		  
		    $('#datepicker').datepicker({
				autoclose: true,
				todayBtn: true,
				todayHighlight: true,
				immediateUpdates: true,
				format: "dd-mm-yyyy"
			  });
			   $('#datepicker2').datepicker({
				autoclose: true,
				todayBtn: true,
				todayHighlight: true,
				immediateUpdates: true,
				format: "dd-mm-yyyy"
			  });
			
			  $('#datepicker3').datepicker({
				autoclose: true,
				todayBtn: true,
				todayHighlight: true,
				immediateUpdates: true,
				format: "dd-mm-yyyy"
			  });
	
				/**** JQuery *******/
			jQuery('body').on('click','.next-tab', function(){
				  var next = jQuery('.nav-tabs > .active').next('li');
				  if(next.length){
					next.find('a').trigger('click');
				  }else{
					jQuery('#myTabs a:first').tab('show');
				  }
			});
			
			jQuery('body').on('click','.previous-tab', function(){
				  var prev = jQuery('.nav-tabs > .active').prev('li')
				  if(prev.length){
					prev.find('a').trigger('click');
				  }else{
					jQuery('#myTabs a:last').tab('show');
				  }
			});
					
		 $(document).ready(function() {
				$('#example').DataTable();
			} );
		</script>
		
  		  
			