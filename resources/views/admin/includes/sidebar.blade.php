<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <div class="brand-link">
        <img src="{{asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3">
        <div class="brand-text font-weight-light">Администратор</div>
    </div>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset('dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="{{route('admin.main.index')}}" class="d-block">{{ Auth::user()->name }} {{ Auth::user()->surname }}</a>
            </div>
        </div>

        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->

            <li class="nav-item">
                <a href="{{route('admin.user.index')}}" class="nav-link">
                    <i class="nav-icon fa fa-users"></i>
                    <p>
                        Пользователи
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('admin.putevka.index')}}" class="nav-link">
                    <i class="nav-icon fa fa-address-card"></i>
                    <p>
                        Путёвки
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('admin.room.index')}}" class="nav-link">
                    <i class="nav-icon fa fa-door-open"></i>
                    <p>
                        Комнаты
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('admin.post.index')}}" class="nav-link">
                    <i class="nav-icon fa fa-newspaper"></i>
                    <p>
                        Новости
                    </p>
                </a>
            </li>
        </ul>
    </div>
    <!-- /.sidebar -->
</aside>
