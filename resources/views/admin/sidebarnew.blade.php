<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top" >
          <a class="sidebar-brand brand-logo" href=""><img src="home/assets/images/cMS.JFIF" alt="" style="margin:auto;margin-top:20px;width:180px;height:70px;"/></a>

        </div>
        <ul class="nav">
          <li class="nav-item profile">
            <div class="profile-desc">
              <div class="profile-pic">
                
                
              </div>
              
              
              </div>
            
          </li>
          
          
         
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('/show_dashboard')}}">
              <span class="menu-icon">
                <i class="mdi mdi-view-dashboard"></i>
              </span>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          
          
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('/show_usercomplaintnew')}}">
              <span class="menu-icon">
                <i class="mdi mdi-comment-account"></i>
              </span>
              <span class="menu-title">Show Complaints</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('/accepttable')}}">
              <span class="menu-icon">
                <i class="mdi mdi-clipboard-check"></i>
              </span>
              <span class="menu-title">Accepted Complaints</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('/rejecttable')}}">
              <span class="menu-icon">
                <i class="mdi mdi-close-circle"></i>
              </span>
              <span class="menu-title">Rejected Complaints</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('/completetable')}}">
              <span class="menu-icon">
                <i class="mdi mdi-bookmark-check"></i>
              </span>
              <span class="menu-title">Completed Complaints</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('/view_category')}}">
              <span class="menu-icon">
                <i class="mdi mdi-view-list"></i>
              </span>
              <span class="menu-title">Add Category</span>
            </a>
          </li>
            
            
             <!-- <li class="nav-item menu-items">
            <a class="nav-link" href="https://play.google.com/store/apps/details?id=in.android.vyapar">
              <span class="menu-icon">
                <i class="mdi mdi-cellphone"></i>
              </span>
              <span class="menu-title">Vyapar App</span>
            </a>
          </li>   -->
          
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('/logout')}}" onclick="return confirm ('Are sure to logout from this session?')">
              <span class="menu-icon">
                <i class="mdi mdi-logout"></i>
              </span>
              <span class="menu-title">Hi ! {{Auth::user()->name}}, Logout</span>
            </a>
          </li>
          
          
         
          
          
          
          
          
          
          
        </ul>
      </nav>
