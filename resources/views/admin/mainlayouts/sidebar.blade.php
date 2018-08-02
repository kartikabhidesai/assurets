        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav metismenu" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element"> <span>
                                <img alt="image" class="img-circle" style="width: 50px;height: 50px;" src="" />
                             </span>
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">David Williams</strong>
                             </span> <span class="text-muted text-xs block">Art Director <b class="caret"></b></span> </span> </a>
                            <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                <li><a href="{{ url('view-profile') }}">View Profile</a></li>
                                <li><a href="{{ url('update-profile') }}">Update Profile</a></li>
                                <li><a href="{{ url('change-password') }}">Change Password</a></li>
                                <li><a href="{{ url('change-profile-picture') }}">Change Profile Picture</a></li>
                            </ul>
                        </div>
                        <div class="logo-element">
                            IN+
                        </div>
                    </li>
                     <li>
                        <a href="{{ url('userlist') }}"><i class="fa fa-diamond"></i> <span class="nav-label">Users</span></a>
                    </li> 
                </ul>
            </div>
        </nav>

