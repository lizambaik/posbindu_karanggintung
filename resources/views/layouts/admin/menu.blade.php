<!-- Sidebar Menu -->
<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the  -->
        @if (auth()->user()->role == 'admin')
            {{-- ini admin --}}
        @elseif(auth()->user()->role == 'kader')
            {{-- ini kader --}}
            <li class="nav-item">
                <a href="{{ route('kader') }}" class="nav-link text-light {{ Route::is('kader') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-home"></i>
                    <p>
                        Dashboard Kader
                    </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('kader.pasien')}}" class="nav-link text-light {{ Route::is('kader.pasien') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-table"></i>
                    <p>
                        Pasien Management
                    </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('kader.periksa.pasien')}}" class="nav-link text-light {{ Request::segment(3) == 'periksa' ? 'active' : null }}">
                    <i class="nav-icon fas fa-table"></i>
                    <p>
                        Pemeriksaan Pasien
                    </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('rekap')}}" class="nav-link text-light {{ Request::segment(1) == 'excell' ? 'active' : null }}">
                    <i class="nav-icon fas fa-file-excel"></i>
                    <p>
                        Rekap Pemeriksaan
                    </p>
                </a>
            </li>
        @endif

    </ul>
</nav>
<!-- /.sidebar-menu -->
