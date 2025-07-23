
<div class="sidebar-wrapper" data-layout="stroke-svg">

    <div class="logo-wrapper">
        <a href="/dashboard">
            <img class="img-fluid" width="40px" src="{{ asset('landing_assets/images/logo-light.png') }}" alt="" style="width: 80px">
        </a>
        <div class="back-btn">
            <i class="fa fa-angle-left"> </i>
        </div>
        <div class="toggle-sidebar">
            <i class="status_toggle middle sidebar-toggle" data-feather="grid"> </i>
        </div>
    </div>


    <div class="logo-icon-wrapper">
        <a href="index.html">
            <img class="img-fluid" src="{{ asset('landing_assets/images/logo-light.png') }}" alt="">
        </a>
    </div>

    <nav class="sidebar-main">
        <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
        <div id="sidebar-menu">
            <ul class="sidebar-links" id="simple-bar">

                <li class="back-btn">
                    <a href="index.html">
                        <img class="img-fluid" src="{{ asset('landing_assets/images/logo-light.png') }}" alt="">
                    </a>
                    <div class="mobile-back text-end">
                        <span>Back </span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i>
                    </div>
                </li>
                <li class="pin-title sidebar-main-title">
                    <div>
                        <h6>Pinned</h6>
                    </div>
                </li>
                <li class="sidebar-main-title">
                    <div>
                        <h6 class="">Dashboard</h6>
                    </div>
                </li>
                <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav"
                        href="/dashboard">
                        <i class="fa fa-tachometer text-white" aria-hidden="true"></i>
                        </svg><span class="">Dashboard</span></a>
                </li>

                {{-- <li class="sidebar-main-title">
                    <div>
                        <h6 class="">Manajemen Soal</h6>
                    </div>
                </li> --}}

                {{-- <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav"
                    href="/kategori-soal">
                    <i class="fa fa-briefcase text-white"></i>
                    </svg><span class="">Category Soal</span></a>
                </li> --}}

                @if (session()->get('role') == 'admin')
                    <li class="sidebar-main-title">
                        <div>
                            <h6 class="">Master</h6>
                        </div>
                    </li>

                    <li class="sidebar-list" style="margin-top: -20px"><i class="fa fa-thumb-users"></i><a class="sidebar-link sidebar-title link-nav"
                        href="/users">
                        <i class="fa fa-users text-white" aria-hidden="true"></i>
                        </svg><span class="">Data User</span></a>
                    </li>
                @endif

                @if (session()->get('role') == 'user')

                    <li class="sidebar-main-title">
                        <div>
                            <h6 class="">Master</h6>
                        </div>
                    </li>

                    <li class="sidebar-list" style="margin-top: -20px"><i class="fa fa-thumb-products"></i><a class="sidebar-link sidebar-title link-nav"
                        href="/fuel">
                        <i class="fa fa-tint text-white" aria-hidden="true"></i>
                        </svg><span class="">Bahan Bakar</span></a>
                    </li>

                    <li class="sidebar-list" style="margin-top: -20px"><i class="fa fa-thumb-products"></i><a class="sidebar-link sidebar-title link-nav"
                        href="/fitur">
                        <i class="fa fa-cubes text-white" aria-hidden="true"></i>
                        </svg><span class="">Fitur</span></a>
                    </li>

                    <li class="sidebar-list" style="margin-top: -20px"><i class="fa fa-thumb-products"></i><a class="sidebar-link sidebar-title link-nav"
                        href="/promo">
                        <i class="fa fa-percent text-white" aria-hidden="true"></i>
                        </svg><span class="">Promo</span></a>
                    </li>

                    <li class="sidebar-main-title">
                        <div>
                            <h6 class="">Produk</h6>
                        </div>
                    </li>

                    <li class="sidebar-list" style="margin-top: -20px"><i class="fa fa-thumb-products"></i><a class="sidebar-link sidebar-title link-nav"
                        href="/kategori-produk">
                        <i class="fa fa-th text-white" aria-hidden="true"></i>
                        </svg><span class="">Kategori Produk</span></a>
                    </li>

                    <li class="sidebar-list" style="margin-top: -20px"><i class="fa fa-thumb-products"></i><a class="sidebar-link sidebar-title link-nav"
                        href="/produk">
                        <i class="fa fa-shopping-bag text-white" aria-hidden="true"></i>
                        </svg><span class="">Data Produk</span></a>
                    </li>
                @endif

            </ul>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </div>
    </nav>
</div>
