<!-- Start Sidebar Area -->
<div class="dashboard-sidebar-menu">
    <h3>Deborah Roderick</h3>

    <ul>
        <li>
            <a href="{{route('user.dashboard')}}" class="{{ Request::routeIs('user.dashboard') ? 'active':''}}">
                <i class="fa-solid fa-chart-line"></i>
                Dashboard
            </a>
        </li>
        <li>
            <a href="{{route('user.profile')}}" class="{{ Request::routeIs('user.profile') ? 'active':''}}">
                <i class="fa-solid fa-user"></i>
                My Profile
            </a>
        </li>
        <li>
            <a href="{{route("user.profile.edit")}}" class="{{ Request::routeIs('user.profile.edit') ? 'active':''}}">
                <i class="fa-solid fa-pen-to-square"></i>
                Edit Profile
            </a>
        </li>
        <li>
            <a href="{{route('user.properties.create')}}" class="{{ Request::routeIs('user.properties.create') ? 'active':''}}">
                <i class="fa-regular fa-chart-bar"></i>
                Add Property Listing
            </a>
        </li>

        <li>
            <a href="{{route('user.rents.create')}}" class="{{ Request::routeIs('user.rents.create') ? 'active':''}}">
                <i class="fa-regular fa-chart-bar"></i>
                Add Rent Property Listing
            </a>
        </li>


        <li>
            <a href="{{route('user.properties.index')}}"class="{{ Request::routeIs('user.properties.index') ? 'active':''}}">
                <i class="fa-regular fa-user"></i>
                My Properties
            </a>
        </li>

        <li>
            <a href="{{route('user.rents.index')}}"class="{{ Request::routeIs('user.rents.index') ? 'active':''}}">
                <i class="fa-regular fa-user"></i>
                My Rent Properties
            </a>
        </li>

        <li>
            <a href="index.html">
                <i class="fa-solid fa-right-from-bracket"></i>
                Log Out
            </a>
        </li>
    </ul>
</div>
<!-- End Sidebar Area -->
