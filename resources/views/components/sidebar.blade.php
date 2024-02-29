<nav class="navbar navbar-dark navbar-theme-primary px-4 col-12 d-lg-none">
    <a class="navbar-brand me-lg-5" href="index.html">
        <img class="navbar-brand-dark" src="{{ asset('img/brand/light.svg') }}" alt="Volt logo" /> <img class="navbar-brand-light" src="{{ asset('img/brand/dark.svg') }}" alt="Volt logo" />
    </a>
    <div class="d-flex align-items-center">
        <button class="navbar-toggler d-lg-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav>

<nav id="sidebarMenu" class="sidebar d-lg-block bg-gray-800 text-white collapse" data-simplebar>
    <div class="sidebar-inner px-4 pt-3">
        <div class="user-card d-flex d-md-none align-items-center justify-content-between justify-content-md-center pb-4">
            <div class="d-flex align-items-center">
                <div class="avatar-lg me-4">
                    <img src="{{ asset('img/team/profile-picture-3.jpg') }}" class="card-img-top rounded-circle border-white" alt="Bonnie Green">
                </div>
                <div class="d-block">
                    <h2 class="h5 mb-3">Hi, Jane</h2>
                    <a href="../../pages/examples/sign-in.html" class="btn btn-secondary btn-sm d-inline-flex align-items-center">
                        <svg class="icon icon-xxs me-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>
                        Sign Out
                    </a>
                </div>
            </div>
            <div class="collapse-close d-md-none">
                <a href="#sidebarMenu" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="true" aria-label="Toggle navigation">
                    <svg class="icon icon-xs" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </a>
            </div>
        </div>
        <ul class="nav flex-column pt-3 pt-md-0">
            <li class="nav-item">
                <a href="../../index.html" class="nav-link d-flex align-items-center">
                    <span class="sidebar-icon">
                        <img src="{{ asset('img/brand/light.svg') }}" height="20" width="20" alt="Volt Logo">
                    </span>
                    <span class="mt-1 ms-1 sidebar-text">Volt Overview</span>
                </a>
            </li>
            <li class="nav-item  active ">
                <a href="../../pages/dashboard/dashboard.html" class="nav-link">
                    <span class="sidebar-icon">
                        <i class="fa-solid fa-fw fa-chart-pie"></i>
                    </span>
                    <span class="sidebar-text">Dashboard</span>
                </a>
            </li>
            <li role="separator" class="dropdown-divider mt-4 mb-3 border-gray-700"></li>
            <li class="nav-item">
                <a href="https://themesberg.com/docs/volt-bootstrap-5-dashboard/getting-started/quick-start/" target="_blank" class="nav-link d-flex align-items-center">
                    <span class="sidebar-icon">
                        <i class="fa-solid fa-fw fa-circle-question"></i>
                    </span>
                    <span class="sidebar-text">Documentation <span class="badge badge-sm bg-secondary ms-1 text-gray-800">v1.4</span></span>
                </a>
            </li>
            <li class="nav-item">
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    @method('DELETE')

                    <button href="{{ route('login') }}" class="btn btn-secondary d-flex align-items-center justify-content-center btn-upgrade-pro">
                        <span class="sidebar-icon d-inline-flex align-items-center justify-content-center">
                            <i class="fa-solid fa-fw me-2 fa-right-from-bracket"></i>
                        </span>
                        <span>Logout</span>
                    </button>
                </form>
            </li>
        </ul>
    </div>
</nav>
