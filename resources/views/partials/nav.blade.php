<nav class="navbar navbar-expand-lg" id="myNav">
  <div class="container">
    <a class="navbar-brand" href="{{route('home')}}">Studimet.<strong class="titlestrong">com</strong></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">

      </ul>
      <ul class="navbar-nav">
        @if (Auth::guard('user')->check())
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Mirësevjen , Bujar
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Profili</a>
              <a class="dropdown-item" href="#">Deshirat</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="{{route('logout')}}">Qkyqu</a>
            </div>
          </li>
        @else
          <li class="nav-item">
            <a data-toggle="modal" data-target="#loginmodal" class="nav-link" href="#"><i class="fa fa-user-o"></i> Llogaria</a>
          </li>
        @endif
      </ul>
    </div>
  </div>
</nav>

<!-- Login Modal -->
<div class="modal fade" id="loginmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" id="loginmodal-body">
      <div class="modal-header">
        <h5 class="modal-title" id="loginmodal-label">Login to your students account</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-10 offset-md-1">
            <div class="row">
              <div class="col-md-6">
                <a href="{{route('social.login','google')}}" class="btn btn-danger m-l-5" id="googleloginbuttom"><i class="fa fa-google" aria-hidden="true"></i> Login with Google</a>
              </div>
              <div class="col-md-6">
                <a href="#" class="btn btn-primary" id="facebookloginbuttom"><i class="fa fa-facebook" aria-hidden="true"></i> Login with Facebook</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>
