<header class="main-header">

    <!-- Logo -->
    <h1 class="logo" style="padding: 0; margin: 0">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b style="color: red">BK</b></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Quản lý học sinh</b></span>
    </h1>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <!-- Messages: style can be found in dropdown.less-->
                <li class="dropdown messages-menu">
                    <!-- Menu toggle button -->
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-envelope-o"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="header">You have 4 messages</li>
                        <li>
                            <!-- inner menu: contains the messages -->
                            <ul class="menu">
                                <li><!-- start message -->
                                    <a href="#">
                                        <div class="pull-left">
                                            <!-- User Image -->
                                            </div>
                                        <!-- Message title and timestamp -->
                                        <h4>
                                            Support Team

                                        </h4>
                                        <!-- The message -->
                                        <p>Why not buy a new awesome theme?</p>
                                    </a>
                                </li>
                                <!-- end message -->
                            </ul>
                            <!-- /.menu -->
                        </li>
                        <li class="footer"><a href="#">See All Messages</a></li>
                    </ul>
                </li>
                <!-- /.messages-menu -->

                <!-- Notifications Menu -->
                <li class="dropdown notifications-menu">
                    <!-- Menu toggle button -->
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-bell-o"></i>

                    </a>
                    <ul class="dropdown-menu">
                        <li class="header">You have 10 notifications</li>
                        <li>
                            <!-- Inner Menu: contains the notifications -->
                            <ul class="menu">
                                <li><!-- start notification -->
                                    <a href="#">
                                        <i class="fa fa-users text-aqua"></i> 5 new members joined today
                                    </a>
                                </li>
                                <!-- end notification -->
                            </ul>
                        </li>
                        <li class="footer"><a href="#">View all</a></li>
                    </ul>
                </li>
                <!-- Tasks Menu -->
                <li class="dropdown tasks-menu">
                    <!-- Menu Toggle Button -->
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-flag-o"></i>

                    </a>
                    <ul class="dropdown-menu">
                        <li class="header">You have 9 tasks</li>
                        <li>
                            <!-- Inner menu: contains the tasks -->
                            <ul class="menu">
                                <li><!-- Task item -->
                                    <a href="#">
                                        <!-- Task title and progress text -->
                                        <h3>
                                            Design some buttons
                                            <small class="pull-right">20%</small>
                                        </h3>
                                        <!-- The progress bar -->
                                        <div class="progress xs">
                                            <!-- Change the css width attribute to simulate progress -->
                                            <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar"
                                                 aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                <span class="sr-only">20% Complete</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <!-- end task item -->
                            </ul>
                        </li>
                        <li class="footer">
                            <a href="#">View all tasks</a>
                        </li>
                    </ul>
                </li>
                <!-- User Account Menu -->
                <li class="dropdown user user-menu">
                    <!-- Menu Toggle Button -->
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <!-- The user image in the navbar-->
                        @if (Auth::guard('student')->check())
                            <img src="/img/{{Auth::guard('student')->user()->image}}" class="user-image">
                        @else
                            <img src="/img/admin.jpg" class="user-image">
                        @endif
                        <!-- hidden-xs hides the username on small devices so only the image appears. -->
                        @if (Auth::guard('admin')->check())
                            <span class="hidden-xs">{{Auth::guard('admin')->user()->name}}</span>
                        @elseif (Auth::guard('teacher')->check())
                            <span class="hidden-xs">{{Auth::guard('teacher')->user()->name_teacher}}</span>
                        @elseif (Auth::guard('student')->check())
                            <span class="hidden-xs">{{Auth::guard('student')->user()->name}}</span>
                        @endif
                    </a>
                    <ul class="dropdown-menu">
                        <!-- The user image in the menu -->
                        <li class="user-header">
                            @if (Auth::guard('student')->check())
                                <img src="/img/{{Auth::guard('student')->user()->image}}" class="img-circle" alt="User Image">
                            @else
                                <img src="/img/admin.jpg" class="img-circle" alt="User Image">
                            @endif
                            <p>
                                @if (Auth::guard('teacher')->check())
                                    <span class="hidden-xs">{{Auth::guard('teacher')->user()->name_teacher}}</span> - Teacher
                                @elseif (Auth::guard('student')->check())
                                    <span class="hidden-xs">{{Auth::guard('student')->user()->name}}</span> - Student
                                @elseif (Auth::guard('admin')->check())
                                    <span class="hidden-xs">{{Auth::guard('admin')->user()->name}}</span> - Web Developer
                                @endif
                            </p>
                        </li>
                        <!-- Menu Body -->
                        {{--<li class="user-body">
                            --}}{{--<div class="row">
                                <div class="col-xs-4 text-center">
                                    <a href="#">Followers</a>
                                </div>
                                <div class="col-xs-4 text-center">
                                    <a href="#">Sales</a>
                                </div>
                                <div class="col-xs-4 text-center">
                                    <a href="#">Friends</a>
                                </div>
                            </div>--}}{{--
                            <!-- /.row -->
                        </li>--}}
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                                @if (Auth::guard('student')->check())
                                    <a href="{{route('home_student')}}">Profile</a>
                                @elseif(Auth::guard('teacher')->check())
                                    <a href="{{route('home_teacher')}}">Profile</a>
                                @elseif(Auth::guard('admin')->check())
                                    <a href="{{route('homeAdmin')}}">Profile</a>
                                @endif
                            </div>
                            <div class="pull-right">
                                @if (Auth::guard('student')->check())
                                    <a href="{{route('log_Out_Student')}}">Sign out</a>
                                @elseif(Auth::guard('teacher')->check())
                                    <a href="{{route('log_out_teacher')}}">Sign out</a>
                                @elseif(Auth::guard('admin')->check())
                                    <a href="{{route('log_Out_Admin')}}">Sign out</a>
                                @endif
                            </div>
                        </li>
                    </ul>
                </li>
                <!-- Control Sidebar Toggle Button -->
                <li>
                    <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                </li>
            </ul>
        </div>
    </nav>
</header>