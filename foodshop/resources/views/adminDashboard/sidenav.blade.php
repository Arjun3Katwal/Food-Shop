<nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="javascript:void(0)">
          <img src="../assets/img/brand/blue.png" class="navbar-brand-img" alt="...">
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" href="{{route('Dashboard')}}">
                <i class="ni ni-tv-2 text-primary"></i>
                <span class="nav-link-text">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('viewNews')}}">
                
                <i class="ni ni-planet text-orange"></i>
                <span class="nav-link-text">News</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('bcontact')}}">
                <i class="ni ni-pin-3 text-primary"></i>
                <span class="nav-link-text">Contact</span>
              </a>
            </li>
            
          </ul>
        </div>
      </div>
    </div>
  </nav>