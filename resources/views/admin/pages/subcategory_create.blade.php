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
          <h4 class="page-title">Sub Category Add Manage</h4>
        </div>
      </div>
	  
      <div class="row staff-grid-row">
	  
		<div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
          <div>
		@if ($errors->any())
			<div class="alert alert-danger">
			 <button type="button" class="close" data-dismiss="alert">&times;</button>
				<ul>
					@foreach ($errors->all() as $error)
						<p>{{ $error }}</p>
					@endforeach
				</ul>
			</div>
		@endif
		
		@if (Session::has('success'))
		<div class="alert alert-success">
		<a type="button" class="close" data-dismiss="alert">&times;</a>
		<p>{{ Session::get('success') }}</p>
		</div>
		@endif
		
		</div>
        </div>
	  
	  <form method="post" enctype="multipart/form-data" action="{{ route('admin.subcategory.store') }}"/>
	  	@csrf
        
		<div class="col-md-12 col-sm-6 col-xs-6 col-lg-12">
          <div class="form-group">
			  <label for="sel1">Category Name:</label>
			  <select class="form-control" id="category_id" name="category_id">
			  	<option value="">Select Category Name</option>
				@foreach($categories as $categories)
				<option value="{{$categories->id}}">{{$categories->name}}</option>
				@endforeach 
			  </select>
			</div>
        </div>
		<div class="col-md-12 col-sm-6 col-xs-6 col-lg-12">
          <div class="form-group">
			  <label for="usr">Sub Category Name:</label>
			  <input type="text" class="form-control" id="name" name="name">
		</div>
        </div>
		
		
		
		<div class="col-md-12 col-sm-6 col-xs-6 col-lg-12" style="padding-top:10px;">
          <div class="form-group row">
				<div class="col-md-3"><input class="form-control" type="file" name="image" id="image"></div>
				<div class="col-md-3"><input class="form-control" type="file" name="image2" id="image2"></div>
				
			</div>
        </div>
		
		
		<div class="col-md-12 col-sm-6 col-xs-6 col-lg-12">
          <div class="form-group">
			  <label for="sel1">Description :</label>
			 <textarea class="form-control" rows="12" name="description" id="ajaxfilemanager" value="" tabindex="20" style="height:250px;"></textarea>
			</div>
        </div>
		
		<div class="col-md-12 col-sm-6 col-xs-6 col-lg-12">
          <div class="form-group">
			 <button type="submit" class="btn btn-primary">Create</button>
			</div>
        </div>
		
		</form>
		
		
		
		
		<div class="col-md-12 col-sm-6 col-xs-6 col-lg-12">
           <table class="table table-bordered">
			<thead>
			  <tr>
				<th style="background:#715ebc; color:#FFFFFF; font-weight:bold;">Category Name</th>
				<th style="background:#715ebc; color:#FFFFFF; font-weight:bold;">sub Category Name</th>
				<th style="background:#715ebc; color:#FFFFFF; font-weight:bold;">Description</th>
				<th style="background:#715ebc; color:#FFFFFF; font-weight:bold;">Banner Image</th>
				<th style="background:#715ebc; color:#FFFFFF; font-weight:bold;">Sub Category Image</th>
				<th style="text-align:center; background:#715ebc; color:#FFFFFF; font-weight:bold;">Action</th>
			  </tr>
			</thead>
			<tbody>
			@foreach($subcategories as $subcategorie)
			@php 
			$cateIdByname = DB::table('categories')->where('id', $subcategorie->category_id)->value('name'); 
			@endphp
			  <tr>
				<td> {{$cateIdByname}} </td>
				
				<td>{{$subcategorie->name}}</td>
				
				<td>{{strip_tags($subcategorie->description)}}</td>
				<td><img style="height:30px;" src="{{asset('images/subcategories/' . $subcategorie->image)}}"> </td>
				<td><img style="height:30px;" src="{{asset('images/subcategories/' . $subcategorie->image2)}}"> </td>
				<td style="text-align:center;">
				<a href="{{ route('admin.subcategory.edit', $subcategorie->id) }}"><i class="fa fa-pencil" aria-hidden="true"></i> </a>| 
				<a href="#deleteModal" data-toggle="modal" data-target="#myModal{{ $subcategorie->id }}"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
				
				
				<div class="modal" id="myModal{{ $subcategorie->id }}">
				  <div class="modal-dialog">
					<div class="modal-content">
					  <!-- Modal Header -->
					  <div class="modal-header">
						<h4 class="modal-title">Are you sure to delete</h4>
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					  </div>
					  <!-- Modal body -->
					  <div class="modal-body">
					   <form method="post" enctype="multipart/form-data" action="{{ route('admin.subcategory.delete', $subcategorie->id) }}"/>
	  						@csrf
						<button type="submit" class="btn btn-danger">Yes</button>
						</form>
						
						 
					  </div>
					  <!-- Modal footer -->
					  
				
					</div>
				  </div>
				</div>
				
				</td>
			  </tr>
			@endforeach 
			  
			</tbody>
		  </table>
		  <div class="row">
		  	<div class="col-md-4"></div>
			<div class="col-md-6">
			<div class="pagination" align="center" style="text-align:center;"> 
			  {{ $subcategories->links() }}
		   </div>
		   </div>
			<div class="col-md-2"></div>
		  </div>
        </div>
		
		
		
      </div>
    </div>
  </div>
  
</div>
<div class="sidebar-overlay" data-reff="#sidebar"></div>

@include('admin.partiles.bottom_script')

</body>
</html>
