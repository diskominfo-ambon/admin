<!-- sidebar @s -->
<div class="nk-sidebar nk-sidebar-fixed is-dark " data-content="sidebarMenu">
    <div class="nk-sidebar-element nk-sidebar-head">
        <div class="nk-sidebar-brand">
            <a href="{{ route('dash') }}" class="logo-link nk-sidebar-logo">
                <img class="logo-light logo-img" src="{{ asset('/vendor/images/logo.png') }}" srcset="{{ asset('/vendor/images/logo.png') }} 2x" alt="logo">
                <img class="logo-dark logo-img" src="{{ asset('/vendor/images/logo.png') }}" srcset="{{ asset('/vendor/images/logo.png') }} 2x" alt="logo-dark">
            </a>
        </div>
        <div class="nk-menu-trigger mr-n2">
            <a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none" data-target="sidebarMenu"><em class="icon ni ni-arrow-left"></em></a>
        </div>
    </div><!-- .nk-sidebar-element -->
    <div class="nk-sidebar-element">
        <div class="nk-sidebar-content">
            <div class="nk-sidebar-menu" data-simplebar>
                <ul class="nk-menu">
                    <li class="nk-menu-heading">
                        <h6 class="overline-title text-primary-alt">Menu utama</h6>
                    </li><!-- .nk-menu-heading -->
                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-tile-thumb"></em></span>
                            <span class="nk-menu-text">Beranda</span>
                        </a>
                    </li><!-- .nk-menu-item -->

                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon"><em class="icon ni ni-text-rich"></em></span>
                            <span class="nk-menu-text">Kegiatan</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="{{ route('post.index') }}" class="nk-menu-link"><span class="nk-menu-text">Daftar kegiatan</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{ route('post.new') }}" class="nk-menu-link"><span class="nk-menu-text">Tambah kegiatan</span></a>
                            </li>
                        </ul><!-- .nk-menu-sub -->
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon"><em class="icon ni ni-calendar-check-fill"></em></span>
                            <span class="nk-menu-text">Pengumuman</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="{{ route('anno.index') }}" class="nk-menu-link"><span class="nk-menu-text">Daftar Pengumuman</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{ route('anno.new') }}" class="nk-menu-link"><span class="nk-menu-text">Tambah Pengumuman</span></a>
                            </li>
                        </ul><!-- .nk-menu-sub -->
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon"><em class="icon ni ni-calendar"></em></span>
                            <span class="nk-menu-text">Agenda</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="{{ route('plan.index') }}" class="nk-menu-link"><span class="nk-menu-text">Daftar agenda</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{ route('plan.new') }}" class="nk-menu-link"><span class="nk-menu-text">Tambahkan agenda</span></a>
                            </li>
                        </ul><!-- .nk-menu-sub -->
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon"><em class="icon ni ni-users"></em></span>
                            <span class="nk-menu-text">Manager Pengguna</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="{{ route('user.index') }}" class="nk-menu-link"><span class="nk-menu-text">Daftar pengguna</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{ route('user.new') }}" class="nk-menu-link"><span class="nk-menu-text">Tambah penggua</span></a>
                            </li>
                        </ul><!-- .nk-menu-sub -->
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon"><em class="icon ni ni-grid-alt"></em></span>
                            <span class="nk-menu-text">Mengenal kami</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="{{ route('app.task') }}" class="nk-menu-link"><span class="nk-menu-text">Tugas & Fungsional</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{ route('app.organization') }}" class="nk-menu-link"><span class="nk-menu-text">Struktur Organisasi</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="" class="nk-menu-link"><span class="nk-menu-text">Command Center</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="" class="nk-menu-link"><span class="nk-menu-text">Layanan</span></a>
                            </li>
                        </ul><!-- .nk-menu-sub -->
                    </li><!-- .nk-menu-item -->
                </ul><!-- .nk-menu -->
            </div><!-- .nk-sidebar-menu -->
        </div><!-- .nk-sidebar-content -->
    </div><!-- .nk-sidebar-element -->
</div>
<!-- sidebar @e -->
