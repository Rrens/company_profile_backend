<div class="container-xxl position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-dark hero-body px-4 px-lg-5 py-3 py-lg-0">
        <a href="{{ route('home') }}" class="navbar-brand p-0">
            <img src="{{ asset('assets/img/logo1.png') }}" alt="Logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0 pe-4">
                <a href="{{ route('home') }}" class="nav-item nav-link {{ $active == 'home' ? 'active' : '' }}">Home</a>
                <a href="{{ route('about.index') }}"
                    class="nav-item nav-link {{ $active == 'about' ? 'active' : '' }}">About</a>
                <a href="{{ route('establishment.index') }}"
                    class="nav-item nav-link {{ $active == 'establishment' ? 'active' : '' }}">Establishments</a>
                <a href="{{ route('galeries.viewUser') }}"
                    class="nav-item nav-link {{ $active == 'galery' ? 'active' : '' }}">Galleries</a>
                <a href="{{ route('contact.index') }}" class="nav-item nav-link"
                    {{ $active == 'contact' ? 'active' : '' }}>Contact</a>
                <a href="{{ route('reserve.index') }}"
                    class="nav-item nav-link {{ $active == 'reserve' ? 'active' : '' }}">Reserve Now</a>
            </div>
        </div>
    </nav>
    <div
        class="container-xxl py-4 hero-body
        @if ($active == 'home') hero-header-home
        @elseif ($active == 'about')
        hero-header-about
        @elseif ($active == 'establishment')
        hero-header-establish
        @elseif ($active == 'contact')
        hero-header-contact
        @elseif ($active == 'reserve')
        sirloin-header
        @elseif ($active == 'galery')
        @else
        hero-header-{{ $data->id }} @endif">
        <div class="container my-5 py-5">
            <div class="row align-items-center g-5">
                <div class="col-lg-6 text-center text-lg-start">
                </div>
            </div>
        </div>
    </div>
</div>
