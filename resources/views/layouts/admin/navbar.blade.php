<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
      <div class="container-fluid py-1 px-3">

        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
              <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Pages</a></li>
              <li class="breadcrumb-item text-sm text-white active" aria-current="page">Dashboard</li>
          </ol>
          <h6 class="font-weight-bolder text-white mb-0">Dashboard</h6>
        </nav>
        
        <!-- User LogOut -->
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
              @auth
              <li class="nav-item dropdown">
                  <a class="font-weight-bolder text-white mb-0" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">{{Auth::user()->nama}}</a>
                  <ul class="dropdown-menu">
                      <form action="{{url('/logout')}}" method="Post">
                        @csrf
                        <button class="dropdown-item">LogOut</button>
                      </form>
                  </ul>
              </li>
              @endauth
          </ol>
        </nav>
        
      </div>
</nav>