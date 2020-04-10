<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{Auth::user()->email}}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Hotel Management</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('hotelinfo.index')}}"><i class="fa fa-circle-o"></i> Hotels</a></li>
            <li><a href="{{route('meal.index')}}"><i class="fa fa-circle-o"></i> Meal Plans</a></li>
            

            <li class="treeview">
              <a href="#"><i class="fa fa-circle-o"></i> Room setting
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{route('rooms.index')}}"><i class="fa fa-circle-o"></i> Rooms</a></li>

                <li><a href="{{route('facility.index')}}"><i class="fa fa-circle-o"></i> Facilities/Ammenities</a></li>
                
                </ul>
              </li>    

          </ul>
          
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Booking Management</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> Make a reservation</a></li>
            <li><a href="{{route('booking.index')}}"><i class="fa fa-circle-o"></i> Bookings</a></li>
         </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Promo and Discounts</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('coupon.index')}}"><i class="fa fa-circle-o"></i> Coupons </a></li>
                       
          </ul>
        </li>
        
        
        <li class="header">REPORTS</li>
        <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Reports</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Stastics</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
