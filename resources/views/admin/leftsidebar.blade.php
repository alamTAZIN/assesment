<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">
              <span data-feather="home" class="align-text-bottom"></span>
              
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('dashboard')}}">
              <span data-feather="shopping-cart" class="align-text-bottom"></span>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('note')}}">
              <span data-feather="file" class="align-text-bottom"></span>
              Notes Taking
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('show_note')}}">
            <i class="nav-icon fas fa-users"></i>
              <span data-feather="users" class="align-text-bottom"></span>
              User Space
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="bar-chart-2" class="align-text-bottom"></span>
             
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="layers" class="align-text-bottom"></span>
              
            </a>
          </li>
          <li class="nav-item menu-open">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="nav-link">
                        <i class="nav-icon fas fa-lock "></i>
                        <p>
                            {{ __('Log Out') }}
                        </p>
                </button>
            </form>
          </li>
        </ul>

        
        
      </div>
    </nav>

   
    
   </div>
</div>