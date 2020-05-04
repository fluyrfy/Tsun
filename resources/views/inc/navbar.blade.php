<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <ul class="dropdown-menu">

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              會員中心
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                @if (Auth::check())
                    <a class="dropdown-item" href="{{ route('users.profile') }}">會員資料</a>
                    <a class="dropdown-item" href="{{ route('users.logout') }}">登出</a>
                @else
                    <a class="dropdown-item" href="{{ route('users.signup') }}">註冊</a>
                    <a class="dropdown-item" href="{{ route('users.signin') }}">登入</a>
                @endif
            </div>
          </li>
      </ul>
    </ul>
  </div>
</nav>
