<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('admin/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Law Firm</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('admin/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Arefin Chowdhury</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="{{route('dashboard')}}" class="nav-link ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
           
             <li class="nav-item has-treeview menu-open">
                <a href="" class="nav-link ">
                 <i class="fas fa-pencil-alt nav-icon"></i>
                  <p>Posts</p>
                   <i class="right fas fa-angle-left"></i>
                   
                </a>
                <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('post.create')}}" class="nav-link active">
                  <i class="fas fa-plus nav-icon"></i>
                  <p>Create Post</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('posts')}}" class="nav-link">
                  <i class="far fa-sticky-note nav-icon"></i>
                  <p>All Posts</p>
                  
                </a>
              </li>
             
            </ul>
              </li>
              <li class="nav-item">
                <a href="./index2.html" class="nav-link">
               <i class="fa fa-list-alt nav-icon" aria-hidden="true"></i>
                 <p>Practice Areas</p>
                  <i class="right fas fa-angle-left"></i>
                  
                </a>
                <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('practice.create')}}" class="nav-link active">
                    <i class="fas fa-plus nav-icon"></i>
                  <p>Create Practice Area</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                    <a href="{{route('practice')}}" class="nav-link active">
                      <i class="far fa-sticky-note nav-icon"></i>
                  
                  <p> All Practice Areas</p>
                </a>
              </li>
             
            </ul>
              </li>
              <li class="nav-item">
                <a href="./index3.html" class="nav-link">
                <i class="fas fa-tags nav-icon"></i>

                 <p>Atonies</p>
                  <i class="right fas fa-angle-left"></i>
                </a>
                <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('atornies.create')}}" class="nav-link active">
                  <i class="fas fa-plus nav-icon"></i>
                  <p>Create Atornies</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('atornies')}}" class="nav-link">
                  <i class="far fa-sticky-note nav-icon"></i>
                  <p> All Atornies</p>
                  
                </a>
              </li>
             
            </ul>
              </li>
              <li class="nav-item">
                <a href="{{route('user.index')}}" class="nav-link">
                  <i class="far fa-user nav-icon"></i>
                  <p>Users</p>
                </a>
                
              </li>
              <li class="nav-item">
                <a href="{{route('message.index')}}" class="nav-link">
                <i class="fa fa-comments mr-2" aria-hidden="true"></i>
                  <p>Messages</p>
                </a>
                
              </li>
              <li class="nav-item">
                    <a href="{{ route('logout') }}"
                       class="nav-link"
                       onclick="event.preventDefault();
                       document.getElementById('logout-form').submit();">
                        <i class="fa fa-sign-out nav-icon"></i>
                                <p>Logout</p> 
                       </a>

                       <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                        </form>             
                  </li>
           
          </li>
           
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  
 










