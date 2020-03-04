<nav class="navbar navbar-expand-md navbar-dark bg-dark">

  @if (Auth::check())
  <a class="navbar-brand" href="/home">{{config('app.name', 'envProjectName')}}</a>
  @else
  <a class="navbar-brand" href="/">{{config('app.name', 'envProjectName')}}</a>
  @endif

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
    aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        @if (Auth::check())
        <a class="nav-link" href="/home">Home <span class="sr-only">(current)</span></a>
        @else
        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
        @endif
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/about">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="/services" tabindex="-1" aria-disabled="true">Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="/posts" tabindex="-1" aria-disabled="true">Blog</a>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true"
          aria-expanded="false">Dropdown</a>
        <div class="dropdown-menu" aria-labelledby="dropdown01">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      @if (Auth::check())
      <li class="nav-item">
        <a class="nav-link" href="/posts/create">Create Post</a>
      </li>
      @endif
      <!-- Authentication Links -->
      @guest
      <li class=" nav-item">
        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
      </li>
      @if (Route::has('register'))
      <li class="nav-item">
        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
      </li>
      @endif
      @else
      <li class="nav-item dropdown">
        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false" v-pre>
          {{ Auth::user()->name }} <span class="caret"></span>
        </a>

        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

          <a href="/home" class="dropdown-item">Dashboard</a>


          <a class="dropdown-item" href="{{ route('logout') }}"
            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
          </a>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
          </form>
        </div>
      </li>
      @endguest

    </ul>


  </div>
</nav>


{{-- search form --}}
{{-- <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
    </form> --}}