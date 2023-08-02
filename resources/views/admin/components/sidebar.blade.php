<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header position-relative">
            <div class="d-flex justify-content-between align-items-center">
                <div class="logo">
                    <a href=""><img src="{{ asset('admin/images/logo/logo.svg') }}" alt="Logo" width="100px"
                            srcset="" /></a>
                </div>
                <div class="theme-toggle d-flex gap-2 align-items-center mt-2">
                    <div class="form-check form-switch fs-6">
                        <input class="form-check-i nput me-0" type="checkbox" id="toggle-dark" hidden />
                        {{-- <label class="form-check-label"></label> --}}
                    </div>
                </div>
                <div class="sidebar-toggler x">
                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-title">ADMIN</li>
                <li class="sidebar-item {{ $active == 'brands' ? 'active' : '' }}">
                    <a href="{{ route('admin.brand.index') }}" class="sidebar-link">
                        <i class="bi bi-grid-fill"></i>
                        <span>Brands</span>
                    </a>
                </li>
                <li class="sidebar-item {{ $active == 'galery' ? 'active' : '' }}">
                    <a href="{{ route('admin.galeries.index') }}" class="sidebar-link">
                        <i class="bi bi-grid-fill"></i>
                        <span>Galeries</span>
                    </a>
                </li>
                <li class="sidebar-item {{ $active == 'header' ? 'active' : '' }}">
                    <a href="{{ route('admin.header.index') }}" class="sidebar-link">
                        <i class="bi bi-grid-fill"></i>
                        <span>Header</span>
                    </a>
                </li>
                <li class="sidebar-item {{ $active == 'event' ? 'active' : '' }}">
                    <a href="{{ route('admin.event.index') }}" class="sidebar-link">
                        <i class="bi bi-grid-fill"></i>
                        <span>Event</span>
                    </a>
                </li>
                <li class="sidebar-item {{ $active == 'career' ? 'active' : '' }}">
                    <a href="{{ route('admin.career.index') }}" class="sidebar-link">
                        <i class="bi bi-grid-fill"></i>
                        <span>Career</span>
                    </a>
                </li>
                <li class="sidebar-item {{ $active == 'menu' ? 'active' : '' }}">
                    <a href="{{ route('admin.menu.index') }}" class="sidebar-link">
                        <i class="bi bi-grid-fill"></i>
                        <span>Menu</span>
                    </a>
                </li>
                <li class="sidebar-item {{ $active == 'happening' ? 'active' : '' }}">
                    <a href="{{ route('admin.happening.index') }}" class="sidebar-link">
                        <i class="bi bi-grid-fill"></i>
                        <span>Happening</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
