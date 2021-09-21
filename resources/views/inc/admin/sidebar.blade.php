<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('admin/dashboard')}}" class="brand-link">
      <img src="{{ asset('assets_admin/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Vikram Mills</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('assets_admin/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="profile" class="d-block">Admin</a>
        </div>
      </div>

      
      <!-- Sidebar Menu -->
      <nav class="mt-3">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{ url('admin/dashboard')}}" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>Product Management <i class="fas fa-angle-left right"></i></p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ url('admin/category')}}" class="nav-link">
                      <i class="nav-icon fas fa-user"></i>
                      <p>Categories </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="nav-icon fas fa-user"></i>
                      <p>Products <i class="fas fa-angle-left right"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="{{ url('admin/add-product')}}" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Add New</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="{{ route('product.index')}}" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>All Products</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Out of Stock</p>
                        </a>
                      </li>
                      
                    </ul>
                </li>
            </ul>
          </li>
          
          <li class="nav-item">
            <a href="{{route('customers.index')}}" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>Customers </p>
            </a>
          </li>
          
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>Order Management <i class="fas fa-angle-left right"></i></p>
            </a>
            <ul class="nav nav-treeview">
              
              <li class="nav-item">
                <a href="{{route('orders.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Orders</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('order.return')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Order Returns</p>
                </a>
              </li>
              
            </ul>
          </li>
          
          
          <li class="nav-item">
            <a href="{{ url('admin/testimonial')}}" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>Testimonials</p>
            </a>
            
          </li>
          <li class="nav-item">
            <a href="{{ route('contactSubmits.index')}}" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>Contact records</p>
            </a>
          </li>
          
          <li class="nav-header">Action</li>
          <!-- <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-envelope"></i>
              <p>
                Mailbox
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="mailbox.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Inbox</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="compose.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Compose</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="sentmail.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Sent</p>
                </a>
              </li>
            </ul>
          </li> -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-bullhorn"></i>
              <p>
                Announcement
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="add-news.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add New</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="all-news.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All News</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="deleted-news.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Deleted News</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="nav-icon fas fa-comment-alt"></i>
              <p>Feedbacks</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-globe"></i>
              <p>
                Site Manager
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('clientlogo.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Client Logo</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('banner.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Banner</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('home.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Home Page</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('about.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>About Page</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Service Page</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('contactPage.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Contact Page</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Privacy Policy</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Terms & Conditions</p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Header & Footer Scripts</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Footer Management</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-header">Extra</li>
          <li class="nav-item">
            <a href="mailto:hi@pegalogics.com" class="nav-link">
              <i class="nav-icon fas fa-question"></i>
              <p>Help</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>