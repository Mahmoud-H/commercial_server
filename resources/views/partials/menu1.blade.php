<aside class="main-sidebar sidebar-dark-primary elevation-4" style="min-height: 917px;">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <span class="brand-text font-weight-light">{{ trans('panel.site_title') }}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route("admin.front.index") }}">
                        <i class="fas fa-fw fa-tachometer-alt nav-icon">
                        </i>
                        <p>
                            {{ trans('global.dashboard') }}
                        </p>
                    </a>
                </li>
                @can('record_management_access')
                    <li class="nav-item has-treeview {{ request()->is("admin/crec-reg-requests*") ? "menu-open" : "" }} {{ request()->is("admin/crec-reg-people*") ? "menu-open" : "" }} {{ request()->is("admin/crec-reg-branches*") ? "menu-open" : "" }} {{ request()->is("admin/crec-reg-delegates*") ? "menu-open" : "" }} {{ request()->is("admin/front*") ? "menu-open" : "" }} {{ request()->is("admin/front*") ? "menu-open" : "" }}">
                        <a class="nav-link nav-dropdown-toggle" href="#">
                            <i class="fa-fw nav-icon fas fa-cogs">
                            </i>
                            <p>
                                {{ trans('cruds.recordManagement.title') }}
                                <i class="right fa fa-fw fa-angle-left nav-icon"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route("admin.front.index") }}" class="nav-link {{ request()->is("admin/front/*") || request()->is("admin/crec-reg-requests/*") ? "active" : "" }}">
                                    <i class="fa-fw nav-icon fas fa-cogs">

                                    </i>
                                    <p>
                                        طلباتي
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </li>
                @endcan
                @if(file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php')))
                    @can('profile_password_edit')
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('profile/password') || request()->is('profile/password/*') ? 'active' : '' }}" href="{{ route('profile.password.edit') }}">
                                <i class="fa-fw fas fa-key nav-icon">
                                </i>
                                <p>
                                    {{ trans('global.change_password') }}
                                </p>
                            </a>
                        </li>
                    @endcan
                @endif
                <li class="nav-item">
                    {{--<a href="#" class="nav-link" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">--}}
                    <a class="nav-link" href="/commercial/public/front/logousst">

                        <p>
                            <i class="fas fa-fw fa-sign-out-alt nav-icon">

                            </i>
                            <p>{{ trans('global.logout') }}</p>
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>