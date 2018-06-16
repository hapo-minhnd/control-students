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

        <!-- search form (Optional) -->
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">Chức năng :</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="treeview">
                <a href="#"><i class="fa fa-link"></i> <span>Quản lý học sinh</span>
                    <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href={{route('pick_semester_student')}}>Đăng ký lớp học</a></li>
                    <li><a href={{route('index_point')}}>Kết quả học tập</a></li>
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
                    <li><a href="{{route('log_Out_Student')}}">Thoát tài khoản</a></li>
                </ul>
            </li>
        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>