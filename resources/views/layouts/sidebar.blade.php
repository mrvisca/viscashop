<!-- BEGIN: Side Menu -->
<nav class="side-nav">
    <a href="" class="intro-x flex items-center pl-5 pt-4">
        <img alt="Midone Tailwind HTML Admin Template" class="w-6" src="{{ asset('dist/images/logo.svg') }}">
        <span class="hidden xl:block text-white text-lg ml-3"> Mid<span class="font-medium">one</span> </span>
    </a>
    <div class="side-nav__devider my-6"></div>
    <ul>
        <li>
            <a href="{{ route('admin.dashboard') }}" class="side-menu side-menu--active">
                <div class="side-menu__icon"> <i data-feather="monitor"></i> </div>
                <div class="side-menu__title"> Dashboard </div>
            </a>
        </li>
        <li>
            <a href="#" class="side-menu">
                <div class="side-menu__icon"> <i data-feather="package"></i> </div>
                <div class="side-menu__title"> Menu Produk <i data-feather="chevron-down" class="side-menu__sub-icon"></i> </div>
            </a>
            <ul class="">
                <li>
                    <a href="{{ route('admin.product') }}" class="side-menu">
                        <div class="side-menu__icon"> <i data-feather="package"></i> </div>
                        <div class="side-menu__title"> Produk </div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.kategori') }}" class="side-menu">
                        <div class="side-menu__icon"> <i data-feather="list"></i> </div>
                        <div class="side-menu__title"> Kategori Produk </div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.history') }}" class="side-menu">
                        <div class="side-menu__icon"> <i data-feather="clipboard"></i> </div>
                        <div class="side-menu__title"> Riwayat Stock </div>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="{{ route('admin.supplier') }}" class="side-menu">
                <div class="side-menu__icon"> <i data-feather="user"></i> </div>
                <div class="side-menu__title"> Supplier </div>
            </a>
        </li>
        <li>
            <a href="{{ route('admin.customer') }}" class="side-menu">
                <div class="side-menu__icon"> <i data-feather="users"></i> </div>
                <div class="side-menu__title"> Pelanggan </div>
            </a>
        </li>
        <li>
            <a href="{{ route('admin.transaction') }}" class="side-menu">
                <div class="side-menu__icon"> <i data-feather="package"></i> </div>
                <div class="side-menu__title"> Transaksi <i data-feather="chevron-down" class="side-menu__sub-icon"></i> </div>
            </a>
            <ul class="">
                <li>
                    <a href="index.html" class="side-menu">
                        <div class="side-menu__icon"> <i data-feather="credit-card"></i> </div>
                        <div class="side-menu__title"> Penjualan </div>
                    </a>
                </li>
                <li>
                    <a href="simple-menu-dashboard.html" class="side-menu">
                        <div class="side-menu__icon"> <i data-feather="shopping-cart"></i> </div>
                        <div class="side-menu__title"> Pembelian </div>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</nav>
<!-- END: Side Menu -->
