<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">

            </div>
            <div class="pull-left info">

            </div>
        </div>



        <!-- Sidebar Menu -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">Chức năng:</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="treeview">
                <a href="#"><i class="fa fa-link"></i> <span>Quản lý học sinh</span>
                    <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="#">Kiểm tra thông tin</a></li>
                    <li><a href="{{route('teacher_update_score')}}">Cập nhật điểm</a></li>
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
                    <li><a href={{route('pick_semester')}}>Đăng kí lớp</a></li>
                    <li><a href="#">Cập nhật thông tin</a></li>
                </ul>
            </li>
            <li class="treeview" style="display: none">
                <a href="#"><i class="fa fa-link"></i> <span>Tạo mới tài khoản</span>
                    <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="#">Tạo xóa tài khoản sinh viên</a></li>
                    <li><a href="#">Tạo xóa tài khoản học sinh</a></li>
                </ul>
            </li>
            <li class="treeview admin">
                <a ><i class="fa fa-link"></i> <span>Quản lý tài khoản</span>
                    <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('log_out_teacher')}}">Thoát tài khoản</a></li>
                </ul>
            </li>
        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>