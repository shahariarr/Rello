<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <a href="index.html">Rello</a>
      </div>
      <div class="sidebar-brand sidebar-brand-sm">
        <a href="index.html">Rello</a>
      </div>
      <ul class="sidebar-menu">
        <li class="menu-header">Dashboard</li>
        <li class="dropdown {{ Route::is('dashboard')  ? 'active' : '' }}">
          <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
          <ul class="dropdown-menu">
            <li><a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a></li>
          </ul>
        </li>



        @can(['index-banner', 'index-service', 'index-property', 'index-rent'])
            <li class="menu-header">Management</li>
            <li class="dropdown {{Route::is('banner.*') || Route::is('service.*') || Route::is('properties.*') || Route::is('rents.*') ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-cogs"></i> <span>Management</span></a>
                <ul class="dropdown-menu">
                    {{-- @can('create-banner')
                    <li class="{{ Route::is('banners.create') ? 'active' : '' }}"><a class="nav-link" href="{{ route('banner.create') }}">Create Banner</a></li>
                    @endcan --}}
                    @can('index-banner')
                    <li class="{{ Route::is('banners.index') ? 'active' : '' }}"><a class="nav-link" href="{{ route('banner.edit') }}">Banner List</a></li>
                    @endcan
                    {{-- @can('create-service')
                    <li class="{{ Route::is('services.create') ? 'active' : '' }}"><a class="nav-link" href="{{ route('service.create') }}">Create Service</a></li>
                    @endcan --}}
                    @can('index-service')
                    <li class="{{ Route::is('services.index') ? 'active' : '' }}"><a class="nav-link" href="{{ route('service.edit') }}">Service List</a></li>
                    @endcan
                    @can('index-property')
                    <li class="{{ Route::is('properties.index') ? 'active' : '' }}"><a class="nav-link" href="{{ route('properties.index') }}">Property List</a></li>
                    @endcan
                    @can('index-rent')
                    <li class="{{ Route::is('rents.index') ? 'active' : '' }}"><a class="nav-link" href="{{ route('rents.index') }}">Rent List</a></li>
                    @endcan
                </ul>
            </li>
        @endcan


        <li class="menu-header">User Management</li>
        <li class="dropdown {{ Route::is('users.*') || Route::is('roles.*')||Route::is('permissions.*') ? 'active' : '' }}">
          <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="far fa-user"></i> <span>User</span></a>
          <ul class="dropdown-menu">
            @can('index-user')
            <li class="{{ Route::is('users.*')  ? 'active' : '' }}"><a class="nav-link" href="{{ route('users.index') }}">Users List</a></li>
            @endcan
            @can('index-role')
            <li class="{{ Route::is('roles.*')  ? 'active' : '' }}"><a class="nav-link" href="{{ route('roles.index') }}">Roles List</a></li>
            @endcan
            @can('index-permission')
            <li class="{{ Route::is('permissions.*')  ? 'active' : '' }}"><a class="nav-link" href="{{ route('permissions.index') }}">Permissions List</a></li>
            @endcan
          </ul>
        </li>
    </aside>
</div>
