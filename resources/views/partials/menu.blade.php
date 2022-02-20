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
                    <a class="nav-link" href="{{ route("admin.home") }}">
                        <i class="fas fa-fw fa-tachometer-alt nav-icon">
                        </i>
                        <p>
                            {{ trans('global.dashboard') }}
                        </p>
                    </a>
                </li>
                @can('user_management_access')
                    <li class="nav-item has-treeview {{ request()->is("admin/permissions*") ? "menu-open" : "" }} {{ request()->is("admin/roles*") ? "menu-open" : "" }} {{ request()->is("admin/users*") ? "menu-open" : "" }}">
                        <a class="nav-link nav-dropdown-toggle" href="#">
                            <i class="fa-fw nav-icon fas fa-users">

                            </i>
                            <p>
                                {{ trans('cruds.userManagement.title') }}
                                <i class="right fa fa-fw fa-angle-left nav-icon"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            @can('permission_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.permissions.index") }}" class="nav-link {{ request()->is("admin/permissions") || request()->is("admin/permissions/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-unlock-alt">

                                        </i>
                                        <p>
                                            {{ trans('cruds.permission.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('role_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.roles.index") }}" class="nav-link {{ request()->is("admin/roles") || request()->is("admin/roles/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-briefcase">

                                        </i>
                                        <p>
                                            {{ trans('cruds.role.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('user_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.users.index") }}" class="nav-link {{ request()->is("admin/users") || request()->is("admin/users/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-user">

                                        </i>
                                        <p>
                                            {{ trans('cruds.user.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan
                @can('setting_access')
                    <li class="nav-item has-treeview {{ request()->is("admin/com-countries*") ? "menu-open" : "" }} {{ request()->is("admin/com-governorates*") ? "menu-open" : "" }} {{ request()->is("admin/com-cities*") ? "menu-open" : "" }} {{ request()->is("admin/com-districts*") ? "menu-open" : "" }} {{ request()->is("admin/com-needed-docs*") ? "menu-open" : "" }} {{ request()->is("admin/com-currencies*") ? "menu-open" : "" }} {{ request()->is("admin/com-work-classes*") ? "menu-open" : "" }} {{ request()->is("admin/person-types*") ? "menu-open" : "" }} {{ request()->is("admin/com-services*") ? "menu-open" : "" }} {{ request()->is("admin/fee-classes*") ? "menu-open" : "" }} {{ request()->is("admin/fee-types*") ? "menu-open" : "" }} {{ request()->is("admin/service-needed-fees*") ? "menu-open" : "" }} {{ request()->is("admin/com-accounts*") ? "menu-open" : "" }} {{ request()->is("admin/crec-settings*") ? "menu-open" : "" }}">
                        <a class="nav-link nav-dropdown-toggle" href="#">
                            <i class="fa-fw nav-icon fas fa-wrench">

                            </i>
                            <p>
                                {{ trans('cruds.setting.title') }}
                                <i class="right fa fa-fw fa-angle-left nav-icon"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            @can('com_country_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.com-countries.index") }}" class="nav-link {{ request()->is("admin/com-countries") || request()->is("admin/com-countries/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon far fa-circle">

                                        </i>
                                        <p>
                                            {{ trans('cruds.comCountry.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('com_governorate_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.com-governorates.index") }}" class="nav-link {{ request()->is("admin/com-governorates") || request()->is("admin/com-governorates/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon far fa-circle">

                                        </i>
                                        <p>
                                            {{ trans('cruds.comGovernorate.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('com_city_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.com-cities.index") }}" class="nav-link {{ request()->is("admin/com-cities") || request()->is("admin/com-cities/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon far fa-circle">

                                        </i>
                                        <p>
                                            {{ trans('cruds.comCity.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('com_district_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.com-districts.index") }}" class="nav-link {{ request()->is("admin/com-districts") || request()->is("admin/com-districts/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon far fa-circle">

                                        </i>
                                        <p>
                                            {{ trans('cruds.comDistrict.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('com_needed_doc_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.com-needed-docs.index") }}" class="nav-link {{ request()->is("admin/com-needed-docs") || request()->is("admin/com-needed-docs/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon far fa-circle">

                                        </i>
                                        <p>
                                            {{ trans('cruds.comNeededDoc.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('com_currency_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.com-currencies.index") }}" class="nav-link {{ request()->is("admin/com-currencies") || request()->is("admin/com-currencies/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon far fa-circle">

                                        </i>
                                        <p>
                                            {{ trans('cruds.comCurrency.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('com_work_class_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.com-work-classes.index") }}" class="nav-link {{ request()->is("admin/com-work-classes") || request()->is("admin/com-work-classes/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            {{ trans('cruds.comWorkClass.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                             @can('person_type_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.person-types.index") }}" class="nav-link {{ request()->is("admin/person-types") || request()->is("admin/person-types/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            {{ trans('cruds.personType.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                                @can('com_service_access')
                                    <li class="nav-item">
                                        <a href="{{ route("admin.com-services.index") }}" class="nav-link {{ request()->is("admin/com-services") || request()->is("admin/com-services/*") ? "active" : "" }}">
                                            <i class="fa-fw nav-icon far fa-circle">

                                            </i>
                                            <p>
                                                {{ trans('cruds.comService.title') }}
                                            </p>
                                        </a>
                                    </li>
                                @endcan
                                @can('fee_class_access')
                                    <li class="nav-item">
                                        <a href="{{ route("admin.fee-classes.index") }}" class="nav-link {{ request()->is("admin/fee-classes") || request()->is("admin/fee-classes/*") ? "active" : "" }}">
                                            <i class="fa-fw nav-icon far fa-circle">

                                            </i>
                                            <p>
                                                {{ trans('cruds.feeClass.title') }}
                                            </p>
                                        </a>
                                    </li>
                                @endcan
                                @can('fee_type_access')
                                    <li class="nav-item">
                                        <a href="{{ route("admin.fee-types.index") }}" class="nav-link {{ request()->is("admin/fee-types") || request()->is("admin/fee-types/*") ? "active" : "" }}">
                                            <i class="fa-fw nav-icon far fa-circle">

                                            </i>
                                            <p>
                                                {{ trans('cruds.feeType.title') }}
                                            </p>
                                        </a>
                                    </li>
                                @endcan
                                @can('service_needed_fee_access')
                                    <li class="nav-item">
                                        <a href="{{ route("admin.service-needed-fees.index") }}" class="nav-link {{ request()->is("admin/service-needed-fees") || request()->is("admin/service-needed-fees/*") ? "active" : "" }}">
                                            <i class="fa-fw nav-icon far fa-circle">

                                            </i>
                                            <p>
                                                {{ trans('cruds.serviceNeededFee.title') }}
                                            </p>
                                        </a>
                                    </li>
                                @endcan
                                @can('com_account_access')
                                    <li class="nav-item">
                                        <a href="{{ route("admin.com-accounts.index") }}" class="nav-link {{ request()->is("admin/com-accounts") || request()->is("admin/com-accounts/*") ? "active" : "" }}">
                                            <i class="fa-fw nav-icon far fa-circle">

                                            </i>
                                            <p>
                                                {{ trans('cruds.comAccount.title') }}
                                            </p>
                                        </a>
                                    </li>
                                @endcan
                            @can('crec_setting_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.crec-settings.index") }}" class="nav-link {{ request()->is("admin/crec-settings") || request()->is("admin/crec-settings/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            {{ trans('cruds.comSettings.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan
                @can('record_management_access')
                    <li class="nav-item has-treeview {{ request()->is("admin/crec-reg-requests*") ? "menu-open" : "" }} {{ request()->is("admin/crec-reg-people*") ? "menu-open" : "" }} {{ request()->is("admin/crec-reg-branches*") ? "menu-open" : "" }} {{ request()->is("admin/crec-reg-delegates*") ? "menu-open" : "" }} {{ request()->is("admin/crec-reg-docs*") ? "menu-open" : "" }}">
                        <a class="nav-link nav-dropdown-toggle" href="#">
                            <i class="fa-fw nav-icon fas fa-cogs">

                            </i>
                            <p>
                                {{ trans('cruds.recordManagement.title') }}
                                <i class="right fa fa-fw fa-angle-left nav-icon"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            @can('crec_reg_request_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.crec-reg-requests.index") }}" class="nav-link {{ request()->is("admin/crec-reg-requests") || request()->is("admin/crec-reg-requests/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            {{ trans('cruds.crecRegRequest.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('crec_reg_person_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.crec-reg-people.index") }}" class="nav-link {{ request()->is("admin/crec-reg-people") || request()->is("admin/crec-reg-people/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            {{ trans('cruds.crecRegPerson.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('crec_reg_branch_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.crec-reg-branches.index") }}" class="nav-link {{ request()->is("admin/crec-reg-branches") || request()->is("admin/crec-reg-branches/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            {{ trans('cruds.crecRegBranch.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('crec_reg_delegate_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.crec-reg-delegates.index") }}" class="nav-link {{ request()->is("admin/crec-reg-delegates") || request()->is("admin/crec-reg-delegates/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            {{ trans('cruds.crecRegDelegate.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('crec_reg_doc_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.crec-reg-docs.index") }}" class="nav-link {{ request()->is("admin/crec-reg-docs") || request()->is("admin/crec-reg-docs/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            {{ trans('cruds.crecRegDoc.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('crec_reg_fee_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.crec-reg-fees.index") }}" class="nav-link {{ request()->is("admin/crec-reg-fees") || request()->is("admin/crec-reg-fees/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            {{ trans('cruds.crecRegFee.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
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
                    <a href="#" class="nav-link" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
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