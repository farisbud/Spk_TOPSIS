<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3 sidebar-sticky ps-2">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('home') }}">
            <img class="align-text-bottom" src="{{ asset('asset/icon/home.svg') }}" width="20" height="20" alt="home">
            <span class="fs-6 mx-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{ route('alternatif') }}">
              <img class="align-text-bottom" src="{{ asset('asset/icon/layers.svg') }}" width="20" height="20" alt="home">
              <span class="fs-6 mx-1">Alternatif</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">
              <img class="align-text-bottom" src="{{ asset('asset/icon/home.svg') }}" width="20" height="20" alt="home">
              <span>Dashboard</span>
            </a>
          </li>
        </li>
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">
              <img class="align-text-bottom" src="{{ asset('asset/icon/home.svg') }}" width="20" height="20" alt="home">
              <span>Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">
              <img class="align-text-bottom" src="{{ asset('asset/icon/home.svg') }}" width="20" height="20" alt="home">
              <span>Dashboard</span>
            </a>
          </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <span data-feather="layers" class="align-text-bottom"></span>
            Integrations
          </a>
        </li>
      </ul>

      <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
        <span>Saved reports</span>
        <a class="link-secondary" href="#" aria-label="Add a new report">
          <span data-feather="plus-circle" class="align-text-bottom"></span>
        </a>
      </h6>
      <ul class="nav flex-column mb-2">
        <li class="nav-item">
          <a class="nav-link" href="#">
            <span data-feather="file-text" class="align-text-bottom"></span>
            Current month
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <span data-feather="file-text" class="align-text-bottom"></span>
            Last quarter
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <span data-feather="file-text" class="align-text-bottom"></span>
            Social engagement
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <span data-feather="file-text" class="align-text-bottom"></span>
            Year-end sale
          </a>
        </li>
      </ul>
    </div>
  </nav>
