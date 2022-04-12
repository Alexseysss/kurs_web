<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <div class="brand-link">
        <img src="{{asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3">
        <div class="brand-text font-weight-light">Клиент</div>
    </div>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset('dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="{{route('client.main.index')}}" class="d-block">{{ Auth::user()->name }} {{ Auth::user()->surname }}</a>
            </div>
        </div>

        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->

            <li class="nav-item">
                <a href="{{route('client.putevka.index')}}" class="nav-link">
                    <i class="nav-icon fa fa-address-card"></i>
                    <p>
                        Путёвки
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('client.liked.index')}}" class="nav-link">
                    <i class="nav-icon fa fa-heart"></i>
                    <p>
                        Понравившиеся новости
                    </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{route('client.user.show', Auth::user()->id)}}" class="nav-link">
                    <i class="nav-icon fa fa-pager"></i>
                    <p>
                        Профиль
                    </p>
                </a>
            </li>
        </ul>
    </div>
    <!-- /.sidebar -->
</aside>
