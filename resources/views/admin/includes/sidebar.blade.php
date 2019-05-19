<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('dashboard') }}" class="brand-link">
        <img src="{{asset('images/logo.png')}}" alt="{{config('app.name')}} Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">{{config('app.name')}}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
              <img src="{{asset('images/avatar.png')}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
              <a href="#" class="d-block">{!! Auth::user()->name !!}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-header">General</li>

                <li class="nav-item {{ url()->current() == url('/admin/dashboard') ? 'active' : '' }}">
                    <a href="{{ route('dashboard') }}" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-newspaper"></i>
                        <p>
                            Blog Posts
                            <i class="right fa fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('posts.index') }}" class="nav-link">
                                <i class="nav-icon fas fa-book-open"></i>
                                <p>View Posts</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="{{ route('category.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-book-reader"></i>
                        <p>Categories</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('tags.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-book"></i>
                        <p>Tags</p>
                    </a>
                </li>

                <li class="nav-item {{ url()->current() == url('/admin/songs') ? 'active' : '' }}">
                    <a href="{{ route('songs.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-music"></i>
                        <p>
                            Music
                        </p>
                    </a>
                </li>

                <li class="nav-item {{ url()->current() == url('/admin/videos') ? 'active' : '' }}">
                    <a href="{{ route('videos.index') }}" class="nav-link">
                        <i class="nav-icon fa fa-film"></i>
                        <p>
                            Videos
                        </p>
                    </a>
                </li>

                @role('superadministrator')
                    <li class="nav-header">Administration</li>
                    

                    
                    <li class="nav-item">
                        <a href="{{ route('users.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-users"></i>
                            <p>
                                Manage Users
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-users"></i>
                            Roles &amp; Permissions
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('artist.index') }}" class="nav-link">
                            <i class="nav-icon fa fa-users-cog"></i>
                            <p>
                                Manage Artists
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('solutions.index') }}" class="nav-link">
                            <i class="nav-icon fa fa-pencil"></i>
                            <p>
                                Manage Services
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('settings') }}" class="nav-link">
                            <i class="nav-icon fa fa-cog"></i>
                            <p>
                                Settings
                            </p>
                        </a>
                    </li>
                @endrole
                
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
