<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="dashboard" class="brand-link">
        <img src="{{URL::asset('assets/img/logo.png')}}" alt="News SpotLight" class="brand-image elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">News SpotLight</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="info">
            <a href="#" class="d-block">{{auth()->user()->name}}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <li class="nav-item">
                    <a href="/admin/dashboard" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                            Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/admin/categories" class="nav-link">
                        <i class="nav-icon fas fa-chart-pie"></i>
                            Categories
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/admin/news" class="nav-link">
                        <i class="nav-icon fas fa-chart-pie"></i>
                            News
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>