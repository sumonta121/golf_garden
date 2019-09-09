
<div class="sidebar" id="sidebar">

    <div class="sidebar-inner slimscroll">
      <div id="sidebar-menu" class="sidebar-menu">
        <ul>
          <li  class="{{ Request::is('admin') ? 'active' : '' }}"> <a href="{{ route('admin.index') }}">Dashboard</a>  </li>        

           <li class="{{ Request::is('admin/Basic/create') ? 'active' : '' }}"> <a href="{{ route('admin.basic.create') }}"><i class="fa fa-address-book-o" aria-hidden="true"></i>
Basic Manage</a></li>
          
           <li class="{{ Request::is('admin/Schedule/create') ? 'active' : '' }}"> <a href="{{ route('admin.schedule.create') }}"><i class="fa fa-wrench" aria-hidden="true"></i>
 Setup Booking Schedule</a></li>         
  
               <li class="{{ Request::is('admin/Expense/create') ? 'active' : '' }}"> <a href="{{ route('admin.expense.create') }}"><i class="fa fa-wrench" aria-hidden="true"></i>
Expense Manage</a></li>
          
           <li class="{{ Request::is('admin/Rent_setup/create') ? 'active' : '' }}"> <a href="{{ route('admin.rent_setup.create') }}"><i class="fa fa-wrench" aria-hidden="true"></i>
Rent Setup</a></li>

           <li class="{{ Request::is('admin/Booking/create') ? 'active' : '' }}"> <a href="{{ route('admin.booking.create') }}">
         <i class="fa fa-shopping-cart" aria-hidden="true"></i>
          Booking</a></li>     
<!-- 
          <li class="submenu"> <a href="#"><span><i class="fa fa-pie-chart" aria-hidden="true"></i>
 Report</span> <span class="menu-arrow"></span></a>
            <ul class="list-unstyled" style="display: none;">
			      
              <li><a class="{{ Request::is('admin/slider/create') ? 'active' : '' }}" href="{{ route('admin.slider.create') }}">Slide Manage</a></li>
              <li><a class="{{ Request::is('admin/category/create') ? 'active' : '' }}" href="{{ route('admin.category.create') }}">Category Manage</a></li>
              <li><a class="{{ Request::is('admin/subcategory/create') ? 'active' : '' }}" href="{{ route('admin.subcategory.create') }}">Sub Category Manage</a></li>
              <li><a class="{{ Request::is('admin/brand/create') ? 'active' : '' }}" href="{{ route('admin.brand.create') }}">Brand  Manage</a></li>
              <li><a class="{{ Request::is('admin/product/create') ? 'active' : '' }}" href="{{ route('admin.product.create') }}">Products Manage</a></li>
            </ul>
          </li>
		  <li class="submenu"> <a href="#"><span> Order Manage</span> <span class="menu-arrow"></span></a>
            <ul class="list-unstyled" style="display: none;">
              <li><a href="#">New Order</a></li>
              <li><a href="#">Complete Order</a></li>
            </ul>
          </li>
		  <li class="submenu"> <a href="#"><span>Admin Profile</span> <span class="menu-arrow"></span></a>
            <ul class="list-unstyled" style="display: none;">
              <li><a href="#">My  Profile</a></li>
			       <li><a href="#">Password  Change</a></li>             
            </ul> -->
             <li  class=""> <a href="{{ route('admin.logout') }}">Logout</a>  </li>       
          </li>
        </ul>
      </div>
    </div>
  </div>
