<!DOCTYPE html>
<html>
<head>
 @include('admin.partiles.top_head')

</head>
<body>
<div class="main-wrapper">

  @include('admin.partiles.top_header')
  
  @include('admin.partiles.left_menu')
  
  
  
  
  <div class="page-wrapper">
    <div class="content container-fluid">
      <div class="row">
        <div class="col-xs-4">
          <h4 class="page-title">Dashboard</h4>
        </div>
      </div>
      <div class="row staff-grid-row">
      
	  	<div class="alert alert-success">
		<a type="button" class="close" data-dismiss="alert">&times;</a>
		<p>Welcome to Dashboard</p>
		</div>  
	  
      </div>
    </div>
  </div>
  
</div>
<div class="sidebar-overlay" data-reff="#sidebar"></div>

@include('admin.partiles.bottom_script')

</body>
</html>
