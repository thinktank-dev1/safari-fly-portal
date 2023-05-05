<header class="navbar navbar-dark text-bg-light flex-md-nowrap pt-5">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 fs-6" href="{{ url('/home') }}"><img src="{{ asset('images/home/LOGO.png') }}" class="img-fluid" alt="{{ asset('images/home/LOGO.png') }}"></a>
    <ul class="nav col-12 col-lg-6 col-md-auto mb-2 justify-content-end mb-md-0">
        <li><a href="{{ url('/') }}" class="nav-link px-2 link-dark">Home</a></li>
        <li><a href="{{ url('/') }}" class="nav-link px-2 link-dark">About</a></li>
        <li><a href="{{ url('/') }}" class="nav-link px-2 link-dark">Destination</a></li>
        <li><a href="{{ url('/') }}" class="nav-link px-2 link-dark">Experiences</a></li>
        <li><a href="{{ url('/') }}" class="nav-link px-2 link-dark">Enquiry</a></li>
        <li><a href="{{ url('/') }}" class="nav-link px-2 link-secondary">User portal</a></li>
    </ul>

    <div class="col-lg-2 col-md-3 text-center">
    	@if(Auth::user())
            <form method="POST" action="{{ route('logout') }}" id="logout">
                @csrf
                <a class="btn btn-primary auth-btn" href="#" onclick="event.preventDefault(); this.closest('form').submit();">LOG OUT    <i class="bi bi-box-arrow-in-right ml-2"></i></a>
            </form>
        @else
            <a href="{{ url('/register') }}" type="button" class="btn btn-primary auth-btn">Sign-up</a>
            <a href="{{ url('/login') }}" type="button" class="btn btn-outline-primary auth-btn me-2">Login</a>
        @endif

    </div>
</header>