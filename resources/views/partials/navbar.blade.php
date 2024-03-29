<nav class="navbar navbar-expand-lg navbar-dark bg-primary position-sticky">
    <div class="container ">
      <a class="navbar-brand" href="#">Logo</a>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link {{ $active === 'home' ? 'active' : '' }}"  href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ $active === 'about' ? 'active' : '' }}" href="/about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ $active === 'posts' ? 'active' : '' }}" href="/posts">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ $active === 'categories' ? 'active' : '' }}" href="/categories">Categories</a>
          </li>
        </ul>

        <ul class="navbar-nav ms-auto">
          @auth
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Welcome Back. {{ auth()->user()->name }}
              </a>
              <ul class="dropdown-menu">
                <li>
                  <a class="dropdown-item" href="/dashboard">
                    <i class="bi bi-layout-text-sidebar"></i>
                    My Dashboard
                  </a>
                </li>
                <li><hr class="dropdown-divider"></li>
                <li>
                  <form action="/logout" method="POST">
                    @csrf
                    <button class="dropdown-item" type="submit">
                      <i class="bi bi-box-arrow-right"></i>
                      Logout
                    </button>
                  </form>
                </li>
              </ul>
            </li>
          @else
            <li class="nav-item">
                <a href="/login" class="nav-link {{ $active === 'categories' ? 'active' : '' }}">
                    <i class="bi bi-box-arrow-in-right mx-1"></i>
                    Login
                </a>
            </li>
          @endauth
        </ul>
        
      </div>
    </div>
  </nav>