<nav class="navbar navbar-top fixed-top bg-primary text-white">
    <div class="container">
        <a class="d-inline navbar-brand text-white" href="#">
            <img src="{{ asset('images/logoRsUmmi.png') }}" alt="Logo" width="36" class="align-text-bottom me-2 bg-white rounded-circle border border-3 border-white">
            <span class="fs-4 text-uppercase">Apotek RS Ummi Kota Bogor</span>
        </a>
    </div>
</nav>

<nav class="navbar navbar-menu fixed-top navbar-expand-lg bg-light shadow-lg-sm">
    <div class="container">
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <x-navbar-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                        <i class="ti ti-home align-text-top me-1"></i> Dashboard
                    </x-navbar-link>
                </li>
                <li class="nav-item">
                    <x-navbar-link href="{{ route('categories.index') }}" :active="request()->routeIs('categories.*')">
                        <i class="ti ti-category align-text-top me-1"></i> Categories
                    </x-navbar-link>
                </li>
                <li class="nav-item">
                    <x-navbar-link href="{{ route('products.index') }}" :active="request()->routeIs('products.*')">
                        <i class="ti ti-copy align-text-top me-1"></i> Products
                    </x-navbar-link>
                </li>
                <li class="nav-item">
                    <x-navbar-link href="{{ route('customers.index') }}" :active="request()->routeIs('customers.*')">
                        <i class="ti ti-users align-text-top me-1"></i> Customers
                    </x-navbar-link>
                </li>
                <li class="nav-item">
                    <x-navbar-link href="{{ route('transactions.index') }}" :active="request()->routeIs('transactions.*')">
                        <i class="ti ti-folders align-text-top me-1"></i> Transactions
                    </x-navbar-link>
                </li>
                <li class="nav-item">
                    <x-navbar-link href="{{ route('report.index') }}" :active="request()->routeIs('report.*')">
                        <i class="ti ti-file-text align-text-top me-1"></i> Report
                    </x-navbar-link>
                </li>
            </ul>
        </div>
    </div>
</nav>