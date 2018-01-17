<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">

            </div>
            <div class="pull-left info">
                <p>Admin</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
            </div>
        </form>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">HEADER</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="treeview">
                <a href="#"><i class="fa fa-link"></i> <span>Quản lý học sinh</span>
                    <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('info_Member')}}">Thông tin chung</a></li>
                    <li><a href="{{route('update_info_Member')}}">Cập nhật Thông tin cá nhân</a></li>
                    <li><a href="{{route('update_score')}}">Cập nhật điểm</a></li>
                    <li><a href="{{route('admin_check_point')}}">Thống kê điểm theo học kỳ</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#"><i class="fa fa-link"></i> <span>Quản lý giáo viên</span>
                    <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="#">Thông tin</a></li>
                    <li><a href="#">Lịch làm việc</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#"><i class="fa fa-link"></i> <span>Quản lý lớp học</span>
                    <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('update_class')}}">Tạo lớp học</a></li>
                </ul>
            </li>
            <li class="treeview admin">
                <a href="#"><i class="fa fa-link"></i> <span>Tạo mới tài khoản</span>
                    <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('get_create_student')}}">Tạo xóa tài khoản sinh viên</a></li>
                    <li><a href="{{route('get_create_teacher')}}">Tạo xóa tài giáo viên</a></li>
                </ul>
            </li>
            <li class="treeview admin">
                <a href="#"><i class="fa fa-link"></i> <span>Thay đổi thông tin</span>
                    <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="#">Reset password</a></li>
                    <li><a href="#">Cập nhật gmail</a></li>
                    <li><a href="#">Cập nhật sdt </a></li>
                </ul>
            </li>
            <li class="treeview admin">
                <a ><i class="fa fa-link"></i> <span>Quản lý tài khoản</span>
                    <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('log_Out_Admin')}}">Thoát tài khoản</a></li>
                </ul>
            </li>
        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>