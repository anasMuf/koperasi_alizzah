<div class="sidebar">
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

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-header">RINGKASAN</li>
            <li class="nav-item">
                <a href="{{ route('dashboard') }}" class="nav-link {{ $menu == 'dashboard' ? 'active' : '' }}">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-copy"></i>
                    <p>Lihat Arus Kas</p>
                </a>
            </li>
            <li class="nav-header">TRANSAKSI</li>
            <li class="nav-item">
                <a href="{{ route('purchase.new-item') }}" class="nav-link {{ $menu == 'pembelian baru' ? 'active' : '' }}">
                    <i class="nav-icon fas fa-truck-loading"></i>
                    <p>Pembelian Barang</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('purchase.restock') }}" class="nav-link {{ $menu == 'penambahan stok' ? 'active' : '' }}">
                    <i class="nav-icon fas fa-boxes"></i>
                    <p>Penambahan Stok</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('cashier.main') }}" class="nav-link {{ $menu == 'kasir' ? 'active' : '' }}">
                    <i class="nav-icon fas fa-cash-register"></i>
                    <p>Kasir</p>
                </a>
            </li>
            <li class="nav-header">MASTER DATA</li>
            <li class="nav-item">
                <a href="{{ route('product.main') }}" class="nav-link {{ $menu == 'barang' ? 'active' : '' }}">
                    <i class="nav-icon fas fa-th"></i>
                    <p>Data Barang</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('purchase.main') }}" class="nav-link {{ $menu == 'pembelian' ? 'active' : '' }}">
                    <i class="nav-icon fas fa-warehouse"></i>
                    <p>Data Pembelian</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('order.main') }}" class="nav-link {{ $menu == 'penjualan' ? 'active' : '' }}">
                    <i class="nav-icon fas fa-store"></i>
                    <p>Data Penjualan</p>
                </a>
            </li>
        </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
