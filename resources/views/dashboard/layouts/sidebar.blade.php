<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="/admin">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/admin/sliders">
                <i class="icon-layout menu-icon"></i>
                <span class="menu-title">Slider</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/admin/products">
                <i class="icon-layout menu-icon"></i>
                <span class="menu-title">Products</span>
            </a>
        </li>
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            <span>Administrator</span>
        </h6>
        <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/categories*') ? 'active' : ''}}" href="/admin/categories">
                <i class="icon-layout menu-icon"></i>
                <span class="menu-title">Categories</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/users*') ? 'active' : ''}}" href="/admin/users">
                <i class="icon-layout menu-icon"></i>
                <span class="menu-title">Users</span>
            </a>
        </li>
    </ul>
</nav>
