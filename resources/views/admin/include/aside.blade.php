<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="info">
                <a href="#" class="d-block">{{ Auth::user()->name }}</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{ route('admin.user') }}" class="nav-link">
                        <p>
                            Авторы
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.book') }}" class="nav-link">
                        <p>
                            Книги
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.genre') }}" class="nav-link">
                        <p>
                            Жанры
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
