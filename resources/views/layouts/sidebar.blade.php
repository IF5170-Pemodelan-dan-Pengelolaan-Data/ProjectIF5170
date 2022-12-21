<header class="main-nav">
    <div class="sidebar-user text-center"><a class="setting-primary" href="javascript:void(0)"><i
                data-feather="settings"></i></a><img class="img-90 rounded-circle"
            src="{{ asset('assets/images/dashboard/1.png') }}" alt="">
        <div class="badge-bottom"><span class="badge badge-primary">MVCH</span></div><a href="user-profile.html">
            <h6 class="mt-3 f-14 f-w-600">{{ Session::get('data')['name'] }}</h6>
        </a>
        <p class="mb-0 font-roboto">{{ Session::get('login') }}</p>
    </div>
    <nav>
        <div class="main-navbar">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="mainnav">
                <ul class="nav-menu custom-scrollbar">
                    <li class="back-btn">
                        <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2"
                                aria-hidden="true"></i></div>
                    </li>
                    <li class="sidebar-main-title">
                        <div>
                            <h6>Main Menu</h6>
                        </div>
                    </li>
                    @if (Session::get('login') === 'HRD')
                        <li><a class="nav-link menu-title link-nav  @if (request()->routeIs('hrd.home')) active @endif"
                                href="{{ route('hrd.home') }}"><i data-feather="home"></i><span>Dashboard</span></a>
                        </li>
                        <li class="dropdown">
                            <a class="nav-link menu-title @if (request()->routeIs('hrd.pegawai.*')) active @endif"><i
                                    data-feather="user"></i><span>Data Pegawai</span>
                                <div class="according-menu"><i class="fa fa-angle-right"></i></div>
                            </a>
                            <ul class="nav-submenu menu-content"
                                style="display: @if (request()->routeIs('hrd.pegawai.*')) block
                        @else none @endif;">
                                <li><a href="{{ route('hrd.pegawai.allcabang') }}"
                                        class="{{ request()->routeIs('hrd.pegawai.allcabang') ? 'active' : '' }}">Semua
                                        Cabang</a></li>
                                <li><a href="{{ route('hrd.pegawai.colorado') }}"
                                        class="{{ request()->routeIs('hrd.pegawai.colorado') ? 'active' : '' }}">Cabang
                                        Colorado</a></li>
                                <li><a href="{{ route('hrd.pegawai.california') }}"
                                        class="{{ request()->routeIs('hrd.pegawai.california') ? 'active' : '' }}">Cabang
                                        California </a>
                                <li><a href="{{ route('hrd.pegawai.indonesia') }}"
                                        class="{{ request()->routeIs('hrd.pegawai.indonesia') ? 'active' : '' }}">Cabang
                                        Indonesia</a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="nav-link menu-title @if (request()->routeIs('hrd.cuti.*')) active @endif"><i
                                    data-feather="monitor"></i><span>Data Cuti</span>
                                <div class="according-menu"><i class="fa fa-angle-right"></i></div>
                            </a>
                            <ul class="nav-submenu menu-content"
                                style="display: @if (request()->routeIs('hrd.cuti.*')) block
                        @else none @endif;">
                                <li><a href="{{ route('hrd.cuti.allcabang') }}"
                                        class="{{ request()->routeIs('hrd.cuti.allcabang') ? 'active' : '' }}">Semua
                                        Cabang</a></li>
                                <li><a href="{{ route('hrd.cuti.colorado') }}"
                                        class="{{ request()->routeIs('hrd.cuti.colorado') ? 'active' : '' }}">Cabang
                                        Colorado</a></li>
                                <li><a href="{{ route('hrd.cuti.california') }}"
                                        class="{{ request()->routeIs('hrd.cuti.california') ? 'active' : '' }}">Cabang
                                        California </a>
                                <li><a href="{{ route('hrd.cuti.indonesia') }}"
                                        class="{{ request()->routeIs('hrd.cuti.indonesia') ? 'active' : '' }}">Cabang
                                        Indonesia</a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="nav-link menu-title @if (request()->routeIs('hrd.laporan.*')) active @endif"><i
                                    data-feather="folder"></i><span>Laporan</span>
                                <div class="according-menu"><i class="fa fa-angle-right"></i></div>
                            </a>
                            <ul class="nav-submenu menu-content"
                                style="display:@if (request()->routeIs('hrd.laporan.*')) block
                        @else none @endif;">
                                <li><a href="{{ route('hrd.laporan.histori') }}"
                                        class="{{ request()->routeIs('hrd.laporan.histori') ? 'active' : '' }}">History
                                        Pemindahan Pegawai</a></li>
                                <li><a href="{{ route('hrd.laporan.jumlah_pegawai') }}"
                                        class="{{ request()->routeIs('hrd.laporan.jumlah_pegawai') ? 'active' : '' }}">Jumlah
                                        Pegawai</a></li>
                                <li><a href="{{ route('hrd.laporan.presensi_pegawai') }}"
                                        class="{{ request()->routeIs('hrd.laporan.presensi_pegawai') ? 'active' : '' }}">Presensi
                                        Pegawai</a>
                                <li><a href="{{ route('hrd.laporan.pengajuan_cuti') }}"
                                        class="{{ request()->routeIs('hrd.laporan.pengajuan_cuti') ? 'active' : '' }}">Pengajuan
                                        Cuti Pegawai</a>
                                </li>
                            </ul>
                        </li>
                    @elseif(Session::get('login') === 'Manager')
                        <li><a class="nav-link menu-title link-nav  @if (request()->routeIs('manager.home')) active @endif"
                                href="{{ route('manager.home') }}"><i
                                    data-feather="home"></i><span>Dashboard</span></a>
                        </li>
                        <li><a class="nav-link menu-title link-nav  @if (request()->routeIs('manager.pegawai.mycabang')) active @endif"
                                href="{{ route('manager.pegawai.mycabang') }}"><i data-feather="user"></i><span>Data
                                    Pegawai</span></a>
                        </li>
                        <li><a class="nav-link menu-title link-nav  @if (request()->routeIs('manager.cuti.mycabang')) active @endif"
                                href="{{ route('manager.cuti.mycabang') }}"><i data-feather="monitor"></i><span>Data
                                    Cuti</span></a>
                        </li>

                        <li class="dropdown">
                            <a class="nav-link menu-title @if (request()->routeIs('manager.laporan.*')) active @endif"><i
                                    data-feather="folder"></i><span>Laporan</span>
                                <div class="according-menu"><i class="fa fa-angle-right"></i></div>
                            </a>
                            <ul class="nav-submenu menu-content"
                                style="display:@if (request()->routeIs('manager.laporan.*')) block
                @else none @endif;">
                                <li><a href="{{ route('manager.laporan.histori') }}"
                                        class="{{ request()->routeIs('manager.laporan.histori') ? 'active' : '' }}">History
                                        Pemindahan Pegawai</a></li>
                                <li><a href="{{ route('manager.laporan.jumlah_pegawai') }}"
                                        class="{{ request()->routeIs('manager.laporan.jumlah_pegawai') ? 'active' : '' }}">Jumlah
                                        Pegawai</a></li>
                                <li><a href="{{ route('manager.laporan.presensi_pegawai') }}"
                                        class="{{ request()->routeIs('manager.laporan.presensi_pegawai') ? 'active' : '' }}">Presensi
                                        Pegawai</a>
                                <li><a href="{{ route('manager.laporan.pengajuan_cuti') }}"
                                        class="{{ request()->routeIs('manager.laporan.pengajuan_cuti') ? 'active' : '' }}">Pengajuan
                                        Cuti Pegawai</a>
                                </li>
                            </ul>
                        </li>
                    @elseif(in_array(Session::get('login'), ['Physician', 'Technician', 'Nurse', 'Staff']))
                        <li><a class="nav-link menu-title link-nav  @if (request()->routeIs('pegawai.home')) active @endif"
                                href="{{ route('pegawai.home') }}"><i
                                    data-feather="home"></i><span>Dashboard</span></a>
                        </li>
                        <li><a class="nav-link menu-title link-nav  @if (request()->routeIs('pegawai.cuti')) active @endif"
                                href="{{ route('pegawai.cuti') }}"><i data-feather="folder"></i><span>Pengajuan
                                    Cuti</span></a>
                        </li>
                        <li><a class="nav-link menu-title link-nav  @if (request()->routeIs('pegawai.profil')) active @endif"
                                href="{{ route('pegawai.profil') }}"><i
                                    data-feather="user"></i><span>Profile</span></a>
                        </li>
                    @endif
                </ul>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </div>
    </nav>
</header>
