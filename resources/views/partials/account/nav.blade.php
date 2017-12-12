<!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-dark unique-color">

    <!-- Navbar brand -->
  <div class="container">
    <a class="navbar-brand" href="{{route('home')}}">Jameati</a>

    <!-- Collapse button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
        aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

    <!-- Collapsible content -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <!-- Links -->
        <ul class="navbar-nav mr-auto">
          <!--
            <li class="nav-item">
                <a class="nav-link" href="#">Home</a>
            </li>
          -->
        </ul>
        <!-- Links -->

        <ul class="navbar-nav">
          @if (Auth::check())
            <!-- Dropdown -->
            <li class="nav-item dropdown mr-5">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user-o"></i></a>
                <div class="dropdown-menu dropdown-primary mr-5" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="{{route('logout')}}">Logout <i class="fa fa-sign-out" aria-hidden="true"></i></a>
                </div>
            </li>
          @else
            <li class="nav-item">
                <a class="nav-link" href="{{route('login')}}">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('register')}}">Register</a>
            </li>
          @endif
        </ul>
    </div>
    <!-- Collapsible content -->
  </div>
</nav>

<!--/.Navbar-->
