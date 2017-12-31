<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li class="sidebar-search">
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Searchsbadmin.">
                    <span class="input-group-btn">
                    <button class="btn btn-default" type="button">
                        <i class="fa fa-search"></i>
                    </button>
                </span>
                </div>
                <!-- /input-group -->
            </li>
            <li>
                <a href="{{route('home')}}"><i class="fa fa-home fa-fw"></i> Home</a>
            </li>
            <li>
                <a href="{{route('admin.index')}}"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
            </li>
            <li>
                <a href=""><i class="fa fa-university fa-fw"></i> Institutions<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{route('institution.create')}}">Create a Institution</a>
                    </li>
                    <li>
                        <a href="{{route('institution.index')}}">View Institutions</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="index.html"><i class="fa fa-book fa-fw"></i> Courses<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="#">Create a Course</a>
                    </li>
                    <li>
                        <a href="#">View Courses</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="index.html"><i class="fa fa-flag-o fa-fw"></i> Cities<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{route('city.create')}}">Create a City</a>
                    </li>
                    <li>
                        <a href="{{route('city.index')}}">View Cities</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="{{route('user.index')}}"><i class="fa fa-user fa-fw"></i> Users<span class="fa arrow"></span></a>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="{{route('discipline&degree.index')}}"><i class="fa fa-bars fa-fw"></i> Disciplines & Degrees<span class="fa arrow"></span></a>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="#"><i class="fa fa-wrench fa-fw"></i> Settings<span class="fa arrow"></span></a>
                <!-- /.nav-second-level -->
            </li>
        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>
